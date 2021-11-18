<?php
//Script de passage

require '../inc/func.php';
require '../inc/pdo.php';


$tableName = $_GET['table'];
$db = tableName($tableName);
$error = [];


if (!empty($_POST['submitted'])) {
    debug($error);
    //XSS
    $title = cleanXss('title');
    $content = cleanXss('content');
    $auteur = cleanXss('auteur');
    $status = cleanXss('status');
    $img = cleanXss('img');

    $error = validInput($error,$title, 'title', 1, 255);
    $error = validInput($error,$content, 'content', 1, 3000);
    $error = validInput($error,$auteur, 'auteur', 1, 200);
    $error = validInput($error,$status, 'status', 1, 10);
    $error = validInput($error,$img, 'img', 5, 200);

    /*If not error*/
    if (count($error) == 0) {
        $sql = "INSERT INTO $tableName(title, content, auteur, status, img, created_at) 
                VALUES (:title,:content,:auteur,:status,:img, NOW())";

        // Prepare la request
        $query = $pdo->prepare($sql);
        // Injection SQL
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':content', $content, PDO::PARAM_STR);
        $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
        $query->bindValue(':status', $status, PDO::PARAM_STR);
        $query->bindValue(':img', $img, PDO::PARAM_STR);

        //executer la query
        $query->execute();
        $newId = $pdo->lastInsertId();

        header('Location: ../detail.php?id='.$newId);

    }
}

include 'inc/header_b.php';
?>
<div class="container-fluid" id="add_value">
    <h1>Ajoute un <?= $db;?></h1>
    <label class="form-label small">Prepend the input</label>
    <div class="input-group"><span class="input-group-text" id="basic-addon1">@</span>
        <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label small">Append the input</label>
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <label class="form-label small">Before and after input</label>
    <div class="input-group"><span class="input-group-text">$</span>
        <input class="form-control" type="number" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span>
    </div>

    <label class="form-label small">Addon between multiple inputs</label>
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Username" aria-label="Username"><span class="input-group-text">@</span>
        <input class="form-control" type="text" placeholder="Server" aria-label="Server">
    </div>

    <label class="form-label small">With textarea</label>
    <div class="input-group"><span class="input-group-text">Comment:</span>
        <textarea class="form-control" aria-label="Comment"></textarea>
    </div>
</div>

<?php
include ('inc/footer_b.php');

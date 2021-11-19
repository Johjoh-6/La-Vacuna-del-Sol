<?php
//Script de passage

require '../inc/func.php';
require '../inc/pdo.php';


$tableName = $_GET['table'];
$db = tableName($tableName);
$vaccinDb = false;
$usersDb = false;
if ($tableName == 'vds_vaccin') {
    $vaccinDb = true;
}
elseif ($tableName == 'vds_users'){
    $usersDb = true;
}
$error = [];


debug($error);

if ($vaccinDb) {
    echo $vaccinDb;
    if (!empty($_POST['submitted'])) {
        //For vaccin
        //XSS
        $name = cleanXss('name');
        $content = cleanXss('content');
        $rappel = cleanXss('rappel');
        $mandatory = cleanXss('obligatoire');
        $status = cleanXss('status');
        //Error
        $error = validInput($error,$name, 'name', 1, 200);
        $error = validInput($error,$content, 'content', 1, 3000);
        $error = validInput($error,$rappel, 'rappel', 1, 4);
        $error = validInput($error,$mandatory, 'obligatoire', 0, 50);
        $error = validInput($error,$status, 'status', 1, 10);

        /*If not error*/
        if (count($error) == 0) {
            $sql = "INSERT INTO $tableName(name, content, rappel,obligatoire, status) 
                VALUES ( :name ,:content,:rappel,:obligatoire,:status";

            // Prepare the request
            $query = $pdo->prepare($sql);
            // Injection SQL
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':content', $content, PDO::PARAM_STR);
            $query->bindValue(':rappel', $rappel, PDO::PARAM_INT);
            $query->bindValue(':obligatoire', $mandatory, PDO::PARAM_STR);
            $query->bindValue(':status', $status, PDO::PARAM_STR);


            //execute the query
            $query->execute();
            // return to the table
            header('Location: management-vaccine.php');

        }
    }
}
if ($usersDb) {
    echo $usersDb;
    if (!empty($_POST['submitted'])) {
        //For users
        //XSS
        $name = cleanXss('name');
        $prenom = cleanXss('prenom');
        //Do for special mention
        $dob = cleanXss('dob');
        $sex = cleanXss('sex');
        $email = cleanXss('email');
        $password = cleanXss('password');
        $role = cleanXss('role');
        // Error
        $error = validInput($error,$name, 'name', 1, 100);
        $error = validInput($error,$prenom, 'prenom', 1, 200);
        //Do for the DOB
        $error = validInput($error,$dob, 'rappel', 1, 4);
        $error = validInput($error, $sex, 'sex', 0, 30);
        $error = mailValidation($error, $email, 'email');
        $error = validInput($error,$password, 'password', 6, 100);
        $error = validInput($error,$role, 'role', 1, 10);
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

        }
        }
    }
if ($usersDb == false && $vaccinDb == false) {
    header('location: 404.php');
}


include 'inc/header_b.php';
?>
<div class="container-fluid" id="add_value">
    <h1>Ajoute un <?= $db;?></h1>
    <?php if ($vaccinDb){?>
    <label for="name" class="form-label small">Nom du vaccin</label>
    <input class="form-control" type="text" placeholder="Nom du vaccin" aria-label="name" id="name" value="<?= returnValue('name');?>">
        <span class="error-input"><?= returnError($error, 'name');?></span>

    <label for="content" class="form-label small">Description</label>
    <div class="input-group"><span class="input-group-text">Description :</span>
        <textarea class="form-control" aria-label="content" name="content" id="content" ><?= returnValue('content');?></textarea>
        <span class="error-input"><?= returnError($error, 'content');?></span>
    </div>

    <label for="rappel" class="form-label small">Année entre deux doses</label>
    <input class="form-control" type="number" placeholder="Nombre d'année" aria-label="rappel" id="rappel" value="<?= returnValue('rappel');?>" min="0" max="100" >
        <span class="error-input"><?= returnError($error, 'rappel');?></span>

    <label for="obligatoire" class="form-label small">La vaccin est-il obligatoire ?</label>
    <input class="form-control" type="radio" placeholder="Nombre d'année" aria-label="obligatoire" id="obligatoire" >
    <input class="form-control" type="radio" placeholder="Nombre d'année" aria-label="obligatoire" id="obligatoire" >
        <span class="error-input"><?= returnError($error, 'obligatoire');?></span>



    <label for="status" class="form-label small">Status</label>
            <select class="form-control" aria-label="status" name="status" id="status">
                <option value="publish">Publier</option>
                <option value="draft">Brouillon</option>
                <option value="attente">En attente</option>
            </select>
        <span class="error-input"><?= returnError($error, 'status');?></span>
        <input class="form-control" type="submit" name="submitted" id="submitted" value="Envoyer">

    <?php } if ($usersDb) { ?>
        <label class="form-label small">Prepend the input</label>
        <div class="input-group"><span class="input-group-text" id="basic-addon1">@</span>
            <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <?php } ?>
</div>

<?php
include ('inc/footer_b.php');

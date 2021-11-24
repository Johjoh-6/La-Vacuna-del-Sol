<?php
session_start();
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
$id = $_SESSION['user']['id'];
$user = $_SESSION['user'];

$error = [];
$succes = false;
if (!empty($_POST['submitted'])) {
    //For users
    //XSS
    $content = cleanXss('content');

    // Error
    $error = validInput($error,$content,'content', 10, 1000);

    if(count($error)==0){
        $sql = "INSERT INTO vds_testimonial (id_user,content, created_at, status) 
                VALUES (:id,:content, NOW(), 'draft')";

        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->bindValue(':content', $content, PDO::PARAM_STR);

        //executer la query
        $query->execute();
        $succes = true;
    }
}
include ('inc/header.php');
?>



    <section id="testimonial">
        <div class="wrap_contact">
            <?php if ($succes){ ?>
                <div style="background: black">
                    <p>Message envoyer !</p>
                    <a href="profil.php"><p>Retour à votre profil</p></a>
                </div>
            <?php }else { ?>
                <form action="" method="post" class="wrapform" novalidate>
                    <p>Merci, <?php ucfirst($user['prenom']); ?></p>
                    <label for="content">Votre avis :</label>
                    <textarea name="content" id="content" placeholder="Votre message..."></textarea>
                    <input type="submit" name="submitted" value="Envoyer">
                </form>
            <?php }?>
        </div>
    </section>




<?php
include('inc/footer.php');

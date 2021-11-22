<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
$error = [];
debug($error);
debug($_POST);
if (!empty($_POST['submitted'])) {
    //For users
    //XSS

    $name = cleanXss('name');
    $email = cleanXss('email');
    $content = cleanXss('content');

    // Error
    $error = validInput($error,$name, 'name', 1, 100);
    $error = mailValidation($error, $email, 'email');
    $error = validInput($error,$content,'content', 10, 1000);

        if(count($error)==0){
    $sql = "INSERT INTO vds_msg (name,content,email) 
                VALUES (:nam,:content,:email)";

    $query = $pdo->prepare($sql);
    $query->bindValue(':nam', $name, PDO::PARAM_STR);
    $query->bindValue(':content', $content, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);

    //executer la query
    $query->execute();

        }
}
include ('inc/header.php');
?>
<!--FINIR LE PHPé-->
<!--Contact -->
<section id="contact_head">
    <div class="text_contact">
        <h2 class="title">Contact</h2>
    </div>
</section>


<section id="contact">
    <div class="wrap_contact">

        <form action="" method="post" class="wrapform" novalidate>
            <div class="contact1">
                <div class="nom colonne">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" value="<?= returnValue('name') ?>" class="nom" placeholder="&#xf007;  Entrez votre prénom : " style="font-family:Arial, FontAwesome">
                    <span class="error"><?= returnError($error,'name')?> </span>
                </div>
                <div class="email colonne">
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email" value="<?= returnValue('email') ?>" class="input" placeholder="&#xf0e0;  Entrez votre email : " style="font-family:Arial, FontAwesome">
                    <span class="error"><?= returnError($error,'email')?></span>
                </div>
            </div>

            <div class="contact2 colonne">
                <p>Message :</p>
                <textarea name="content" id="content" placeholder="Votre message..."><?= returnValue('content') ?></textarea>
                <span class="error"><?= returnError($error,'content')?></span>
                <input type="submit" name="submitted" value="Envoyer">
            </div>
        </form>
    </div>
</section>






<?php include ('inc/footer.php')?>

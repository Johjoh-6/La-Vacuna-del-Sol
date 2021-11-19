<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
$errors = [];
$success = false;
if(!empty($_POST['submitted'])) {
    $name     = cleanXss('name');
    $email     = cleanXss('email');
    $message    = cleanXss('message');

    $errors = validInput($errors,$name,'name',2, 200);
    $errors = validInput($errors,$message,'message',5, 500);
    $errors = emailValidation($errors,$email,'email');



    if(count($errors) == 0) {

        $sql = "INSERT INTO vds (email,message,created_at)
                VALUES (:email,:message,NOW())";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',  $email,PDO::PARAM_STR);
        $query->bindValue(':message',$message, PDO::PARAM_STR);
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
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" value="" class="nom" placeholder="&#xf007;  Entrez votre prénom : " style="font-family:Arial, FontAwesome">
                    <span class="error"></span>
                </div>
                <div class="email colonne">
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email" value="" class="input" placeholder="&#xf0e0;  Entrez votre email : " style="font-family:Arial, FontAwesome">
                    <span class="error"></span>
                </div>
            </div>

            <div class="contact2 colonne">
                <p>Message :</p>
                <textarea name="message" placeholder="Votre message..."><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                <span class="error"></span>
                <input type="submit" name="submitted" value="Envoyer">
            </div>
        </form>

    </div>
</section>






<?php include ('inc/footer.php')?>

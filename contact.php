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
    <div class="text_contact">
        <span id="contact_head">Contact</span>
    </div>
    <div class="bk_contact">
        <div id="contact">
            <form action="">
                <div class="contact2">
                    <div class="emoji_name"><img src="asset/img/avatar-svgrepo-com.svg" alt=""></div>
                    <label for="name" class="label_name"> Votre Nom *
                        <input type="text" id="name" name="name" class="input" placeholder= "Entrez Notre Nom" value="">
                    </label>
                    <span class="error"></span>

                    <div class="emoji_mail"><img src="asset/img/mail-svgrepo-com.svg" alt=""></div>
                    <label for="email" class="label_email">Votre E-mail *
                        <input type="email" id="email" class="input" name="email" placeholder="Entrez Votre E-mail" value="">
                    </label>
                    <span class="error"></span>
                </div>

                <div class="message">
                    <label for="message" class="label_message">Message
                        <textarea name="message" id="message" placeholder="Entrez Votre Message"></textarea>

                        <span class="error"></span>
                </div>
                <input type="submit" name="submitted" id="submit"  value="Envoyer le message">
                <span class="error"></span>

            </form>
        </div>
    </div>

<?php include ('inc/footer.php')?>

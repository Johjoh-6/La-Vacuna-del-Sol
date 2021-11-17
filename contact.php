<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');
?>

    <!--Contact -->
<div class="text_contact">
    <h1>Contact</h1>
</div>
    <div id="contact">
        <form action="">
            <div class="contact2">
                <div class="emoji_name"><img src="asset/img/avatar-svgrepo-com.svg" alt=""></div>
                <label for="name" class="label_name"> Votre Nom *
                    <input type="text" id="name" name="name" class="input" placeholder= "Entre Notre Nom">
                </label>
                <span class="error"></span>

                <div class="emoji_mail"><img src="asset/img/mail-svgrepo-com.svg" alt=""></div>
                <label for="email" class="label_email">Votre E-mail *
                    <input type="email" id="email" class="input" name="email" placeholder="Entrer Votre E-mail">
                </label>
                <span class="error"></span>
            </div>

            <div class="message">
                <label for="message" class="label_message">Message
                <textarea name="message" id="message" placeholder="Entrer Votre Message"></textarea>

                <span class="error"></span>
            </div>
            <input type="submit" name="submitted" id="submit"  value="Envoyer la requête">
            <span class="error"></span>

        </form>
    </div>


<?php
include ('inc/footer.php');

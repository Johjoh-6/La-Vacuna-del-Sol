<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');
?>

    <!--Contact -->
<div class="wrap5">
    <form action="">
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="Votre Nom">
        <span class="error"></span>

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Votre E-mail">
        <span class="error"></span>

        <label for="message"></label>
        <textarea name="message" id="message" placeholder="Votre Message" ></textarea>
        <span class="error"></span>

        <input type="submit" name="submitted" value="Envoyer la requête">

    </form>
</div>

<?php
include ('inc/footer.php');

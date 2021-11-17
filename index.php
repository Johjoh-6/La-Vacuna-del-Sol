<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here



include ('inc/header.php');
?>

<!--MAIN INDEX USER-->


<section id="connexion">
    <div class="wrap2">
        <div class="rond"></div>
        <div class="fille">
            <img src="asset/img/accueil.png" alt="">
        </div>
        <div class="cadre">
            <form action="" method="post" class="wrapform" novalidate>
                <label for="login">E-mail ou Pseudo</label>
                <input type="text" id="login" name="login" value="" class="input" placeholder="&#xF002;  Entrez votre email ou votre pseudo " style="font-family:Arial, FontAwesome">
                <span class="error"></span>

                <label for="password">Mot de passe *</label>
                <input type="password" id="password" name="password" value="" class="input" placeholder="&#xF002;Entrez votre mot de passe">
                <input type="submit" name="submitted" value="Connexion" class="submit input2">
                <a href="inscription.php" class="submit">Inscription</a>
            </form>
        </div>
    </div>
</section>


<?php
include ('inc/footer.php');

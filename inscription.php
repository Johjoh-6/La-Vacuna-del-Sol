<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');?>
<section id="formulaire">
    <h2>Crée ton compte</h2>
    <form class="wrap_account" action="" method="post">
        <div>
            <label for="name">Nom: </label>
            <input type="text"
                   name="name"
                   id="name"
                   placeholder="Votre nom"
                   value="">
        </div>

        <div>
            <label for="fname">Prénom:</label>
            <input type="text"
                   name="fname"
                   placeholder="Votre Prénom"
                   value="">
        </div>

        <div>
            <label for="date">Date de naissance:</label>
            <input type="date"
                   name="date">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Votre email" value="">
            <span class="error"></span>
        </div>
        <div class="sexe">
            <p>Sexe</p>
            <label for="femme">
                <input type="radio" name="genre" value="femme"><span>femme</span>
            </label>
            <label for="homme">
                <input type="radio" name="genre" value="homme"><span>homme</span>
            </label>
        </div>

        <div>
            <label for="mdp">Mot de passe:</label>
            <input type="password"
                   name="password"
                   placeholder="Mot de passe">

            <label for="password">Confirmer votre mot de passe:</label>
            <input type="password"
                   name="re_password"
                   placeholder="Mot de passe">
        </div>
            <input class ="submit_inscription" type="submit" id="submitted" name="submitted">
            <p><a href="index.php" class="ca">Vous avez déjà un compte ?</a></p>
    </form>
</section>
<?php
include ('inc/footer.php');
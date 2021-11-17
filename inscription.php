<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');?>

    <form class="wrap_account" action="" method="post">
        <h2>Crée ton compte</h2>


        <div>
            <label for="name">Nom</label>
            <input type="text"
                   name="name"
                   id="name"
                   placeholder="Votre nom"
                   value="">
        </div>

        <div>
            <label for="fname">Prénom</label>
            <input type="text"
                   name="fname"
                   placeholder="Votre Prénom"
                   value="">
        </div>

        <div>
            <label for="date">Date de naissance</label>
            <input type="date"
                   name="date">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="">
            <span class="error"></span>
        </div>
        <div class="sexe">
            <label for="sexes">Sexe</label>
            <input type="radio" name="genre" value="femme"><span>femme</span>
            <input type="radio" name="genre" value="homme"><span>homme</span>
        </div>

        <div>
            <label for="mdp">Mot de passe:</label>
            <input type="password"
                   name="password"
                   placeholder="Mot de passe">

            <label for="mdp2">Confirmer votre mot de passe:</label>
            <input type="password"
                   name="re_password"
                   placeholder="Mot de passe">
        </div>
        <div>
            <button type="submit">Envoyer</button>
            <a href="index.php" class="ca">Vous avez déjà un compte ?</a>
        </div>

    </form>

<?php
include ('inc/footer.php');
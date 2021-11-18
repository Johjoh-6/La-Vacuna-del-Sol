<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');?>
    <section id="formulaire">
        <div class="wrap_accounts">
        <div class="title">
            <h2>Crée ton compte</h2>
        </div>
        <form class="wrap_account" action="" method="post">
            <div>
                <label for="name">Nom: </label>
                <input class="input_inscription" type="text"
                       name="name"
                       id="name"
                       placeholder="Votre nom"
                       value="<?php returnValue('name') ?>">
            </div>

            <div>
                <label for="fname">Prénom:</label>
                <input class="input_inscription" type="text"
                       name="fname"
                       placeholder="Votre Prénom"
                       value="<?php returnValue('fname')?>">
            </div>

            <div>
                <label for="date">Date de naissance:</label>
                <input class="input_date" type="date"
                       name="date" value="<?php returnValue('date') ?>">
            </div>
            <div>
                <label for="email">Email:</label>
                <input class="input_inscription" type="email" id="email" name="email" placeholder="Votre email" value="<?php returnValue('email') ?>">
                <span class="error"></span>
            </div>
            <div class="sexe">
                <label class="sex">Sexe:</label>

                <input type="radio" name="sexe" id="femme" value="femme" />

                <label for="femme">Femme</label>

                <input type="radio" name="sexe" id="homme" value="homme" />

                <label for="homme">Homme</label>
            </div>

            <div>
                <label for="mdp">Mot de passe:</label>
                <input class="input_inscription" type="password"
                       name="password"
                       placeholder="Mot de passe" value="<?php ?>">

                <label for="password">Confirmer votre mot de passe:</label>
                <input class="input_inscription" type="password"
                       name="re_password"
                       placeholder="Mot de passe"
                       value="<?php ?>">
            </div>
            <div class="submits">
                <input class ="submit_inscription" type="submit" id="submitted" name="submitted">
            </div>
        </form>
        </div>
    </section>
<?php
include ('inc/footer.php');
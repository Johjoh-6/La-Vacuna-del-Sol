<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
require ('admin/add-users.php');
include ('inc/header.php');?>

    <section id="contact_head">
        <div class="text_contact">
            <h2 class="title">Crée ton compte</h2>
        </div>
    </section>

    <section id="formulaire">
        <?php if ($succes) { ?>
            <p class="title">Félicitation</p>
            <p>Nous avez creer votre compte</p>
            <a href="index.php">
                <p>Retour a l'accuiel</p>
            </a>
        <?php } else { ?>
        <div class="wrap_accounts">
            <form class="wrap_account" action="" method="post">
                <div class="form_left">
                    <div>
                        <label for="name">Nom: </label>
                        <input class="input_inscription" type="text" name="name" id="name" placeholder="Votre nom" value="<?= returnValue('name') ?>">
                        <span class="error"><?= returnError($error, 'name');?></span>
                    </div>

                    <div>
                        <label for="prenom">Prénom:</label>
                        <input class="input_inscription" type="text" name="prenom" placeholder="Votre Prénom" value="<?= returnValue('prenom')?>">
                        <span class="error"><?= returnError($error, 'prenom');?></span>
                    </div>
                    <div>
                        <label for="dob">Date de naissance:</label>
                        <input class="input_date" type="date" name="dob" value="<?php if (!empty($_POST['dob'])){ echo transformDate($_POST, 'dob');} ;?>">
                        <span class="error"><?= returnError($error, 'dob');?></span>
                    </div>
                </div>

                <div class="form_right">
                    <div class="email">
                        <label for="email">Email:</label>
                        <input class="input_inscription" type="email" id="email" name="email" placeholder="Votre email" value="<?= returnValue('email') ?>">
                        <span class="error"><?= returnError($error, 'email');?></span>
                    </div>
                    <div class="mdp">
                        <label for="password">Mot de passe:</label>
                        <input class="input_inscription" type="password" name="password" placeholder="Mot de passe" >
                        <span class="error"><?= returnError($error, 'password');?></span>
                    </div>
                    <div class="mdp2">
                        <label for="password_confirm">Confirmer votre mot de passe:</label>
                        <input class="input_inscription" type="password" name="password_confirm" placeholder="Mot de passe">
                        <span class="error"><?= returnError($error, 'password_confirm');?></span>
                    </div>
                    <h3>Sexe :</h3>
                    <div class="sex">
                        <label for="sexe">Femme</label>
                        <input type="radio" name="sexe" class="sexe" id="sexe" value="femme" >
                        <label for="sexe">Homme</label>
                        <input type="radio" name="sexe" id="sexe" class="sexe" value="homme" checked>
                    </div>
                </div>
                <div class="envoyer">
                    <input class ="submit_inscription" type="submit" id="submitted" value="Danser" name="submitted">
                </div>
            </form>
        </div>
    <?php } ?>
    </section>

<?php include ('inc/footer.php');
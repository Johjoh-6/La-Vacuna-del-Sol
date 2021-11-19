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
        <div class="wrap_accounts">
            <form class="wrap_account" action="" method="post">
                <div class="form_left">
                    <div>
                        <label for="name">Nom: </label>
                        <input class="input_inscription" type="text" name="name" id="name" placeholder="Votre nom" value="<?php returnValue('name') ?>">
                        <span class="error"><?= returnError($error, 'name');?></span>
                    </div>

                    <div>
                        <label for="prenom">Prénom:</label>
                        <input class="input_inscription" type="text" name="prenom" placeholder="Votre Prénom" value="<?php returnValue('prenom')?>">
                        <span class="error"><?= returnError($error, 'prenom');?></span>
                    </div>
                    <div>
                        <label for="dob">Date de naissance:</label>
                        <input class="input_date" type="date" name="dob" value="<?php echo date('Y-m-d', strtotime(date('Y-m-d')));?>">
                        <span class="error"><?= returnError($error, 'dob');?></span>
                    </div>

                </div>

                <div class="form_right">
                    <div class="email">
                        <label for="email">Email:</label>
                        <input class="input_inscription" type="email" id="email" name="email" placeholder="Votre email" value="<?php returnValue('email') ?>">
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
                    <h3>Sex :</h3>
                    <div class="sex">
                        <label for="sexe">Femme</label>
                        <input type="radio" name="sexe" id="sexe" value="femme" >
                        <label for="sexe">Homme</label>
                        <input type="radio" name="sexe" id="sexe" value="homme" checked>
                    </div>
                </div>
                <div class="envoyer">
                    <input class ="submit_inscription" type="submit" id="submitted" name="submitted">
                </div>
            </form>
        </div>
    </section>

<?php include ('inc/footer.php');
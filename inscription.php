<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');?>

    <form action="" method="post">
        <h2>Crée ton compte</h2>



        <label for="names">Nom</label>
        <input type="text"
               name="name"
               placeholder="Votre nom"
               value=""><br>


        <label>Prénom</label>
        <input type="text"
               name="name"
               placeholder="Votre Prénom"
               value=""><br>




        <label>Date de naissance</label>
        <input type="date"
               name="date"><br>

        <label>Email</label>
        <input type="email" id="email" name="email" value=""><br>
        <span class="error"></span>


        <label>Sexe</label>
        <input type="radio" name="Genre" value="Femme"> une femme
        <input type="radio" name="Genre" value="Homme"> un homme<br>

        <label>Mot de passe:</label>
        <input type="password"
               name="password"
               placeholder="Mot de passe"><br>

        <label>Mot de passe 2:</label>
        <input type="password"
               name="re_password"
               placeholder="Mot de passe"><br>

        <button type="submit">Envoyer</button>
        <a href="index.php" class="ca">Vous avez déjà un compte ?</a>
    </form>

<?php
include ('inc/footer.php');
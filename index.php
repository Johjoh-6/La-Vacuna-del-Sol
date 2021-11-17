<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here



include ('inc/header.php');
?>

<!--MAIN INDEX USER-->


<section id="connexion">
    <div class="wrap2">
        <div class="box">
            <div class="rond"></div>
            <div class="hotesse">
                <img src="asset/img/accueil.png" alt="">
            </div>
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


<section id="details">
    <div class="wrap3">

        <div class="title">
            <h2>Vaccinés vous chez la meilleur equipe</h2>
        </div>


        <div class="cards">
            <div class="card">
                <img src="https://picsum.photos/100" alt="card">
                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
            </div>
            <div class="card">
                <img src="https://picsum.photos/200" alt="card">

                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                <a href="" class="discover">Découvir le profil</a>
            </div>
            <div class="card">
                <img src="https://picsum.photos/500" alt="card">
                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                <a href="" class="discover">Découvir le profil</a>
            </div>
            <div class="card">
                <img src="https://picsum.photos/800" alt="card">
                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                <a href="" class="discover">Découvir le profil</a>
            </div>
            <div class="card">
                <img src="https://picsum.photos/300" alt="card">
                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                <a href="" class="discover">Découvir le profil</a>
            </div>
            <div class="card">
                <img src="https://picsum.photos/600" alt="card">
                    <h2>Chargée de projet</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                <a href="" class="discover">Découvir le profil</a>
            </div>
        </div>
    </div>
</section>


<?php include ('inc/footer.php');

<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
session_start();

require ('inc/connection.php');
$testimonialRandom = getTestiRandomLimit(5);
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
                    <label for="login">E-mail</label>
                    <input type="text" id="login" name="login" value="<?= returnValue('login') ?>" class="input" placeholder="&#xf007;  Entrez votre email" style="font-family:Arial, FontAwesome">
                    <span class="error"><?= returnError($error,'login')?></span>

                    <label for="password">Mot de passe *</label>
                    <input type="password" id="password" name="password" value="<?= returnValue('password') ?>" class="input" placeholder="&#xf023; Entrez votre mot de passe" style="font-family:Arial, FontAwesome">
                    <span class="error"><?= returnError($error,'password')?></span>
                    <input type="submit" name="submitted" value="Connexion" class="submit input2">
                    <a href="inscription.php" class="submit">Inscription</a>
                </form>
            </div>
        </div>
    </section>


    <section id="parallax">
        <div class="wrap_para">
            <h1>Rejoignez nous</h1>
            <div class="separator"></div>
            <p>Tout comme nos 11 millions d'autres utilisateurs inscrivez-vous et utiliser la vacuna del sol pour garder la mains sur vos vaccins, benefciez de mails de rappels lorsque un de vos vaccins doit être renouvelé, un service a disposition 7 jours sur 7 de 8h à 21h. </p>
            <a href="inscription.php">Inscrivez vous ici</a>
        </div>
    </section>



    <section id="details">
        <div class="wrap3">
            <div class="title">
                <h2>Vaccinés vous chez la meilleur equipe</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">
                    <h2>Docteur JO</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">

                    <h2>Docteur Maxence</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">
                    <h2>Docteur Mathis</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">
                    <h2>Docteur Marie</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">
                    <h2>Docteur Luc</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
                <div class="card">
                    <img src="asset/img/img-2.jpeg" alt="card">
                    <h2>Docteur Antoine</h2>
                    <p>Pierre Henry devloppeur depuis 23 ans</p>
                    <a href="" class="discover">Découvir le profil</a>
                </div>
            </div>
        </div>
    </section>

    <section id="slider">
        <div class="wrap4">
            <div class="title">
                <h2>Avis de nos client</h2>
            </div>
            <div class="container">
                <div class="wrapper">
                    <!--Need at least 5 element-->
                    <?php foreach ($testimonialRandom as $testi) { ?>
                    <div class="card">
                        <div class="card-body">
                            <p class="review"><i class="fas fa-quote-left"></i><?= substr($testi['content'], 0, 150); ?><i class="fas fa-quote-right"></i></p>
                            <p><?= $testi['name'];?></p>
                            <p><?= $testi['prenom'];?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="indicators">
                    <button class="active"></button>
                    <button ></button>
                    <button ></button>
                    <button ></button>
                    <button ></button>
                </div>
            </div>
        </div>
    </section>

<?php include ('inc/footer.php');

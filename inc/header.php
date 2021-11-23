<?php

if(!empty($_SESSION['user'])){
    $connected = true;
}else {
    $connected = false;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://srmahour.github.io/custom-testimonial-slider-and-blog/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://srmahour.github.io/custom-testimonial-slider-and-blog/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/reset.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/responsive.css">
    <title>La vacuna del sol</title>
</head>
<body>

<!--Header-->

<header id="navbar" class="nav">

        <div class="wrap">
            <div class="logo">
                <img src="asset/img/logo.png" alt="">
            </div>
            <nav>
                <a class="icon" onclick="myFunction()">&#9776;</a>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php#details">A propos</a></li>
                    <li><a href="contact.php">Contacter</a></li>

                    <?php if ($connected) { ?>
                    <li><a href="profil.php">Mon carnet</a></li>
                    <li><a href="inc/logout.php" class="box_header">Deconnexion</a></li>
                    <?php } else { ?>
                        <li><a href="inscription.php" class="box_header">Inscription</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
</header>




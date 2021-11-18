<?php
// Check if he is connected
session_start();
require ('../inc/func.php');
require ('../inc/pdo.php');
// Check if he got a rank admin!

// Set PHP here
$title = 'Dashboard';



include ('inc/header_b.php');
?>

            <h1><?= $title; ?></h1>




<?php
include ('inc/footer_b.php');

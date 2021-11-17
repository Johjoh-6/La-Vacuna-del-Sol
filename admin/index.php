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

    <!--MAIN INDEX Admin-->
<h1>admin</h1>
    <a href="404.php">404</a>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title;  ?></h1>


<?php
include ('inc/footer_b.php');

<?php
session_start();
require('../inc/pdo.php');
require('../inc/func.php');

$title = '404 not found';
$tab = [[2 => 'deux', '3', 'quatre'],[5,6,7],['x','y','z']];

echo $tab[0][3] + $tab[1][2] . $tab[2][1+1];
include('inc/header_b.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-blue-800 mb-4">Page Not Found</p>
            <p class="text-blue-500 mb-0">Please go back to the </p>
            <a href="index.php">Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php
include('inc/footer_b.php');
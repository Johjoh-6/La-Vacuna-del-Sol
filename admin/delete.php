<?php
//Script de passage

require '../inc/func.php';
require '../inc/pdo.php';



if (!empty($_GET['id']) && is_numeric($_GET['id'])&& !empty($_GET['table'])) {
    $id = $_GET['id'];
    $tableName = $_GET['table'];
    getById($tableName, $id);
    /*Add delete mod*/
    /*Return to the previous page */
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
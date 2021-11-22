<?php
$error = [];
if(!empty($_POST['submitted'])) {


$login    = cleanXss('login');
$password = cleanXss('password');

$sql = "SELECT * FROM vds_users WHERE email = :login";
$query = $pdo->prepare($sql);
$query->bindValue(':login',$login,PDO::PARAM_STR);
$query->execute();

$vds_users = $query->fetch();

if(!empty($user)) {
if(password_verify($password, $user['password'])) {
$_SESSION['user45376'] = array(
'id'      => $user['id'],
'email'   => $user['email'],
'role'    => $user['role'],
'ip'      => $_SERVER['REMOTE_ADDR'] // ::1
);
header('Location: index.php');
} else {
$error['login'] = 'test';
}
} else {
$error['login'] = 'Veuillez rentrer un e-mail correct';
}
}
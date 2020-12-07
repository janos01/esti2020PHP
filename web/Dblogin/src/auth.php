<?php 
session_start();
include 'includes/database.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$authOk = auth($user, $pass);

if($authOk) {
    $_SESSION['authOk'] = 1;
    header('Location: secret.php');
}else {
    header('Location: index.php');
}

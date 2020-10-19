<?php
/* Nagy János, 2020-10-19, esti */
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$authok = false;
if($user == "janos" && $pass == "titok") {
  $authok = true;
}
if($authok) {
  //$msg = "Azonosítás sikeres";
  $_SESSION['authOk']=1;
  header('Location: internal.php');
}else {
  $msg = "Sikertelen! Rossz felhasználónév vagy jelszót!";
}
echo file_get_contents('templates/head.tpl');

$page = file_get_contents('templates/auth.tpl');
$page = str_replace('{{ msg }}', $msg, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');

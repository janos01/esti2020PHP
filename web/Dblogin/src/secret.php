<?php
session_start();

echo file_get_contents('templates/head.tpl');

if( isset($_SESSION['authOk']) ) {
    echo file_get_contents('templates/secret.tpl');    
}else {
    echo "Nem vagy bejelentkezve!";
}

echo file_get_contents('templates/foot.tpl');

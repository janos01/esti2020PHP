<?php
include 'includes/adatbazis.php';

echo file_get_contents('templates/head.tpl');

$page =  file_get_contents('templates/lista.tpl');

$datar = lekerJarmuvek();
$n = count($datar);
for($i=0; $i<$n; $i++) {
    $tabla_test = '';
    $datar[$i]['rendszam'];
}

$page = str_replace('{{tabla_test}}', $tabla_test, $page);

echo $page;


echo file_get_contents('templates/foot.tpl');

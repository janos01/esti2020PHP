<?php
/* Sallai András, 2020-10-05 */
//átvesszük
$sugar = $_GET['sugar'];
$magassag = $_GET['magassag'];

//számítás
$terfogat = 1.0/3.0 * pow($sugar, 2) * pi() * $magassag;

echo file_get_contents('templates/head.tpl');

$page = file_get_contents('templates/calc.tpl');
$page = str_replace('{{ eredmeny }}', $terfogat, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');

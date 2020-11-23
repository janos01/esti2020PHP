<?php
/* Nagy János, 2020-11-23, esti Szoft */
include "includes/fajlkezeles.php";
include "includes/megoldas.php";

$tomb = beolvas();
$osszeg =  lekerOsszFizetes($tomb);

echo file_get_contents('templates/head.tpl');

$page = file_get_contents('templates/index.tpl');
$page = str_replace('{ osszeg }', $osszeg, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');

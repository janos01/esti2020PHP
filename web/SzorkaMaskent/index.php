<?php

echo file_get_contents('templates/head.tpl');

$szam = 35;
$szam2 = 47;
$eredmeny = ($szam * 2) + ($szam2 *2);

$page = file_get_contents('templates/index.tpl');
$page = str_replace('{{ eredmeny }}', $eredmeny, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');

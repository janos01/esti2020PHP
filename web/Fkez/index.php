<?php
include 'includes/latogatok.php';

echo file_get_contents('templates/head.tpl');

$page = file_get_contents('templates/index.tpl');


$latogatok = lekerLatogatok();

$page = str_replace('{{ latogato }}',
    $latogatok, $page);
echo $page;


echo file_get_contents('templates/foot.tpl');

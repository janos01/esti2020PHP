<?php

include 'includes/database.php';

$datar = getMoves();

echo file_get_contents('templates/head.tpl');
$page = file_get_contents('templates/lista.tpl');

$sorok = '';
foreach($datar as $row) {
	$line = '<tr>';
	$line .= '<td>' . $row['cim'] . '</td>';
	$line .= '<td>' . $row['ev'] . '</td>';
	$line .= '<td>' . $row['rendezo'] . '</td>';
	$line .= '<td>' . $row['leiras'] . '</td>';
	$line .= '<td>' . $row['allapot'] . '</td>';
	
	$line .= '</tr>';
	$sorok .= $line;
}

$page = str_replace('{{filmek}}', $sorok, $page);

echo $page;

echo file_get_contents('templates/foot.tpl');

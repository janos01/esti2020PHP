<?php

$a = -45;
echo abs($a);

echo "<br>Fel kerekítés: ";
$b = 4.1;
echo ceil($b);

echo "<br>Le kerekítés: ";
$b = 4.9;
echo floor($b);

echo "<br>Normál kerekítés: ";
$b = 4.4;
echo round($b);

echo "<br>Cos: ";
$szog = 1;
$rad = $szog * pi() / 180;
echo cos($rad);

echo "<br>sin: ";
$szog = 1;
$rad = $szog * pi() / 180;
echo sin($rad);

echo "<br>tan: ";
$szog = 1;
$rad = $szog * pi() / 180;
echo tan($rad);

echo "<br>Hatványozás: ";
echo pow(2, 8);

echo "<br>Gyökvonás: ";
echo sqrt(18);

echo "<br>Véletlen: ";
echo rand(1, 3);

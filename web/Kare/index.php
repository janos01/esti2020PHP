<?php

$a = 35;

echo 'Szám: $a';
echo "<br>";
echo "Szám: $a";

$b = <<<VEGE
egy
kettő
három
$a
VEGE;

$c = <<<'VEGE'
egy
kettő
három
$a
VEGE;

echo "<hr>";
echo $b . "<br>";
echo $c . "<br>";

echo "<hr>";

echo chr(99) . "<br>";
echo ord('=') . "<br>";

$a = 'alma';
$b = 'körte';
$c = $a . $b;

$a .= "Szilva";
$a = $a . "Szilva";

echo "<hr>";
echo strlen($a);

echo "<hr>";
echo strlen('éé');

echo "<hr>";
     // 0123456789
$nev = "Nagy János";
  //     indextől ennyi darab
$vez = substr($nev, -3, 2);
echo $vez;

$joska = "Nagy József:Szolnok:2850000:27";
$tomb = preg_split('/:/', $joska);
echo "<hr>";
print_r($tomb);

echo "<hr>";
echo "'";
echo '"';
echo "\"";
echo '\'';

echo "<hr>";
$gyumolcs = 'alma';
echo $gyumolcs[0];

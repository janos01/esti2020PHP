<?php


$tomb[0] = 35;
$tomb[1] = 73;
$tomb[2] = 25;
$tomb[3] = 12;

// Tömb bejárása:
foreach($tomb as $a) {
	echo $a ."<br>";
}

echo "<hr>";

print_r($tomb);

$dolgozo = array(
  "nev" => "Nagy József",
  "telepules" => "Szolnok",
  "kor" => 37
);

echo "<hr>";
print_r($dolgozo);

echo "<hr>";
var_dump($dolgozo);
echo "<hr>";
var_dump($tomb);

$dolgozok = array(
  array("Nagy József", "Szolnok", 37),
  array("Palack Lajos", "Szeged", 27),
  array("Fehér Irén", "Szolnok", 38),
  array("Gombos Emese", "Miskolc", 32),
);

echo "<hr><pre>";
var_dump($dolgozok);
echo "</pre>";

foreach ($dolgozok as list($nev, $tel, $kor)) {
  echo "$nev $tel $kor<br>";
}

echo "<hr>";

echo "\n\n<table border='1'>\n";
foreach ($dolgozok as list($nev, $tel, $kor)) {
  echo "<tr>\n";
  echo "<td>$nev</td><td>$tel</td><td>$kor</td>";
  echo "</tr>\n";
}
echo "</table>";

echo "<hr>";
              //0   1  2    3   4
$szamok = array(45, 27, 32, 11, 48);

echo end($szamok) . "<br>";

asort($szamok);
print_r($szamok);
echo "<hr>";

echo count($szamok) . "<br>";


echo "<hr>";
$gyumolcsok = array();
array_push($gyumolcsok, 'alma');
array_push($gyumolcsok, 'körte');
array_push($gyumolcsok, 'barack');
array_push($gyumolcsok, 'szilva');
array_push($gyumolcsok, 'banán', 'citrom');

print_r($gyumolcsok);

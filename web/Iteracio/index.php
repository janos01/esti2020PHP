<?php

for($i = 0; $i<10; $i++) {
    echo $i . "<br>";
}
echo "<hr>";
$szam = -1;
while($szam != 0) {
    $szam = rand(0, 4);
    echo $szam . "<br>";
}

echo "<hr>";

do {
    $szam = rand(0, 4);
    echo $szam . "<br>";
}while($szam!=0);

echo "<hr>";

$szamok[0] = 35;
$szamok[1] = 45;
$szamok[2] = 23;
foreach ($szamok as $ertek) {
    echo $ertek . "<br>";
}

?>

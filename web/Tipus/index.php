<?php

$szam = "127.0";
echo gettype($szam);

echo "<br>";
$nagy = TRUE;
echo gettype($nagy);

echo "<br>";

$kar = 'b';
echo gettype($kar);
echo "<br>";

echo "alma\nkörte<br>";
echo 'alma\nkörte<br>';

// var_dump($szam);

const MAX = 500;
// MAX = 300;
echo "<br>";
echo MAX;

// Konkatenálás
echo "<br>";
$vnev = "Nagy";
$knev = "János";
$szam = 25;

echo $vnev . " " . $knev . $szam;

echo "<hr>";
// ===

$a = 35;
$b = 35.0;
if($a === $b) {
    echo "egyenlő";
}else{
    echo "nem egyenlő";
}

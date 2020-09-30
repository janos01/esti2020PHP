<?php

$a = 583.123456789;
printf("%20.3f<br>", $a);

echo "<hr>";

echo 3*4;
echo "<br>";
echo 3+4;
echo "<br>";
echo 3/4;
echo "<br>";
echo 3-4;
echo "<br>";
echo 4/3;
echo "<hr>";
$c = 580;

$b = (($a > 100) and ($c < 100));
if($b) {
  echo "Az eredmény igaz";
}else {
  echo "Hamisat kaptunk";
}

echo "<hr>";

$nev = "Nagy Borbála";
printf("\n%-20s", $nev);

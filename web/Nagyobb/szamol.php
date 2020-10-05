<?php

$szam1 = $_GET['szam1'];
$szam2 = $_GET['szam2'];


if($szam1>$szam2) {
    echo "Az első szám nagyobb.";
}else {
    echo "A második szám nagyobb.";
}

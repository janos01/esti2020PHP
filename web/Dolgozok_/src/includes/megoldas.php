<?php
/* Nagy János, 2020-11-23, esti Szoft */

function lekerOsszFizetes($tomb) {
    $osszeg = 0;
    foreach($tomb as $sor) {
        $sorTomb = explode(":", $sor);
        $fizetes = $sorTomb[4];
        $osszeg = $osszeg + $fizetes;
    }
    return $osszeg;
}

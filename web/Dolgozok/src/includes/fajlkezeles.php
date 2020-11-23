<?php
/* Nagy János, 2020-11-23, esti Szoft */

function beolvas() {
    $tomb = array();
    $fp = fopen("dolgozok.txt", "r");
    
    while(!feof($fp)) {
        $sor = fgets($fp);
        array_push($tomb, $sor);
    }    
    
    fclose($fp);
    return $tomb;
}



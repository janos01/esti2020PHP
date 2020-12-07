<?php

include '../src/includes/database.php';

echo "Azonosítás tesztelése: \n";

if(auth('agota', 'titok')) {
    echo 'Azonosítás ok';
}else {
    echo 'Hiba! Azonosítás sikertelen!';
}

echo "\n";

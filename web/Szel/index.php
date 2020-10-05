<?php

$eletkor = 13;

if($eletkor > 18) {
    echo "Felnőtt";
} elseif($eletkor <= 18 and $eletkor > 14) {
    echo "Kiskorú";
}else {
    echo "Nagyon kiskorú";
}

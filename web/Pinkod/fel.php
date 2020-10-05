<?php

$kod = $_POST['kod'];

switch($kod) {
    case "1234" :
        print('Üdv Mária');
        break;
    case "4321":
        print('Üdv Béla');
        break;
    default:
        print('Hibás kód!!!');
}
 

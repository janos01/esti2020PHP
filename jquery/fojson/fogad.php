<?php

$data = json_decode($_POST['data']);

//kiíratás
$siker = true;
if($siker) {
    echo 'siker';
}else{
    echo 'Hiba! Az adatbázisba írás sikertelen!';
}

error_log($data->nev);
error_log($data->telepules);

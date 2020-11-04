<?php

$conn = mysqli_connect('localhost', 'parker', 'titok', 'parker');

if(!$conn) {
    echo "Hiba!<br>";
    echo mysqli_connect_error();
}else {
    echo "Ok";
}

//beszúrás

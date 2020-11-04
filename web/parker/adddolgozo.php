<?php
//adddolgozo.php

$name = $_GET['name'];
$city = $_GET['city'];
$salery = $_GET['salery'];

//echo $salery;

$conn = mysqli_connect('localhost', 'parker', 'titok', 'parker');

if(!$conn) {
    echo "Hiba!<br>";
    echo mysqli_connect_error();
}else {
    echo "Ok";
}

$sql = <<<EOT
insert into dolgozok 
(nev, telepules, fizetes) 
values 
('$name', '$city', $salery)
EOT;

//echo $sql;

if(mysqli_query($conn, $sql)) {
    echo "Sikeres hozzáadás";
}else {
    echo "Hiba! A hozzáadás sikertelen!";
}

mysqli_close($conn);


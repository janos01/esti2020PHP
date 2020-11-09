<?php
//adddolgozo.php

include 'config.php';

$name = $_GET['name'];
$city = $_GET['city'];
$salery = $_GET['salery'];

//echo $salery;

echo <<<EOT

<div id="nav">
    <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="dolgozourlap.php">Hozzáadás</a></li>
        <li><a href="dolgozolista.php">Lista</a></li>
    </ul>
</div>
EOT;


$conn = mysqli_connect(
    $db['host'],
    $db['user'],
    $db['pass'],
    $db['name']
);

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

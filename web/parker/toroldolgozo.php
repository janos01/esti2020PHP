<?php

$az = $_POST['az'];

echo <<<EOT

<div id="nav">
    <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="dolgozourlap.php">Hozzáadás</a></li>
        <li><a href="dolgozolista.php">Lista</a></li>
    </ul>
</div>
EOT;


$conn = mysqli_connect('localhost', 'parker', 'titok', 'parker');

if(!$conn) {
    echo "Hiba!<br>";
    echo mysqli_connect_error();
}

$sql = <<<EOT
delete from dolgozok
where az = $az
EOT;

if(!mysqli_query($conn, $sql)) {
    echo "Hiba! Sikeretlen törlés!";
}else {
    echo "Ok, a törlése sikerült";
}

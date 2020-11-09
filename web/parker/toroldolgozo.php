<?php

$az = $_POST['az'];

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

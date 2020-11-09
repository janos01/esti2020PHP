<?php

include 'config.php';

function connectDb() {
    global $db;
    $conn = mysqli_connect(
        $db['host'],
        $db['user'],
        $db['pass'],
        $db['name']
    );
    if(!$conn) {
        echo 'Hiba! A kapcsolódás sikertelen!';
        echo mysqli_connect_error();
    }
    return $conn;
}

function closeDB($conn) {
    mysqli_close($conn);
}

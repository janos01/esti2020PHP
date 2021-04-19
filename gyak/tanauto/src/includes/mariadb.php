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
        error_log('Hiba! A kapcsolódás sikertelen!');
    }
    return $conn;    
}


function closeDb($conn) {
    mysqli_close($conn);
}

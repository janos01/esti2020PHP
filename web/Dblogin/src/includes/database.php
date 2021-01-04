<?php

include 'config.php';
include 'crypt.php';

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

function closeDb($conn) {
    mysqli_close($conn);
}

function auth($user, $pass) {
    $cryptedPass = cryptPass($pass);
    $sql = "select * from users 
where name = '$user' and pass = '$cryptedPass'";
    $conn = connectDb();
    error_log($sql);
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);    
    closeDb($conn);
    if ($count > 0) {
        return true;
    }else {
        return false;
    }
}


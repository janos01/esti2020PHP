<?php

include 'mariadb.php';

function lekerJarmuvek() {
    $conn = connectDb();
    $sql = "select * from jarmuvek";
    $res = mysqli_query($conn, $sql);
    
    for(
        $datar = array();
        $row = mysqli_fetch_assoc($res);
        $datar[] = $row
    );
    

    closeDb($conn);
    return $datar;
}

function hozzadJarmu($jarmuAdatok) {
    $conn = connectDb();  
    $sql = <<<EOT
    insert into jarmuvek 
    (rendszam, vizsga, marka, szin)
    values
    (?, ?, ?, ?)
EOT;
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss",
    $jarmuAdatok[0],
    $jarmuAdatok[1],
    $jarmuAdatok[2],
    $jarmuAdatok[3]    
    );
    mysqli_stmt_execute($stmt);
    closeDb($conn);
}


function modositJarmu($jarmuAdatok) {
    $conn = connectDb();  
    $sql = <<<EOT
    update jarmuvek set
    rendszam=?,
    vizsga=?,
    marka=?,
    szin=?
    where az=?
EOT;
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi",
    $jarmuAdatok[0],
    $jarmuAdatok[1],
    $jarmuAdatok[2],
    $jarmuAdatok[3],    
    $jarmuAdatok[4]    
    );
    mysqli_stmt_execute($stmt);
    closeDb($conn);
}


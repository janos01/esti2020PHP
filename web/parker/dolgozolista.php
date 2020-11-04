<?php
//dolgozolista.php

$conn = mysqli_connect('localhost', 'parker', 'titok', 'parker');

if(!$conn) {
    echo "Hiba!<br>";
    echo mysqli_connect_error();
}else {
    echo "Ok<br>";
}

$sql = <<<EOT
select * from dolgozok
EOT;

//echo $sql;

$res = mysqli_query($conn, $sql);

echo "<table border=1>";
echo "<tr><th>No</th><th>Név</th><th>Település</th><th>Fizetés</th></tr>";
if(mysqli_num_rows($res)>0) {    
    while($sor = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $sor['az'] . "</td>";
        echo "<td>" . $sor['nev'] . "</td>";
        echo "<td>" . $sor['telepules'] . "</td>";        
        echo "<td>" . $sor['fizetes'] . "</td>";        
        echo "</tr>";
    }
}
echo "</table>";

mysqli_close($conn);



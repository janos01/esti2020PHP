<?php
//dolgozolista.php


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

        echo <<<EOT
        <td>
        <form action="toroldolgozo.php" method="post">
            <input type="hidden" name="az" value="{$sor['az']}">
            <button type="submit">Törlés</button>
        </form>
        </td>
EOT;
        echo "</tr>";
    }
}
echo "</table>";

mysqli_close($conn);

<?php

/*
Szerző: Sallai András
2020-09-21
*/

echo <<<EOT
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>0151 feladat</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div id="container">

    <h1>0151 feladat</h1>
    

EOT;


echo "    <p>Sallai András</p>\n";

$szam = 35;
$szam2 = 47;
$eredmeny = ($szam * 2) + ($szam2 *2);

// echo "<p>Eredmény: " . $eredmeny . "<p>";
echo "    <p>Eredmény: $eredmeny</p>";



echo <<<EOT

    </div>

</body>
</html>
EOT;

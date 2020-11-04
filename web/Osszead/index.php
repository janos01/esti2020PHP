<?php

$osszeg = 0;

if(isset($_GET['szam'])) {
    $szam = $_GET['szam'];
    $osszeg = $_GET['osszeg'];
    $osszeg = $osszeg + $szam;
}

echo <<<EOT
<form method="get">

<label>Szám:</label>
<input type="text" name="szam">
<input type="hidden" name="osszeg"
value="$osszeg">
<button type="submit">Elküld</button>
</form>

<p>
Összeg: $osszeg
</p>

EOT;

<?php
if(isset($_GET['szam'])) {
    $szam = $_GET['szam'];
    $dupla = $szam * 2;
    $msg = "Eredmény: " . $dupla;
}

echo <<<EOT
<form method="get">

<label>Szám:</label>
<input type="text"
name="szam">
<button type="submit">Elküld</button>

</form>

$msg

EOT;

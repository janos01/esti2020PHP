<?php

$az = $_POST['az'];
$nev = $_POST['nev'];

echo <<<EOT

<div id="nav">
    <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="dolgozourlap.php">Hozzáadás</a></li>
        <li><a href="dolgozolista.php">Lista</a></li>
    </ul>
</div>

<p>
Biztosan törlöd ezt a dolgozót: $nev
</p>

<form action="toroldolgozo.php" method="post">
<input type="hidden" name="az" value=$az>
<button type="submit">Törlés</button>
</form>

EOT;

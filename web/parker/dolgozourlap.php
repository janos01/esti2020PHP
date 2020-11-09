<?php
//dolgozourlap.php

echo <<<EOT

<div id="nav">
    <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="dolgozourlap.php">Hozzáadás</a></li>
        <li><a href="dolgozolista.php">Lista</a></li>
    </ul>
</div>

<form action="adddolgozo.php" method="get">

    <label>Név</label>
    <input type="text" name="name"><br>

    <label>Település</label>
    <input type="text" name="city"><br>

    <label>Fizetés</label>
    <input type="text" name="salery"><br>

    <button type="submit">Felvesz</button>
</form>

EOT;

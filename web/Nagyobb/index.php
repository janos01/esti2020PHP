<?php

echo <<<EOT

<form action="szamol.php" method="get">
  <fieldset>
    <legend>Két szám</legend>

    <label>Szám1: </label>
    <input type="number" name="szam1"><br>

    <label>Szám2: </label>
    <input type="number" name="szam2"><br>

    <button type="submit">Számol</button>

  </fieldset>
</form>

EOT;

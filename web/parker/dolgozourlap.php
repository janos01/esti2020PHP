<?php
//dolgozourlap.php

echo <<<EOT
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


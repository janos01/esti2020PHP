<?php
session_start();
session_destroy();

echo file_get_contents('templates/head.tpl');

echo "Kint vagyunk";

echo file_get_contents('templates/foot.tpl');

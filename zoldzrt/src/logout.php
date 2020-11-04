<?php
/* Nagy János, 2020-10-19, esti */
session_start();
session_destroy();
header('Location: login.php');

<?php

include 'mariadb.php';

function getMoves() {
	$conn = connectDb();
	$sql = 'select * from filmek';
	$res = mysqli_query($conn, $sql);
	
	for(
		$datar = array();
		$row = mysqli_fetch_assoc($res);
		$datar[] = $row
	);
	
	closeDb($conn);
	return $datar;	
}





<?php
	include("./require.php");
error_reporting(E_ALL);
ini_set('display_errors', '0');
	$r = $mysql->loadarray("SELECT * FROM `wz_province`");
	foreach ($r as $p){
		echo $p['name'];
		echo "<br>";
	}
	
	
?>
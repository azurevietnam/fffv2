<?php
	include("./require.php");
error_reporting(E_ALL);
ini_set('display_errors', '0');
	$r = $mysql->loadarray("SELECT wz_ba_outlet_route.*,wz_ba.ba_name,wz_ba.phone FROM wz_ba_outlet_route,wz_ba WHERE wz_ba_outlet_route.ba_id = wz_ba.id and wz_ba.province_id=33 and wz_ba_outlet_route.date >= '2016-08-08'");
	$stt=1;
	foreach ($r as $p){
		echo $stt++."--".$p['sesssion']."--".$p['ba_name']."--".$p['phone'];
		echo "<br>";
	}
	
	
?>
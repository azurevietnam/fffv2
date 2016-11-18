<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_import");
	foreach ($d as $item){
			$p = str_replace(" ","",$item['ba_phone']);
			$mysql->query("UPDATE `wz_tmp_import` set `ba_phone`='".$p."' WHERE id=".$item['id']);
	}
	foreach ($d as $item){
		$x = $mysql->one_row("SELECT * FROM `wz_ba` WHERE `phone` LIKE '%".$item['ba_phone']."%'");
		if (!empty($x)){
		$mysql->query("UPDATE wz_tmp_import set ba_id='".$ba_id."' WHERE id=".$item['id']);
		}else{
			echo $item['ba_phone'];
			echo "<br>";
	}
	
?>
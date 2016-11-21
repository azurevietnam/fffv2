<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_ba");
	echo "<h4>Fix BA PHONE </h4>";
	foreach ($d as $item){
			$p = str_replace(" ","",$item['BA Phone']);
			$test = explode("-",$p);
			$phone = $test[0];
			$sodautien = substr($phone,0,1);
			if ($sodautien <> "0") $phone = "0".$phone;
			
			$mysql->query("UPDATE `wz_tmp_ba` set `BA Phone`='".$p."' WHERE id=".$item['id']);
	}
	foreach ($d as $item){
		$x = $mysql->one_row("SELECT * FROM `wz_ba_sup` WHERE `ba_name` LIKE '%".$item['BA Leader']."%'");
		if (!empty($x)){
			$mysql->query("UPDATE `wz_tmp_ba` set `sup_id`='".$x['id']."' WHERE id=".$item['id']);
		}else{
			echo "Không có leader --". $item['BA Phone'];
			echo "<br>";
		}
		
		$x = $mysql->one_row("SELECT * FROM `wz_province` WHERE `name` LIKE '%".trim($item['Province'])."%'");
		if (!empty($x)){
			$mysql->query("UPDATE `wz_tmp_ba` set `province_id`='".$x['id']."' WHERE id=".$item['id']);
			//$mysql->query("UPDATE wz_tmp_import set ba_id='".$x['id']."' WHERE id=".$item['id']);
		}else{
			echo "Không có province --". $item['BA Phone']; echo "--";
			echo "SELECT * FROM `wz_province` WHERE `name` LIKE '%".$item['Province']."%'";
			echo "<br>";
		}
	}
	
?>
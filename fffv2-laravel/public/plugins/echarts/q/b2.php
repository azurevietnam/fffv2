<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_ba");
	echo "<h4>Xac minh SUP Cho BA </h4>";

	foreach ($d as $item){
		$x = $mysql->one_row("SELECT * FROM `wz_ba_sup` WHERE `ba_name` LIKE '%".$item['BA Leader']."%'");
		if (!empty($x)){
			$mysql->query("UPDATE `wz_tmp_ba` set `sup_id`='".$x['id']."' WHERE id=".$item['id']);
		}else{
			echo "Không có leader --". $item['BA Phone'];
			echo "<br>";
		}
	}
	echo "Xác minh sup xong";
?>
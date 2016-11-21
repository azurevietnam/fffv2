<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	
	echo "<h4>Xoa cac cot date = rong</h4>";
	
	$mysql->query("DELETE FROM wz_tmp_import where `date` = ''");
	
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_import where `ba_id` IS NULL");
	foreach ($d as $item){
			$p = str_replace(" ","",$item['ba_phone']);
			$mysql->query("UPDATE `wz_tmp_import` set `ba_phone`='".$p."' WHERE id=".$item['id']);
	}
	$mangkhongco = array();
	foreach ($d as $item){
		$x = $mysql->one_row("SELECT * FROM `wz_ba` WHERE `phone` LIKE '%".$item['ba_phone']."%'");
		if (!empty($x)){
			$mysql->query("UPDATE wz_tmp_import set ba_id='".$x['id']."' WHERE id=".$item['id']);
		}else{
			if (!in_array($item['ba_phone'],$mangkhongco))
				$mangkhongco[] = $item['ba_phone'];
			}
	}
	if (count($mangkhongco) > 0){
		for ($i=0;$i < count($mangkhongco);$i++){
			echo "Khong co BA: ". $mangkhongco[$i]."</br>";
		}
	}
	echo "<h4> Xác minh BA hoàn tất</h4>";
?>

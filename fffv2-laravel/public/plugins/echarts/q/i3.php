<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	echo "<h4>Chen cac outlet chua co vao database </h4>";
	// update toan bo outlet ID
	$d = $mysql->loadarray("SELECT * FROM `wz_tmp_import`  WHERE `outlet_db_id` = 0  group by `outlet_name`,`outlet_address`,`street`");
	foreach ($d as $item){
		$kt = $mysql->one_row("SELECT * FROM wz_outlet_location WHERE `outlet_id` = '".$item['outlet_id']."'");
		if (empty($kt)){
		
			$mysql->query("INSERT INTO wz_outlet_location (`outlet_id`,`outlet_name`,`address_line2`,`address_line3`,`province_id`,`event`) VALUES ('".addslashes($item['outlet_id'])."','".addslashes($item['outlet_name'])."','".addslashes($item['outlet_address'])."','".addslashes($item['street'])."','".$item['province_id']."','0')");
			$outlet_db_id = $mysql->insert_id();
			
			echo "Them moi outlet: ".$item['outlet_name'] ."<br>";
			
			$mysql->query("UPDATE  `wz_tmp_import` set `outlet_db_id`='".$outlet_db_id."' WHERE `outlet_id`='".$item['outlet_id']."'");
			
		}else{
			$mysql->query("UPDATE  `wz_tmp_import` set `outlet_db_id`='".$kt['id']."' WHERE `outlet_id` = '".$item['outlet_id']."'");
		}
	}
	
	
?>
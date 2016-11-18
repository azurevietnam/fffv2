<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM `wz_tmp_import` where outlet_id='NEW' group by `outlet_name`,`outlet_address`,`street`");
	//truy van maxID;
	
	$max_outletID  = $mysql->one_row("SELECT * FROM `wz_outlet_location` ORDER BY id DESC");
	$max_outletID = $max_outletID['id'];
	
	foreach ($d as $item){
		$outlet_id = strtolower(trim($item['outlet_id']));
		if ($outlet_id == "new"){
			//Buoc1: kiem tra xem co quan nay trong he thong chua (de phong nhap lieu sai)
			//$outlet_id = rand(200000000,300000000);
			
			$kt = $mysql->one_row("SELECT * FROM wz_outlet_location WHERE `outlet_name` LIKE '%".addslashes(trim($item['outlet_name']))."%' and  `address_line3` LIKE '%".addslashes(trim($item['street']))."%'");
			
			//neu khong tim thay insert quan moi voi id=max+1; sau do update lai maxID
			if (empty($kt)){
				//Neu khong co 
				$max_outletID = $max_outletID + 1 ;
				
				$mysql->query("UPDATE `wz_tmp_import` set `outlet_id`='".$max_outletID."' WHERE outlet_name='".addslashes($item['outlet_name'])."' and outlet_address='".addslashes($item['outlet_address'])."' and street='".addslashes($item['street'])."'");
				//Update bien MaxID+=1;
				
				
			}else{
				$mysql->query("UPDATE `wz_tmp_import` set `outlet_id`='".$kt['outlet_id']."' WHERE outlet_name='".addslashes($item['outlet_name'])."' and outlet_address='".addslashes($item['outlet_address'])."' and street='".addslashes($item['street'])."'");
			}
			//neu tim thay: cap nhat lai vao bang tam 
		}
		
	}
	echo "<h4>Hoàn tất outlet new</h4>";
	
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM `wz_tmp_import` WHERE ba_id is not null group by ba_phone, date, start");
	
	foreach ($d as $item){
		$outlet = array();
		$outlet_old_db = array();
		
		$x = $mysql->loadarray("SELECT * FROM `wz_tmp_import` WHERE `ba_phone` ='".$item['ba_phone']."' and `date` ='".$item['date']."' and `start` ='".$item['start']."'");
		foreach($x as $y){
			$outlet[] = $y['outlet_db_id'];
			
			$outlet_old_db[] = $y['outlet_id'];
			
			
		}
		
		
		$item['start'] = str_replace("h",":",$item['start']);
		$item['end'] = str_replace("h",":",$item['end']);
		
		$item['start'] = str_replace("H",":",$item['start']);
		$item['end'] = str_replace("H",":",$item['end']);
		
		$item['start'] = str_replace("::",":",$item['start']);
		$item['end'] = str_replace("::",":",$item['end']);
		
		$ngay = $item['date'];
		
		$tmp = explode("/",$ngay);
		
		//if ($tmp[1] < 10 ) $tmp[1] = "0".$tmp[1];
		//if ($tmp[0] < 10 ) $tmp[0] = "0".$tmp[0];
		$ngay = $tmp[2]."-".$tmp[1]."-".$tmp[0];
		
		/*
		$r = array(
			'ba_id' => $item['ba_id'],
			'start' => $item['start'],
			'end' => $item['end'],
			'date' => "2016-07-13",
			'outlet' => $outlet,
		);
		
		$route_plan[] = $r;
		*/
		
		$outlet_id = json_encode($outlet);
		$outlet_old_db = json_encode($outlet_old_db);
		
		
		echo $ngay."--".$item['ba_phone']. "--".$item['start']."--".$item['end']."--".$outlet_id."<br>";
		
		$session = $ngay."--".$item['ba_phone']. "--".$item['start']."--".$item['end'];
		$c = $mysql->one_row("SELECT * FROM wz_ba_outlet_route WHERE `sesssion`= '".$session."'");
		if (empty($c)){
			$mysql->query("INSERT INTO wz_ba_outlet_route (`ba_id`,`outlet_id`,`sesssion`,`start_time`,`end_time`,`date`,`created`,`changed`) VALUES ('".$item['ba_id']."','".$outlet_id."','".$session."','".$item['start']."','".$item['end']."','".$ngay."',now(),now())");
			
			echo "<font color='blue'>Da them tai ".$session."</font></br>";
		}else{
			echo "<font color='red'>Update ".$session."</font></br>";
			
			$mysql->query("UPDATE wz_ba_outlet_route set `outlet_id` = '".$outlet_id."' WHERE `sesssion`= '".$session."'");
		}
		
		//exit();
	}
	echo "Hoan tât";
	//$mysql->query("TRUNCATE wz_tmp_import");
?>
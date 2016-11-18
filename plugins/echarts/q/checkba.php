<?php
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM `wz_province`");

	echo "<table><tr><td>Tinh</td><td>So BA thuc te</td><td>So BA duoc lap <br>ke hoach ngay 21</td></tr>";
	foreach ($d as $item){
		$thucte = $mysql->one_row("SELECT count(id) as tong FROM wz_ba WHERE province_id=".$item['id']);
		
		$kehoach = "SELECT count(*) as total, ba.province_id, date FROM (`wz_ba_outlet_route` as bw) LEFT JOIN `wz_ba` as ba ON `ba`.`id` = `bw`.`ba_id` WHERE `date` = '2016-07-21' AND `ba`.`province_id` = '".$item['id']."' GROUP BY `date`, `ba`.`id`, `ba`.`province_id`";
	
		$total = $mysql->loadarray($kehoach);
		
		if(!empty($total)){
				$soba =count($total);
			}else{
				$soba =0;
			}
		$tong_thucte += $thucte['tong'];
		$tongkethoach += $soba;
		echo "<tr><td>".$item['name']."</td><td>".$thucte['tong']."</td><td>".$soba."</td></tr>";
	}
	echo "<tr><td>Tong</td><td>".$tong_thucte."</td><td>".$tongkethoach."</td></tr>";
	echo "</table>";
	
	
	
?>
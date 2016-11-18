<?php
phpinfo();
exit();
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_ba_outlet_route");
	
	foreach ($d as $item){
		$q = $mysql->one_row("SELECT * FROM wz_ba WHERE id=".$item['ba_id']);
		echo $item['id']; echo "---";
		echo $q['phone']; echo "---";
		echo $item['start_time']; echo "---";
		echo $item['end_time']; echo "---";
		$o = json_decode($item['outlet_id']);
		foreach ($o as $b){
			$outlet = $mysql->one_row("SELECT * FROM wz_outlet_location WHERE id=".$b);
			echo $outlet['outlet_id']; echo "---";
		}
		
		echo "<br>";
		
	}
	
?>
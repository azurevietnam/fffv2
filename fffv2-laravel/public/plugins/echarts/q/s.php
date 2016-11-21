<?php
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_ba_outlet_route");
	
	foreach ($d as $item){
		$q = $mysql->one_row("SELECT * FROM wz_ba WHERE id=".$item['ba_id']);
		$sup = $q['pid'];
	}
	
?>
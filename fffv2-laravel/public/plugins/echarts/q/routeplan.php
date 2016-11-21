<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	

	$d = $mysql->loadarray("SELECT * FROM wz_province WHERE id in (37,33)");
	echo "<table>";
	echo "<tr><td>STT</td><td>Tỉnh</td><td>Ba Name</td><td>Ba Phone</td><td>Ba Pass</td><td>Ba SUP</td><td>SUP Email</td><td>SUP Password</td></tr>";
	$stt = 1;
	foreach ($d as $item){
		$x = $mysql->loadarray("SELECT wz_ba.* ,wz_ba_sup.ba_name as sup_name,wz_ba_sup.first_password as sup_password,wz_ba_sup.email as sup_email FROM `wz_ba`, `wz_ba_sup` WHERE wz_ba.province_id=".$item['id']." and wz_ba.pid=wz_ba_sup.id ORDER BY pid");
		foreach ($x as $ba){
			echo "<tr><td>".$stt++."</td><td>".$item['name']."</td><td>".$ba['ba_name']."</td><td>'".$ba['phone']."</td><td>'".$ba['first_password']."</td><td>".$ba['sup_name']."</td><td>".$ba['sup_email']."</td><td>'".$ba['sup_password']."</td></tr>";
				
		}
	}
	echo "</table>";
?>
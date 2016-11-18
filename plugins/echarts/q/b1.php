

<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	echo "<h3>Tao & Xac Minh SUP </h3>";
	//xac minh tat ca tk sup
	// Kiem tra va xac minh sup
	$d = $mysql->loadarray("SELECT * FROM `wz_tmp_ba` WHERE `Position` LIKE '%sup%'");
	foreach ($d as $item){
		if (empty($item['Email address'])){
			$e = rand(100000,9999999)."@gmail.com";
			echo "UPDATE `wz_tmp_ba` set `Email address`='".$e."' WHERE id=".$item['id'];
			$mysql->query("UPDATE `wz_tmp_ba` set `Email address`='".$e."' WHERE id=".$item['id']);
		}
	}
	foreach ($d as $item){
	
		$x = $mysql->one_row("SELECT * FROM `wz_ba_sup` WHERE `ba_name` LIKE '%".$item['BA Name']."%'");
		if (!empty($x)){
			echo "<font color='red'>Sup ".$x['ba_name']." đã tồn tại trong hệ thống </font><br>";
			

		}else{
			$fpass = rand(100000,999999);
			echo "<font color='blue'>Them ".$item['BA Name']." ".$item['Email address']."lam SUP </font>";
			$mysql->query("INSERT INTO `wz_ba_sup` (`province_id`,`ba_name`,`password`,`first_password`,`email`,`is_sup`) VALUES('".$item['province_id']."','".$item['BA Name']."','".md5($fpass)."','".$fpass."','".$item['Email address']."','1')");
			echo "<br>";
		}	
			
	}
	
?>
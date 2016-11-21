<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
	include("./require.php");
	
	echo "<h4>Nap BA vao Database </h4>";
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_ba WHERE `Position` NOT LIKE 'sup' ORDER BY `id` ASC");

	foreach ($d as $item){
		$x = $mysql->one_row("SELECT * FROM `wz_ba` WHERE `phone` LIKE '%".$item['BA Phone']."%'");
		
		if (empty($x)){
			$fpass = rand(100000,999999);
			echo "<font color='red'>Da them --". $item['BA Phone']."</font><br>";
			if (!empty($item['BA Phone']))
				$mysql->query("INSERT INTO `wz_ba` (`pid`,`province_id`,`ba_name`,`phone`,`password`,`first_password`,`email`) VALUES('".$item['sup_id']."','".$item['province_id']."','".$item['BA Name']."','".$item['BA Phone']."','".md5($fpass)."','".$fpass."','".$item['Email address']."')");
		}else{
			echo "Da Ton tai --". $item['BA Phone'];
			echo "<br>";
		}
	
	}

?>
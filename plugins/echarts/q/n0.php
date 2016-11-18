<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include("./require.php");
	
	for ($i=1;$i<=31;$i++){ // tao bang dem cac ngay trong thang
		if ($i<10) $date = "2016-10-0".$i; else $date = "2016-10-".$i;
		$d = $mysql->loadarray("SELECT * FROM wz_province");
		
		foreach ($d as $item){
			
			$check = $mysql->one_row("SELECT * FROM wz_online_report WHERE `province_id`='".$item['id']."' AND `date`='".$date."'");
			if (empty($check)){
				
				$mysql->query("INSERT wz_online_report (`date`,`province_id`,`province_name`,`slug`,`lat`,`lng`,`area_id`,`kpi_prelaunch_reach_pst_day`,`kpi_prelaunch_trial_pst_day`,`kpi_launch_reach_pst_day`,`kpi_launch_trial_pst_day`,`kpi_launch_crm_pst_day`,`kpi_other_effective`) VALUES ('".$date."','".$item['id']."','".$item['name']."','".$item['slug']."','".$item['lat']."','".$item['lng']."','".$item['area_id']."','".$item['prelaunch_reach_pst_day']."','".$item['prelaunch_trial_pst_day']."','".$item['launch_reach_pst_day']."','".$item['launch_trial_pst_day']."','".$item['launch_crm_pst_day']."','".$item['other_effective']."')");
			}
		}
	}
	
	echo "Import xong"
	
?>
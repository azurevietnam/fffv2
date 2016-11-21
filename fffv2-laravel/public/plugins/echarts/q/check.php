<?php
	include("./require.php");
error_reporting(E_ALL);
ini_set('display_errors', '0');

/*
	$r = $mysql->loadarray("SELECT * FROM `wz_customer` WHERE `created` >= '$ngay 00:00:00'");
	$not_er = $mysql->loadarray("SELECT * FROM `wz_customer` WHERE product_id in (8,35,36,27) and `created` >= '$ngay 00:00:00'");
	$t = $mysql->loadarray("SELECT * FROM `wz_customer` WHERE leve2 = 1 and `created` >= '$ngay 00:00:00'");
	$not_t = $mysql->loadarray("SELECT * FROM `wz_customer` WHERE product_id in (8,35,36,27)  and leve2 = 1 and `created` >= '$ngay 00:00:00'");
	echo "So reach: ".count($r);
	echo "<br>";
	echo "So effect reach: ".(count($r) - count($not_er));
	
	echo "<br>";
	echo "So trial: ".count($t);
	echo "<br>";
	echo "So effect trial: ".(count($t)- count($not_t));
	echo "<br>";
	
	
	$p = $mysql->loadarray("SELECT * FROM wz_province");
	echo "<h4>Thời gian làm việc kế hoạch</h4>";
	echo "<table width='500px'>";
	echo "<tr><td>Tỉnh thành</td><td>Thơi gian ke hoach</td></tr>";
	foreach ($p as $pp){
		$tg = $mysql->loadarray("SELECT * FROM `wz_ba_outlet_route`, wz_ba WHERE `date` = '$ngay' and wz_ba.id=wz_ba_outlet_route.ba_id and wz_ba.province_id=".$pp['id']);
		$tong = 0;
		foreach ($tg as $item){
			
			$e = explode(":",$item['end_time']);
			$ketthuc = $e[0] + $e[1]/60;
			$s = explode(":",$item['start_time']);
			$batdau = $s[0] + $s[1]/60;
			$tong = $tong + ($ketthuc - $batdau);
		}
		$tongtg = $tong + $tongtg;
		echo "<tr><td>".$pp['name']."</td><td>".round($tong,2)."</td></tr>";
	}
	echo "<tr><td>Tong cong</td><td>".round($tongtg,2)."</td></tr>";
	echo "</table>";
	
	
	
	
	echo "<h4>Thời gian làm việc thuc te</h4>";
	echo "<table width='500px'>";
	echo "<tr><td>Tỉnh thành</td><td>Thời gian làm việc thuc te</td><td>So BA</td></tr>";
	
	$tongtg = 0;
	$p = $mysql->loadarray("SELECT * FROM wz_province");
	foreach ($p as $pp){

		$tgthucte = $mysql->loadarray("SELECT * FROM `wz_ba_work_plan`, wz_ba WHERE `actual_start_time` >= '$ngay 00:00:00' and wz_ba.id=wz_ba_work_plan.ba_id and wz_ba.province_id=".$pp['id']);
		
		
		$sobathucte = $mysql->count_rows("SELECT * FROM `wz_ba_work_plan`, wz_ba WHERE `actual_start_time` >= '$ngay 00:00:00' and wz_ba.id=wz_ba_work_plan.ba_id and wz_ba.province_id=".$pp['id']." GROUP BY wz_ba_work_plan.ba_id");
		$tong_tgthucte = 0;
		foreach ($tgthucte as $item){
			
			$ketthuc = strtotime($item['working_end_time']);
			$batdau = strtotime($item['working_start_time']);
			
			$giay = $ketthuc - $batdau;
			if ($giay <0) $giay = 0;
			$gio = $giay/(60*60);
			$tong_tgthucte = $tong_tgthucte + $gio;
		
		}
		$tongtg = $tongtg + $tong_tgthucte;
		$tongsobathucte = $tongsobathucte + $sobathucte;
		echo "<tr><td>".$pp['name']."</td><td>".round($tong_tgthucte,2)."</td><td>".$sobathucte."</td></tr>";
	}
	echo "<tr><td>Tong cong</td><td>".round($tongtg,2)."</td><td>".$tongsobathucte."</td></tr>";
	echo "</table>";
	
	
	*/	
	
	$ngay = $_GET['ngay'];
	if (empty($ngay)) $ngay = date("Y-m-d");
	echo "<h4>Thong ke theo $ngay</h4>";
	echo "<table width='1200px'>";
	echo "<tr><td>Tỉnh ID</td><td>Tỉnh thành</td><td>Số BA Kế Hoạch</td><td>Số BA di lam</td><td>Số reach <br>Thực tế</td><td>Effective reach<br> ke hoạch (1 người)</td><td>Tổng Effective <br>Reach ke hoạch</td><td>Số effective reach</td><td>Tỉ lệ % ER</td><td>Số trial</td>><td>E <br>trial ke hoạch</td><td>Tong số effective <br>trial ke hoạch</td><td>Số effective trial</td><td>Ti le %</td></tr>";
	$p = $mysql->loadarray("SELECT * FROM wz_province");
	$tongsoreach = 0;
	$tongsotrial = 0;
	
	

	foreach ($p as $pp){
		$sobakehoach = $mysql->count_rows("SELECT * FROM `wz_ba_outlet_route`, wz_ba WHERE `date` = '$ngay' and wz_ba.id=wz_ba_outlet_route.ba_id and wz_ba.province_id=".$pp['id']." GROUP BY wz_ba_outlet_route.ba_id");
		
		$soeffective_reach_kehoach =  $pp['prelaunch_reach_pst_day'] * (100 - $pp['other_effective'])/100;
		$soeffective_trial_kehoach =  $pp['prelaunch_trial_pst_day'] * (100 - $pp['other_effective'])/100;
		$sobadilam = $mysql->count_rows("SELECT * FROM `wz_customer`, wz_ba WHERE wz_customer.created >= '$ngay 00:00:00' and wz_customer.created <= '$ngay 23:59:59'  and wz_ba.id=wz_customer.ba_id and wz_ba.province_id=".$pp['id']." GROUP BY wz_ba.id");
		
		$soreach = $mysql->count_rows("SELECT * FROM `wz_customer`, wz_ba WHERE wz_customer.created >= '$ngay 00:00:00' and wz_customer.created <= '$ngay 23:59:59'  and wz_ba.id=wz_customer.ba_id and wz_ba.province_id=".$pp['id']);
		$khongreach = $mysql->count_rows("SELECT * FROM `wz_customer`, wz_ba WHERE wz_customer.created >= '$ngay 00:00:00' and wz_customer.created <= '$ngay 23:59:59'  and  wz_customer.product_id in (8,35,36,27) and wz_ba.id=wz_customer.ba_id and wz_ba.province_id=".$pp['id']);
		$sotrial = $mysql->count_rows("SELECT * FROM `wz_customer`, wz_ba WHERE wz_customer.leve2=1 and wz_customer.created >= '$ngay 00:00:00' and wz_customer.created <= '$ngay 23:59:59'  and wz_ba.id=wz_customer.ba_id and wz_ba.province_id=".$pp['id']);
		$khongtrial = $mysql->count_rows("SELECT * FROM `wz_customer`, wz_ba WHERE wz_customer.leve2=1 and wz_customer.created >= '$ngay 00:00:00' and wz_customer.created <= '$ngay 23:59:59'  and  wz_customer.product_id in (8,35,36,27) and wz_ba.id=wz_customer.ba_id and wz_ba.province_id=".$pp['id']);
		
		
		$tongbakehoach += $sobakehoach;
		$tongeffective_reach_kehoach += $soeffective_reach_kehoach*$sobadilam;
		$tongeffective_trial_kehoach += $soeffective_trial_kehoach*$sobadilam;
		
		$so_effective_reach_thuc_te = $so_effective_reach_thuc_te + $soreach - $khongreach;
		$so_effective_trial_thuc_te = $so_effective_trial_thuc_te + $sotrial - $khongtrial;
		
		$tongsoreach =$tongsoreach + $soreach;
		$tongsotrial =$tongsotrial + $sotrial;
		$tongsobadilam +=$sobadilam;
		echo "<tr>
		<td>".$pp['id']."</td>
					<td>".$pp['name']."</td>
				<td>".$sobakehoach."</td>
				<td>".$sobadilam."</td>
				<td>".$soreach."</td>
				<td>".$soeffective_reach_kehoach."</td>
				<td>".($soeffective_reach_kehoach*$sobadilam)."</td>
				<td>".round(($soreach-$khongreach),2)."</td>
				<td>".round(($soreach-$khongreach)/($soeffective_reach_kehoach*$sobadilam)*100,2)."%</td>
				<td>".round($sotrial,2)."</td>
				<td>".$soeffective_trial_kehoach."</td>
				<td>".($soeffective_trial_kehoach*$sobadilam)."</td>
				<td>".round(($sotrial-$khongtrial),2)."</td>
				<td>".round(($sotrial-$khongtrial)/($soeffective_trial_kehoach*$sobadilam)*100,2)."%</td>
			</tr>";
	}
	echo "<tr>
		<td style='background:#000;color:#fff'>ID</td>
		<td style='background:#000;color:#fff'>Tong</td>
		<td style='background:#000;color:#fff'>".$tongbakehoach."</td>
		<td style='background:#000;color:#fff'>".$tongsobadilam."</td>
		<td style='background:#000;color:#fff'>".$tongsoreach."</td>
		<td style='background:#000;color:#fff'></td>
		
		 <td style='background:#000;color:#fff'>".$tongeffective_reach_kehoach."</td>
		 <td style='background:#000;color:#fff'>".$so_effective_reach_thuc_te."</td>
		 <td style='background:#000;color:#fff'>".round((100*$so_effective_reach_thuc_te/$tongeffective_reach_kehoach),2)."%</td>
		 <td style='background:#000;color:#fff'>".$tongsotrial."</td>
		 <td style='background:#000;color:#fff'></td>
		
		 <td style='background:#000;color:#fff'>".$tongeffective_trial_kehoach."</td>
		 <td style='background:#000;color:#fff'>".$so_effective_trial_thuc_te."</td>
		 <td style='background:#000;color:#fff'>".round((100*$so_effective_trial_thuc_te/$tongeffective_trial_kehoach),2)."%</td>
		 </tr>";
		 
	
	echo "</table>";
	
	
?>
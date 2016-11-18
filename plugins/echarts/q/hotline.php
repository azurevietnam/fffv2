<?
	$ngay = $_GET['ngay'];
	$sodienthoai = $_GET['sodienthoai'];
	if (empty($ngay)) $ngay = date("Y-m-d");
	if (empty($sodienthoai)) $sodienthoai= '';
?>
<!DOCTYPE html>
<html lang="vi-VN">
<head>
<meta charset="utf-8" />
</head>
<body>
<form method="GET" action="hotline.php">
	<table>
	<tr>
		<td>Phone number: </td><td><input type="text" name="sodienthoai" value="<?=$sodienthoai?>" style="width:200px;padding:5px"> </td><td><td></tr>
	<tr><td> Ngày (yyyy-mm-dd) </td><td><input type="text" name="ngay" value ="<?=$ngay?>" style="width:200px;padding:5px"> </td><td>	<input type="submit" name="task" value="Kiểm Tra" style="padding:5px"></td></tr>
</tr>
</table>
</form>

<?php

	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_ba_outlet_route");
	
	if ($_GET['task']=="Kiểm Tra"){
		
		
		
		$kq = $mysql->loadarray("SELECT * FROM wz_ba_outlet_route WHERE `date`='".$ngay."' AND sesssion LIKE '%".$sodienthoai."%' order by start_time asc");
		
		foreach ($kq as $item){
			$outlet_id = json_decode($item['outlet_id']);
			echo "<h5 style='color:#f00;'>".$item['sesssion']."</h5>";
			foreach($outlet_id as $o){
				$out = $mysql->one_row("SELECT * FROM wz_outlet_location WHERE id=".$o);
				echo $o."-".$out['outlet_id']."-".$out['outlet_name']."-".$out['address_line1']."-".$out['address_line2']."-".$out['address_line3'];
				echo "<br>";
			}
			echo "<hr>";
		}
		
	}
?>
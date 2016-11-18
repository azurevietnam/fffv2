<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


function vn_str_filter ($str){

       $unicode = array(

           'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

           'd'=>'đ',

           'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

           'i'=>'í|ì|ỉ|ĩ|ị',

           'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

           'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

           'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

           'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

           'D'=>'Đ',

           'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

           'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

           'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

           'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

           'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

       );

      foreach($unicode as $nonUnicode=>$uni){

           $str = preg_replace("/($uni)/i", $nonUnicode, $str);

      }

       return $str;

   }
   
   
	include("./require.php");
	$d = $mysql->loadarray("SELECT * FROM wz_tmp_import");
	echo "<h4>Xac dinh tinh thanh</h4>";
	foreach ($d as $item){
		$outlet_id = strtolower(trim($item['outlet_id']));
		
		$outlet_id = str_replace('.0','',$outlet_id);
		$outlet_id = str_replace("'","",$outlet_id);
		$outlet_address = str_replace('.0','',$item['outlet_address']);
		
		
		$slug = str_replace(" ","-",vn_str_filter(trim($item['province'])));
		
		
		$p = $mysql->one_row("SELECT id from wz_province WHERE `slug` LIKE '%".$slug."%'");
		if ($p){
			$mysql->query("UPDATE `wz_tmp_import`  set `province_id`=".$p['id']." WHERE id=".$item['id']);
		}else{
			echo "<font color='red'>Không tồn tại tỉnh ".$item['province']."</font></br>";
		}
		
		
	}
	
?>
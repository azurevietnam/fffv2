<?
header('Access-Control-Allow-Origin: *');
set_time_limit(0);
require_once('./fffcrm/config.php');
require_once('./fffcrm/mysql.php');


$title = $_POST['_title'];
$key = $_POST['_key'];
$description = $_POST['_des'];
$refer = $_SERVER['HTTP_REFERER'];
$agent = $_SERVER['HTTP_USER_AGENT'];

$client_ip = detectClientIP();

$tracking_user_id = base64_encode($client_ip.$agent); //thay cho cookie

$check = $mysql->one_row("SELECT * FROM v2_customer_information WHERE `identify`='".$tracking_user_id."'");
if (empty($check)){
	$iptoinfo = file_get_contents("http://125.212.217.61:8080/json/".$client_ip);
	$iptoinfo = json_decode($iptoinfo);

	$mysql->query("INSERT INTO v2_customer_information (`identify`,`key`,`ip`,`country_code`,`country_name`,`region_code`,`region_name`,`latitude`,`longitude`,`action`,`updated`) VALUES ('".$tracking_user_id."','".$key."','".$client_ip."','".$iptoinfo->country_code."','".$iptoinfo->country_name."','".$iptoinfo->region_code."','".$iptoinfo->region_name."','".$iptoinfo->latitude."','".$iptoinfo->longitude."','".$action."',now())");
}else{
	$mysql->query("UPDATE v2_customer_information set `ip`= '".$client_ip."',`action`='".$action."',`updated` = now() WHERE `identify` = '".$tracking_user_id."'");
}
	
$str_query = 'INSERT INTO v2_log_actions(`identify`,`key`,`ip`,`page_title`,`page_description`,`page_url`,`agent`,`created`) 
	                                VALUES("'.$tracking_user_id.'","'.$key.'","'.$client_ip.'","'.addslashes($title).'","'.addslashes($description).'","'.$refer.'","'.addslashes($agent).'",now())';
//$mysql->query($str_query);
//die();	

?>

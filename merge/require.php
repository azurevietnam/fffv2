<?php
	session_start();
	set_time_limit(0);
	error_reporting(0);
	//require_once('./server.php');
	//require_once('./harddeny.php');
	require_once('./include/config.php');
	require_once('./include/mysql.php');
	require_once('./include/function.php');
	require_once('./include/Mobile_Detect.php');
	require_once('./include/protected.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
	$detect = new Mobile_Detect;
	
	if( $detect->isMobile() && !$detect->isTablet() ){
		$ismobile = 1;
	}else $ismobile = 0;
?>
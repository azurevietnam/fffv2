<?php
	function getClientIP() {
			if (isset($_SERVER)) {
				if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
					$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
				if (isset($_SERVER["HTTP_CLIENT_IP"]))
					$ip = $_SERVER["HTTP_CLIENT_IP"];
				$ip = $_SERVER["REMOTE_ADDR"];
			}
			if (getenv('HTTP_X_FORWARDED_FOR'))
				$ip = getenv('HTTP_X_FORWARDED_FOR');
			if (getenv('HTTP_CLIENT_IP'))
				$ip = getenv('HTTP_CLIENT_IP');
			$ip = getenv('REMOTE_ADDR');
		$i = explode(",",$ip);
		
		if (count($i)>1) return trim($i[1]);
		else return trim($ip);
	}
echo getClientIP();
?>
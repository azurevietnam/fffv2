<?php
	function get_thu_from_date($date){
		$k = date("D", strtotime($date));
		$k = strtolower($k);
		switch ($k){
			case "sun": $kq = "CN"; break;
			case "mon": $kq = "Hai"; break;
			case "tue": $kq = "Ba"; break;
			case "wed": $kq = "Tư"; break;
			case "thu": $kq = "Năm"; break;
			case "fri": $kq = "Sáu"; break;
			case "sat": $kq = "Bảy"; break;
			
		}
		return $kq;
		
	}
	 function CutText($text, $max) {
        if (strlen($text)<=$max)
            return $text;
        return substr($text, 0, $max-3).'...';
    }
	function getClientIP() {

			if (isset($_SERVER)) {

				if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
					return $_SERVER["HTTP_X_FORWARDED_FOR"];

				if (isset($_SERVER["HTTP_CLIENT_IP"]))
					return $_SERVER["HTTP_CLIENT_IP"];

				return $_SERVER["REMOTE_ADDR"];
			}

			if (getenv('HTTP_X_FORWARDED_FOR'))
				return getenv('HTTP_X_FORWARDED_FOR');

			if (getenv('HTTP_CLIENT_IP'))
				return getenv('HTTP_CLIENT_IP');

			return getenv('REMOTE_ADDR');
	}

	function getTimeDifference( $start, $end )
	{	
		$start = trim($start);
		$end = trim($end);
		$st = explode(":",$start);
		$en = explode(":",$end);
		if ($en[1] > $st[1]) {$m = $en[1] - $st[1]; $hx = 0;} else { $m = 60 + $en[1] - $st[1]; $hx = -1;}
		if ($en[0] > $st[0]) $h = $en[0] - $st[0] + $hx; else { $h = 24 + $en[0] - $st[0] + $hx;}
		$kq['h'] = $h;
		$kq['m'] = $m;
		return $kq;
	}
	function sanbaytrongnuoc($ma){
		$ma = machuyenbay($ma);
		$sanbay = array(
			"BMV",
			"CAH",
			"VCA",
			"VCL",
			"VCS",
			"DLI",
			"DAD",
			"DIN",
			"VDH",
			"HAN",
			"HPH",
			"SGN",
			"HUI",
			"CXR",
			"PQC",
			"PXU",
			"UIH",
			"VKG",
			"THD",
			"TBB",
			"VII",
		);
		if (in_array($ma,$sanbay)) return true; else return false;
		
	}
	function machuyenbay($ma){
		$p0 = strpos ($ma,"(");
		$p1 = strpos ($ma,")");
		$kq = substr($ma,$p0+1,$p1-$p0-1);
		return $kq;
	}
	function getDuration($gioden, $giodi) {
		$tden = strtotime($gioden);
		$tdi =  strtotime($giodi);
		
		$khoangtg = $tden - $tdi;
		return gmdate("H\h \+ i\p",$khoangtg);
		
	}
?>


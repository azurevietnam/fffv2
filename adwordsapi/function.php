<?
function time_elapsed_string($ptime)
{
	$ptime = strtotime($ptime);
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'năm',
                       'month'  => 'tháng',
                       'day'    => 'ngày',
                       'hour'   => 'giờ',
                       'minute' => 'phút',
                       'second' => 'giây'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . '';
        }
    }
}
function phone_format($phone){
	if (substr($phone,0,2) == "84") $phone = "0".substr($phone,2,strlen($phone)-2);
	if (strlen($phone) == 9) $fphone = "".substr($phone, 0, 3)." ".substr($phone, 3, 3)." ".substr($phone,6,3);
	else if (strlen($phone) == 10) $fphone = "".substr($phone, 0, 4)." ".substr($phone, 4, 3)." ".substr($phone,7,3);
	else if (strlen($phone) == 11) $fphone = "".substr($phone, 0, 4)." ".substr($phone, 4, 3)." ".substr($phone,7,4);
	return $fphone;

}


function url_to_domain($url)
{
    $host = @parse_url($url, PHP_URL_HOST);
    // If the URL can't be parsed, use the original URL
    // Change to "return false" if you don't want that
    if (!$host)
        $host = $url;
    // The "www." prefix isn't really needed if you're just using
    // this to display the domain to the user
    if (substr($host, 0, 4) == "www.")
        $host = substr($host, 4);
    // You might also want to limit the length if screen space is limited
    if (strlen($host) > 50)
        $host = substr($host, 0, 47) . '...';
    return $host;
}

	function detectClientIP() {
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
?>
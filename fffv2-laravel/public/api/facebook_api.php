<?
	function get_facebook_cover($fid){
		
		$json = file_get_contents("https://graph.facebook.com/".$fid."?fields=cover&access_token=505615252968129|gcRic9ilMeHH20KwXBv1yWQ1h5A");
		$obj = json_decode($json);
		return $obj->cover ->source;
	}
?>
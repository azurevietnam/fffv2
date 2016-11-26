<?
// Include the initialization file
header('Access-Control-Allow-Origin: *');  

$adword_account =$_GET['adword'];

require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $filePath the path of the file to download the report to
 */

function KeywordsListKeywords(AdWordsUser $user) {
	// Load the service, so that the required classes are available.
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV';
	$filePath = null;
	$dateRange = sprintf('%d,%d',date('Ymd', strtotime('-1 day')), date('Ymd', strtotime('0 day')));
	
	

	  
	$reportQuery = 'SELECT Criteria, Device,Impressions, Clicks, Cost , AverageCpc, QualityScore, Ctr,  SearchRankLostImpressionShare,Status, Id, AdGroupId, AdGroupName'
	  . ' FROM KEYWORDS_PERFORMANCE_REPORT'
	  . ' WHERE Clicks > 0 DURING YESTERDAY'
	  . ' ';
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$args = explode("\n", $stringOfResult);
	for ($i=2;$i<count($args)-2;$i++){
		$arg = $args[$i];
		
		$tt = explode(",",$arg);
		$tt[2] = number_format($tt[2]);
		$tt[3] = number_format($tt[3]);
		$tt[4] = number_format(round($tt[4]/1000000,2));
		$tt[5] = number_format(round($tt[5]/1000000,2));
		
		$ctr = $tt[7];
		$ctr = str_replace("%","",$ctr);
		
		if ($ctr > 50 ){
			$tt[7] = "<span class='label label-info'>".$tt[7]."</span>";
		}
		if ($tt[9] == "paused"){
			$tt[9] = "<button class='btn btn-info btn-sm adwords-btn-fixwidth'>Chạy Từ Khóa</button>";
		}else{
			$tt[9] = "<button class='btn btn-danger btn-sm adwords-btn-fixwidth '>Ngưng Từ Khóa</button>";
		}
		$ketqua['data'][] = $tt;
		
	}
	unset($tt[10]);
	unset($tt[11]);
	unset($tt[12]);
	/*
	for ($i=2;$i<count($args)-1;$i++){
		$arg = $args[$i];
		$tt = explode(",",$arg);
		$tmp[$tt[1]]['device'][] = $tt[2];
		$tmp[$tt[1]]['click'][] = $tt[0];
		$tmp[$tt[1]]['cost'][] = $tt[3];
	}

	var_dump($tmp);
	exit();
	*/
	return $ketqua;
}




  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
 
  $user = new AdWordsUser();
  $user->SetClientCustomerId($adword_account);
  // Log every SOAP XML request and response.
  $user->LogAll();

  // Download the report to a file in the same directory as the example.
  $filePath = dirname(__FILE__) . '/report.csv';

  // Run the example.
  $kq = KeywordsListKeywords($user);
  echo json_encode($kq);

?>
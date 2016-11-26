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

function KeywordListSearchTerms(AdWordsUser $user) {
	// Load the service, so that the required classes are available.
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV';
	$filePath = null;
	$dateRange = sprintf('%d,%d',date('Ymd', strtotime('-1 day')), date('Ymd', strtotime('0 day')));
	
	

	  
	$reportQuery = 'SELECT Query,KeywordTextMatchingQuery, Device,Impressions, Clicks, Cost , AverageCpc, AveragePosition, Ctr, AdGroupName, CampaignName'
	  . ' FROM SEARCH_QUERY_PERFORMANCE_REPORT'
	  . ' WHERE Clicks > 0 DURING YESTERDAY'
	  . ' ';
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$args = explode("\n", $stringOfResult);

	for ($i=2;$i<count($args)-2;$i++){
		$arg = $args[$i];
		
		$tt = explode(",",$arg);
		$tt[3] = number_format($tt[3]);
		$tt[4] = number_format($tt[4]);
		$tt[5] = number_format(round($tt[5]/1000000,2));
		$tt[6] = number_format(round($tt[6]/1000000,2));
		
		$ctr = $tt[8];
		$ctr = str_replace("%","",$ctr);
		
		if ($ctr > 50 ){
			$tt[8] = "<span class='label label-info'>".$tt[8]."</span>";
		}
	
		$ketqua['data'][] = $tt;
		
	}
	
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
  $kq = KeywordListSearchTerms($user);
  echo json_encode($kq);

?>
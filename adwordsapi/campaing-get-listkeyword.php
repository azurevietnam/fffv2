<?
// Include the initialization file
$adword_account = $_GET['adword'];

require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $filePath the path of the file to download the report to
 */
function _group_by($array, $key) {
    $return = array();
    foreach($array as $val) {
        $return[$val[$key]][] = $val;
    }
    return $return;
}
function ListAllKeyWordsInCampaign(AdWordsUser $user) {
	// Load the service, so that the required classes are available.
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV';
	$filePath = null;
	$dateRange = sprintf('%d,%d',date('Ymd', strtotime('-1 day')), date('Ymd', strtotime('0 day')));
	
	
	$reportQuery = 'SELECT Clicks, Criteria, Device, Cost '
	  . ' FROM KEYWORDS_PERFORMANCE_REPORT'
	  . ' DURING ' . $dateRange. ' ORDER BY Cost DESC '
	  . ' ';	
	  
	  echo $reportQuery = 'SELECT Clicks, Criteria, Device, Cost '
	  . ' FROM KEYWORDS_PERFORMANCE_REPORT'
	  . ' DURING TODAY'
	  . ' ';
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$args = explode("\n", $stringOfResult);
	for ($i=2;$i<count($args)-1;$i++){
		$arg = $args[$i];
		$tt = explode(",",$arg);
		$tmp[$tt[1]]['device'][] = $tt[2];
		$tmp[$tt[1]]['click'][] = $tt[0];
		$tmp[$tt[1]]['cost'][] = $tt[3];
	}

	var_dump($tmp);
	exit();

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
  $kq = ListAllKeyWordsInCampaign($user);
  echo json_encode($kq);

?>
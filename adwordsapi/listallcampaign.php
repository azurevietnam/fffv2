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
function ListAllAdwordsCampaign(AdWordsUser $user) {
	// Load the service, so that the required classes are available.
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV';
	$filePath = null;
	$dateRange = sprintf('%d,%d',date('Ymd', strtotime('0 day')), date('Ymd', strtotime('0 day')));
	
	
	$reportQuery = 'SELECT  AdNetworkType1, CampaignId,CampaignName, AverageCost, AverageCpc, '
	  . 'Clicks, InvalidClicks, InvalidClickRate, SearchImpressionShare, Conversions,Device, Cost FROM CAMPAIGN_PERFORMANCE_REPORT '
	  . 'WHERE Cost >0  DURING ' . $dateRange;
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$arr = explode("\n", $stringOfResult);
	for ($i=1;$i<count($arr)-2;$i++){
		$item = $arr[$i];
		  if (strpos($item,"Total") === false){
				$cc = explode(",",$item);
				$campaign[]= $cc;
		  }
	}
	// dong tiep theo la tong ket
	$item = $arr[$i];
	$dulieu = explode(",",$item);
	$data['click'] = $dulieu[5];
	$data['cpc'] = round($dulieu[4]/1000000,2);
	
	$ketqua['campaign'] = $campaign;
	$ketqua['average'] = $data;
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
  $kq = ListAllAdwordsCampaign($user);
  echo json_encode($kq);

?>
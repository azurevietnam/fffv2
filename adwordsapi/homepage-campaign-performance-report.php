<?
// Include the initialization file
header('Access-Control-Allow-Origin: *');  
$adword_account = $_GET['adword'];

require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

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
	$dateRange = "LAST_30_DAYS";//bao cao 30 ngay
	
	
	$reportQuery = 'SELECT  AdNetworkType1, CampaignId,CampaignName, AverageCpc,AveragePosition, Clicks, InvalidClicks, InvalidClickRate, SearchImpressionShare, Conversions,Device, SearchBudgetLostImpressionShare, SearchRankLostImpressionShare, Conversions,  CostPerConversion, CrossDeviceConversions, ConversionRate, Cost '
	  . ' FROM CAMPAIGN_PERFORMANCE_REPORT '
	  . ' WHERE AdNetworkType1 = \'SEARCH\' DURING '. $dateRange;
	  
	  
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	
	
	$arr = explode("\n", $stringOfResult);
	
	
	
	for ($i=1;$i<count($arr)-1;$i++){
		$item = $arr[$i];
		$cc = str_getcsv ($item);
		$data['data'][] = $cc;
	}

	$baocao = end($data['data']);
	$ketqua['data']['cpc'] = number_format(round($baocao[3]/1000000,2));
	$ketqua['data']['budget_lost'] = number_format(round($baocao[11]*$baocao[16]/1000000));
	$ketqua['data']['avg_position'] = $baocao[4];
	
	$ketqua['data']['click'] = number_format($baocao[5]);
	$ketqua['data']['invaid_click'] = $baocao[6];
	$ketqua['data']['invaid_click_rate'] = $baocao[7];
	
	
	$ketqua['data']['convertion_cost'] = number_format(round($baocao[13]/1000000,2));
	$ketqua['data']['convertion_device_rate'] = $baocao[14];
	$ketqua['data']['convertion_rate'] = $baocao[15];
	
	$ketqua['data']['lost_is_rank'] = $baocao[12];	
		
	$reportQuery = 'SELECT AdNetworkType1, QualityScore'
	  . ' FROM KEYWORDS_PERFORMANCE_REPORT'
	  . ' WHERE AdNetworkType1 = \'SEARCH\' DURING '. $dateRange;
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$args = explode("\n", $stringOfResult);
	$diemchatluong = 0;
	$solandem = 0;
	for ($i=1;$i<count($args)-1;$i++){
		$item = $args[$i];
		$cc = str_getcsv ($item);
		
		if ($cc[1] > 0) {
			$diemchatluong = $diemchatluong + $cc[1];
			$solandem +=1;
		}
	}
	
	$diemchatluongtrungbinh = round($diemchatluong/$solandem,1);
	$ketqua['data']['QualityScore'] = $diemchatluongtrungbinh;
	
	
	return $ketqua;
}



  $user = new AdWordsUser();
  $user->SetClientCustomerId($adword_account);
  // Log every SOAP XML request and response.
  $user->LogAll();


  // Run the example.
  $kq = ListAllAdwordsCampaign($user);
  echo json_encode($kq);

?>
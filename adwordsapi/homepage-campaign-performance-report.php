<?
// Include the initialization file
header('Access-Control-Allow-Origin: *');  
$adword_account = $_GET['adword'];

require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';



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
		if ($cc[1] != "--") $camp[] = $cc[1];
	}

	$socampaign = count(array_unique ($camp));
		
	$baocao = end($data['data']);
	$ketqua['data']['cpc'] = number_format(round($baocao[3]/1000000,2));
	$ketqua['data']['budget_lost'] = number_format(round($baocao[11]*$baocao[16]/1000000));
	$ketqua['data']['budget_lost_rate'] = $baocao[11];
	$ketqua['data']['avg_position'] = $baocao[4];
	
	$ketqua['data']['click'] = number_format($baocao[5]);
	$ketqua['data']['invaid_click'] = $baocao[6];
	$ketqua['data']['invaid_click_rate'] = $baocao[7];
	$ketqua['data']['search_impr_share'] = $baocao[8];
	
	
	$ketqua['data']['convertion_cost'] = number_format(round($baocao[13]/1000000,2));
	$ketqua['data']['convertion_device_rate'] = $baocao[14];
	$ketqua['data']['convertion_rate'] = $baocao[15];
	
	$ketqua['data']['lost_is_rank'] = $baocao[12];	
	$ketqua['data']['active_campaign'] = $socampaign;	
	$ketqua['data']['cost'] = number_format(round($baocao[16]/1000000),0);	
		
	
	
	return $ketqua;
}

function GetQualityScore(AdWordsUser $user) {
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV';
	$filePath = null;
	$dateRange = "LAST_30_DAYS";//bao cao 30 ngay
	
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
	
	$diemchatluongtrungbinh = round($diemchatluong/$solandem,2);
	$ketqua['data']['QualityScore'] = $diemchatluongtrungbinh;
	return $ketqua;
}


function CampaignExtensionPercent(AdWordsUser $user) {
		$feedService = $user->GetService('FeedService', ADWORDS_VERSION);
		$data = $feedService->query("SELECT Id, Name, Attributes where FeedStatus='ENABLED'");
		$soluong_extension = count($data->entries);
		$phantram = round(100*($soluong_extension/8),2);
		return $phantram;
}	


function SoCampaignNegativeKeywordsPerformance (AdWordsUser $user) {
	$user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
	$options = array('version' => ADWORDS_VERSION);
	$reportUtils = new ReportUtils();
	$reportFormat = 'CSV'; 
	$filePath = null;
	
	$reportQuery = 'SELECT  CampaignId, Criteria, IsNegative'
	  . ' FROM CAMPAIGN_NEGATIVE_KEYWORDS_PERFORMANCE_REPORT '
	  . ' ';
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);

	$args = explode("\n", $stringOfResult);
	for ($i=1;$i<count($args)-1;$i++){
		$item = $args[$i];
		$cc = str_getcsv ($item);
		$camp[] = $cc[0];
	}
	$socampaign_have_negative = count(array_unique ($camp));
	return $socampaign_have_negative;
	  
}

function ExpandedTextAdsvsTextAds(AdWordsUser $user) {
  
	$adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

	$data = $adGroupAdService->query("SELECT Id, Status, AdType WHERE Status = 'ENABLED' and AdType ='EXPANDED_TEXT_AD'");
	$soluong_expaned_text_ads = count($data->entries);
	$data = $adGroupAdService->query("SELECT Id, Status, AdType WHERE Status = 'ENABLED' and AdType ='TEXT_AD'");

	$soluong_text_ads = count($data->entries);
	$kq['soluong_expaned_text_ads'] = $soluong_expaned_text_ads;
	$kq['soluong_text_ads'] = $soluong_text_ads;
	$tile = round(100*($soluong_expaned_text_ads/($soluong_expaned_text_ads + $soluong_text_ads)),2);
	return $tile;
}


  $user = new AdWordsUser();
  $user->SetClientCustomerId($adword_account);
  // Log every SOAP XML request and response.
  $user->LogAll();


  // Run the example.
  $kq1 = ListAllAdwordsCampaign($user);
  
  $kq2 = GetQualityScore($user);
  
  $kq['data'] = array_merge($kq1['data'],$kq2['data']);
  $tile_extension = CampaignExtensionPercent($user);
  $tile_expaned_ads = ExpandedTextAdsvsTextAds($user);
  
  $socampaign_have_negative = SoCampaignNegativeKeywordsPerformance($user);
  $tile_negative = round(100*($socampaign_have_negative/($socampaign_have_negative + $kq['data']['active_campaign'] )),2);
  $tile_diemchatluong = $kq['data']['QualityScore']*10;
  
  $tile_ngansach =  100 - $kq['data']['budget_lost_rate'];
  
  $diemso = round (($tile_extension + $tile_expaned_ads + $tile_negative + $tile_diemchatluong + $tile_ngansach)/5,0);
  $kq['data']['adword_score'] = $diemso;
  
  echo json_encode($kq);

?>
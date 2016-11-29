<?
require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

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
		$camp = $cc[0];
	}
	$socampaign = count(array_unique ($camp));
	  
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

$adword_account = "881-804-9978";
	
		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);
		$tile_extension = CampaignExtensionPercent($user);
		//CampaignNegativeKeywordsPerformance($user);
		$tile_expaned_ads = ExpandedTextAdsvsTextAds($user);
		
		echo $tile_extension;
		echo "<br>";
		echo $tile_expaned_ads;
?>
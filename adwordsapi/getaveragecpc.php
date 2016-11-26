<?
$adword_account = $_GET['adword'];
require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $filePath the path of the file to download the report to
 */
function GetAverageCPC(AdWordsUser $user, $filePath) {
  // Load the service, so that the required classes are available.
  $user->LoadService('ReportDefinitionService', ADWORDS_VERSION);
  // Optional: Set clientCustomerId to get reports of your child accounts
  // $user->SetClientCustomerId('INSERT_CLIENT_CUSTOMER_ID_HERE');

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('CampaignId','CampaignName', 'Impressions', 'Clicks','AverageCpc','Conversions','Ctr','Device','QualityScore', 'Cost');

  // Optional: use predicate to filter out paused criteria.
  $selector->predicates[] = new Predicate('Status', 'NOT_IN', array('PAUSED'));

  // Create report definition.
  $reportDefinition = new ReportDefinition();
  $reportDefinition->selector = $selector;
  $reportDefinition->reportName = 'Criteria performance report #' . uniqid();
  $reportDefinition->dateRangeType = 'YESTERDAY'; //[TODAY, YESTERDAY, LAST_7_DAYS, LAST_WEEK, LAST_BUSINESS_WEEK, THIS_MONTH, LAST_MONTH, ALL_TIME, CUSTOM_DATE, LAST_14_DAYS, LAST_30_DAYS, THIS_WEEK_SUN_TODAY, THIS_WEEK_MON_TODAY, LAST_WEEK_SUN_SAT]
  $reportDefinition->reportType = 'CRITERIA_PERFORMANCE_REPORT';
  $reportDefinition->downloadFormat = 'CSV';
  // Set additional options.
  $options = array('version' => ADWORDS_VERSION);

  // Optional: Set skipReportHeader, skipColumnHeader, skipReportSummary to
  //     suppress headers or summary rows.
  // $options['skipReportHeader'] = true;
  // $options['skipColumnHeader'] = true;
  // $options['skipReportSummary'] = true;
  //
  // Optional: Set useRawEnumValues to return enum values instead of enum
  //     display values.
  // $options['useRawEnumValues'] = true;
  //
  // Optional: Set includeZeroImpressions to include zero impression rows in
  //     the report output.
  // $options['includeZeroImpressions'] = true;

  // Download report.
  $reportUtils = new ReportUtils();
  $filePath = null;
  
  $stringOfResult = $reportUtils->DownloadReport($reportDefinition, $filePath, $user, $options);
  $arr = explode("\n", $stringOfResult);
  
  foreach ($arr as $item){
	  
	  if (strpos($item,"Total") === false){
		  
	  }else{
		 $dulieu = explode(",",$item);
		 $data['click'] = $dulieu[3];
		 $data['cpc'] = round($dulieu[4]/1000000,2);
	  }
  }
	
}




  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  
  $user = new AdWordsUser();
  $user->SetClientCustomerId($adword_account);
  // Log every SOAP XML request and response.
  $user->LogAll();

  // Download the report to a file in the same directory as the example.

  // Run the example.
  GetAverageCPC($user, $filePath);

?>
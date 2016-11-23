<?
require_once dirname(__FILE__) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';

function DownloadCriteriaReportWithAwqlExample(AdWordsUser $user, $filePath, $reportFormat) {
  // Optional: Set clientCustomerId to get reports of your child accounts
  // $user->SetClientCustomerId('INSERT_CLIENT_CUSTOMER_ID_HERE');

  // Prepare a date range for the last week. Instead you can use 'LAST_7_DAYS'.
  $dateRange = sprintf('%d,%d',
      date('Ymd', strtotime('-7 day')), date('Ymd', strtotime('-1 day')));

  // Create report query.
  $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
      . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT '
      . 'WHERE Status IN [ENABLED, PAUSED] DURING ' . $dateRange;

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
  // $options['useRawEnumValues'] = false;
  //
  // Optional: Set includeZeroImpressions to include zero impression rows in
  //     the report output.
  // $options['includeZeroImpressions'] = true;

  // Download report.
  $reportUtils = new ReportUtils();
  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user,
      $reportFormat, $options);

  printf("Report was downloaded to '%s'.\n", $filePath);
}


try {

	$user = new AdWordsUser();
	$user->LogAll();
	$data['adword_account'] = "683-135-9948";
	$user->SetClientCustomerId($data['adword_account']);
	
	$filePath = dirname(__FILE__) . '/report.csv';
  $reportFormat = 'CSV';

  // Run the example.
  DownloadCriteriaReportWithAwqlExample($user, $filePath, $reportFormat);

} catch (OAuth2Exception $e) {
	var_dump($data);
}
?>
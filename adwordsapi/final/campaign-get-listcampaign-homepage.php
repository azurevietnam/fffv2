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
	$dateRange = sprintf('%d,%d',date('Ymd', strtotime('0 day')), date('Ymd', strtotime('0 day')));
	
	
	$reportQuery = 'SELECT  CampaignName ,Device, Impressions, Clicks, AverageCpc, Ctr, InvalidClicks, InvalidClickRate, Cost, CampaignId,CampaignStatus, CampaignDesktopBidModifier, CampaignMobileBidModifier, CampaignTabletBidModifier'
	  . ' FROM CAMPAIGN_PERFORMANCE_REPORT '
	  . 'WHERE Cost >0  DURING ' . $dateRange;
	$stringOfResult =  $reportUtils->DownloadReportWithAwql($reportQuery, $filePath, $user, $reportFormat, $options);
	$args = explode("\n", $stringOfResult);

	for ($i=2;$i<count($args)-2;$i++){
		$arg = $args[$i];
		$tt = explode(",",$arg);
		
		$device = $tt[1];
		$CampaignStatus = $tt[10];
		if ($device == "Computers"){
			if ($tt[11] != '"-100%"'){
				$tt[9] = "<button class='btn btn-danger btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='aaaaa' data-original-title='Ngừng chạy chiến dịch trên PC'>Ngừng Trên PC</button>";
			}else{
				$tt[9] = "<button class='btn btn-info btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='' data-original-title='Chạy chiến dịch trên PC'>Chạy Trên PC</button>";
			}
		}else if ($device == "Mobile devices with full browsers"){
			if ($tt[13] != '"-100%"'){
				$tt[9] = "<button class='btn  btn-danger btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='' data-original-title='Ngừng chạy chiến dịch trên Mobile'>Ngừng Trên Mobile</button>";
			}else{
				$tt[9] = "<button class='btn btn-info btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='' data-original-title='Chạy chiến dịch trên Mobile'>Chạy Trên Mobile</button>";
			}
		}else if ($device == "Tablets with full browsers"){
			if ($tt[12] != '"-100%"'){
				$tt[9] = "<button class='btn btn-danger btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='' data-original-title='Ngừng chạy chiến dịch trên Tablet'>Ngừng Trên Tablet</button>";
				
               
			}else{
				$tt[9] = "<button class='btn btn-info btn-sm adwords-btn-fixwidth' data-toggle='tooltip' data-placement='top' title='' data-original-title='Chạy chiến dịch trên Tablet'>Chạy Trên Tablet</button>";
			}
		}
		
		$InvalidClickRate = $tt[7];
		$InvalidClickRate = str_replace("%","",$InvalidClickRate);
		if ($InvalidClickRate > 30 ){
			$tt[7] = "<span class='label label-info'>".$tt[7]."</span>";
		}
		
		$tt[3] = number_format($tt[3]);
		$tt[2] = number_format($tt[2]);
		$tt[4] = number_format(round($tt[4]/1000000,2));
		$tt[8] = number_format(round($tt[8]/1000000,2));
		
		unset($tt[10]);
		unset($tt[11]);
		unset($tt[12]);
		unset($tt[13]);
		$ketqua['data'][] = $tt;
	}
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
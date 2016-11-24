<?
require_once dirname(__FILE__) . '/init.php';

$adword_account = "248-667-0218";
$campaign_id = "662199972";
$device = "PC";
$bidModifier = 0;
if (!empty($adword_account) && !empty($campaign_id)){	
		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);
		$campaignCriterionService = $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

	  $mobile = new Platform();
	  switch ($device){
		  case 'PC':   $mobile->id = 30000; break; 
		  case 'MOBILE':   $mobile->id = 30001; break; 
		  case 'TABLET':   $mobile->id = 30002; break; 
	  }
	
	  // Create criterion with modified bid.
	  $criterion = new CampaignCriterion();
	  $criterion->campaignId = $campaign_id;
	  $criterion->criterion = $mobile;
	  $criterion->bidModifier = $bidModifier;

	  // Create SET operation.
	  $operation = new CampaignCriterionOperation();
	  $operation->operator = 'SET';
	  $operation->operand = $criterion;

	  // Update campaign criteria.
	  $results = $campaignCriterionService->mutate(array($operation));

	$cam[] = array("result" => "CHANGED");  
	echo json_encode($cam);
}
?>
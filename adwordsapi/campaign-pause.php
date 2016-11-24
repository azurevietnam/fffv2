<?
require_once dirname(__FILE__) . '/init.php';

$adword_account = "248-667-0218";
$campaign_id = "662199972";

if (!empty($adword_account) && !empty($campaign_id)){	
		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);

		// Get the CampaignService, which loads the required classes.
		$campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);
		
		$mobile = new Platform();
		
		$campaign = new Campaign();
		$campaign->id = $campaign_id;
		$campaign->status = 'PAUSED';
		
		$operations = array();
		$operation = new CampaignOperation();
		$operation->operand = $campaign;
		$operation->operator = 'SET';
		$operations[] = $operation;
		$result = $campaignService->mutate($operations);
		
		$cam[] = array("result" => "PAUSED");
	echo json_encode($cam);
}
?>
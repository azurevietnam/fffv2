<?
require_once dirname(__FILE__) . '/init.php';
$adword_account = $_GET['adword'];
$block_ip = $_GET['blockip'];
if (!empty($adword_account) && !empty($block_ip)){	
		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);
		$campaignCriterionService = $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

		
		$query = "SELECT  Id, CriteriaType,KeywordText WHERE CriteriaType ='IP_BLOCK' and KeywordText='$block_ip/32'";
		$listIP = $campaignCriterionService->query($query);
		if (!empty($listIP->entries)){
			foreach ($listIP->entries as $item){

				$ipblock = new IpBlock($block_ip);
				$ipblock->id = $item->criterion->id;
				$criterion = new NegativeCampaignCriterion();
				$criterion->campaignId = $item->campaignId;
				$criterion->criterion = $ipblock;
				
				
				$operation = new CampaignCriterionOperation();
				$operation->operator = 'REMOVE';
				$operation->operand = $criterion;
				$op[] = $operation;
				$results = $campaignCriterionService->mutate($op);
				$cam[] = $item->campaignId;
			}
		}
	if (empty($cam)) $cam = array();
	echo json_encode($cam);
}
?>
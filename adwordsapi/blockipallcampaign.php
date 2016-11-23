<?
require_once dirname(__FILE__) . '/init.php';
$adword_account = $_GET['adword'];
$block_ip = $_GET['blockip'];
if (!empty($adword_account) && !empty($block_ip)){	
		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);
		$campaignCriterionService = $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

		
		$campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);
		$query = 'SELECT Id, Name, Status ORDER BY Name';
		$offset = 0;

		do {
		$pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
		$page = $campaignService->query($pageQuery);

		// All campaign.
		if (isset($page->entries)) {
		  foreach ($page->entries as $campaign) {
			$ipblock = new IpBlock(trim($block_ip));
			$criterion = new NegativeCampaignCriterion();
			$criterion->campaignId = $campaign->id;
			$cam[] = array($campaign->id,$campaign->name);
			$criterion->criterion = $ipblock;
			$operation = new CampaignCriterionOperation();
			$operation->operator = 'ADD';
			$operation->operand = $criterion;
			$op[] = $operation;
			$results = $campaignCriterionService->mutate($op);
		  }
		} 
		$offset += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
	  } while ($page->totalNumEntries > $offset);
	  
	echo json_encode($cam);
}
?>
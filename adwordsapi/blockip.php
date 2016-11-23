<?
require_once dirname(__FILE__) . '/init.php';

	$user = new AdWordsUser();
	$user->LogAll();
	$data['adword_account'] = "683-135-9948";
	$campaignId = "687268072";
	
	$user->SetClientCustomerId($data['adword_account']);
	$campaignCriterionService = $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

	
	$ipblock = new IpBlock("192.168.1.1");
	$criterion = new NegativeCampaignCriterion();
	$criterion->campaignId = $campaignId;
	$criterion->criterion = $ipblock;
	$operation = new CampaignCriterionOperation();
	$operation->operator = 'ADD';
	$operation->operand = $criterion;
	$op[] = $operation;
	var_dump($op)	;
	$results = $campaignCriterionService->mutate($op);
	var_dump($results);
	
?>
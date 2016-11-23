<?
function getCampaignId($user){
  $campaignCriterionService = $user->GetService('CampaignCriterionService', ADWORDS_VERSION);
  $selector = new Selector();
  $selector->fields = array('Id', 'CriteriaType', 'KeywordText');
  $CriterionService = $campaignCriterionService->get($selector);
  var_dump($CriterionService);
}
?>
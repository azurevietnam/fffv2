<?
require_once dirname(__FILE__) . '/init.php';

$adword_account = "617-755-5961";
$keyword_id = "2839099311";
$adgroup_id = "35471868673";
$status = "PAUSED";

function UpdateKeyword($user, $adGroupId, $criterionId, $status){

 // Get the service, which loads the required classes.
  $adGroupCriterionService =
      $user->GetService('AdGroupCriterionService', ADWORDS_VERSION); 
 
   // Create criterion using an existing ID. Use the base class Criterion
  // instead of Keyword to avoid having to set keyword-specific fields.
  $criterion = new Criterion();
  $criterion->id = $criterionId;

  // Create ad group criterion.
  $adGroupCriterion = new BiddableAdGroupCriterion();
  $adGroupCriterion->adGroupId = $adGroupId;
  $adGroupCriterion->criterion = new Criterion($criterionId);
  
  $adGroupCriterion->userStatus = $status;  
 
   // Create operation.
  $operation = new AdGroupCriterionOperation();
  $operation->operand = $adGroupCriterion;
  $operation->operator = 'SET';

  $operations = array($operation);

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($operations);

  // Display result.
  $adGroupCriterion = $result->value[0];
  
  var_dump($adGroupCriterion);
  return $adGroupCriterion;

}



		$user = new AdWordsUser();
		$user->LogAll();	
		$user->SetClientCustomerId($adword_account);
		
		 
		UpdateKeyword($user, $adgroup_id, $keyword_id, $status);
		
	echo json_encode($cam);

?>
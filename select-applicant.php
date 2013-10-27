<?php
require_once 'Classes/DBWrapper.php';

$applicant_id=$_POST['applicant_id'];

$db = new DBWrapper();

$conditionParams = Array();
$conditionParams['id']=$applicant_id;

$result = $db->select('basic_details','*',$conditionParams);
if($result){
echo json_encode($result);
}
   

?>
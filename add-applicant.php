<?php 
require_once 'Classes/DBWrapper.php';
$msg='';
$db = new DBWrapper();

$facilitator_id='1';
$conditionParams = Array();
$conditionParams['FacilitatorID']=$facilitator_id;


$result = $db->select('applicants','*',$conditionParams);
if(isset($_POST['submit3'])){
$params=Array();
$params['ApplicantName']=$_POST['ApplicantName'];
$params['FacilitatorID']='$facilitator_id';


$last_inserted_id = $db->insert('applicants',$params);

if($last_inserted_id) 
{
$msg="Applicant Add  successful Insertion";
}
else
{
 $msg= "Applicant Add unsuccessful insertion";
}

}
?>
<!DOCTYPE html>
<html  lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Nayi Subah</title>
<!-- css -->
<link rel="stylesheet" href="style/font-awesome.css" >
<link type="text/css" href="style/bootstrap.min.css" media="screen" rel="stylesheet">
<link type="text/css" href="style/bootstrap-responsive.min.css" media="screen" rel="stylesheet">
<link type="text/css" href="style/style.css" media="all" rel="stylesheet">
<link type="text/css" href="style/icons.css" media="screen" rel="stylesheet">
<link type="text/css" href="style/style(1).css" media="screen" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/default.css" media="all">
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<!--Calender Jquery starts-->
<script type="text/javascript">
$(document).ready(function() {
    $('#datepicker-dob').Zebra_DatePicker();
});</script>
<script type="text/javascript" src="js/Datepicker/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="js/Datepicker/css/default.css" media="all">
<!--Calender Jquery ends-->


 </head>
<body class="has-aside-panel">
<div class="wrapper container">
  <div id="page_box" class="page_box"> 
  
  <?php include_once("header.php");?>
	
    
    <div id="main_container" class="main_container">
    
    <div id="page_content" class="page_content">


	<div class="app_Employee">
		<div class="row-fluid">
			<div class="span3">
				<h4>Add Applicant</h4>
			</div>
         <?php if($msg!=''){echo '<span class="accent" >'.$msg.'</span>'; }?>
			
		</div>
	</div>       

			<div id="profile_tab" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            
            <form name="emp_form1" action="" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return ajaxsubmit();" id="emp_form1">
            <input type="hidden" name="hiddenid" id="hiddenid" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
            <div class="row-fluid">
            
            
            <div class="span3">
            </div>
            
            <div class="span9">
            
                  <div class="control-group">
                    <label class="control-label">Applicant Name<span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="ApplicantName" id="ApplicantName" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                 
                  
   </div>
</div>
                <div class="form-actions">
					<input type="submit" name="submit3" id="submit" value="Add" class="btn">
		        </div>
   	  </form>
</div>


		 
		
        
</div>
</div>
</div>
   </div>


   </div>
   
  
  <div id="footer" class="footer">
   
 </div>
</div>



</div>


 
</body>
</html>

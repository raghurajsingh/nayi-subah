<?php 
require_once 'Classes/DBWrapper.php';
$msg='';
$db = new DBWrapper();

$facilitator_id='1';
$conditionParams = Array();
$conditionParams['FacilitatorID']=$facilitator_id;


$result = $db->select('applicants','*',$conditionParams);
if(isset($_POST['submit3'])){
if($_POST['hiddenid']){
	
$Conparms=Array();
$Conparms['id']=	$_POST['hiddenid'];
		
$params=Array();
$params['firstname']=$_POST['firstname'];
$params['middlename']=$_POST['middlename'];
$params['lastname']=$_POST['lastname'];
$params['gender']=$_POST['gender'];
$params['age']=$_POST['age'];
$params['dob']=$_POST['dob'];
$params['house_no']=$_POST['house_no'];
$params['street']=$_POST['street'];
$params['landmark']=$_POST['landmark'];
$params['area']=$_POST['area'];
$params['city']=$_POST['city'];
$params['post_office']=$_POST['post_office'];
$params['district']=$_POST['district'];
$params['sub_district']=$_POST['sub_district'];
$params['state']=$_POST['state'];
$params['mobile']=$_POST['mobile'];
$params['email']=$_POST['email'];
$params['pincode']=$_POST['pincode'];

$result1= $db->update('basic_details',$params,$Conparms);
	if($result1) 
{
 $msg= "Code for successful Insertion";
}
else
{
 $msg= "Code for unsuccessful insertion";
}		
		
}else{
	
$params=Array();
$params['id']=	$_POST['applicant'];	
$params['firstname']=$_POST['firstname'];
$params['middlename']=$_POST['middlename'];
$params['lastname']=$_POST['lastname'];
$params['gender']=$_POST['gender'];
$params['age']=$_POST['age'];
$params['dob']=$_POST['dob'];
$params['house_no']=$_POST['house_no'];
$params['street']=$_POST['street'];
$params['landmark']=$_POST['landmark'];
$params['area']=$_POST['area'];
$params['city']=$_POST['city'];
$params['post_office']=$_POST['post_office'];
$params['district']=$_POST['district'];
$params['sub_district']=$_POST['sub_district'];
$params['state']=$_POST['state'];
$params['mobile']=$_POST['mobile'];
$params['email']=$_POST['email'];
$params['pincode']=$_POST['pincode'];

$result1= $db->insert('basic_details',$params);

if($result1) 
{
 $msg= "Code for successful Insertion";
}
else
{
 $msg= "Code for unsuccessful insertion";
}	

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
				<h4>Basic Details</h4>
			</div>
               <?php if($msg!=''){echo '<span class="accent" >'.$msg.'</span>'; }?>
			<a href="home.php" style="float: right"> Back To Home</a>
		</div>
	</div>       

			<div id="profile_tab" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            
            <form name="emp_form1" action="" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return ajaxsubmit();" id="emp_form1">
            <input type="hidden" name="hiddenid" id="hiddenid" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
            <div class="row-fluid">
            
            
            <div class="span3"> 
            <h5 style="margin-left:20px;"><txt name="person_id">Applicant Photo</txt></h5>
            <p class="Center">
            <img name="photos" src="style/no_photo.jpg" width="160" height="160" alt=""><br>
            <small>Image will be resized to 160 x 160 pixels</small>
            </p>
            <div class="file_upload">
            <input type="file" name="photo" id="photo" size="21" class="input-xlarge" /></div>
            <div class="clear"></div>
            </div>
            
            <div class="span9">
            
                  <div class="control-group">
                    <label class="control-label">Select Applicant Name</label>
                    <div class="controls">
                      <select name="applicant" id="applicant_id" class="input-xlarge req_fields">
                        <option value="">Please Select Applicant Name</option>
                        <?php
                        foreach($result as $array)
                        {?>
                            <option value="<?php echo $array['ApplicantID']; ?>"><?php echo $array['ApplicantName']; ?></option>
                        <?php } ?>
                        </select>                     
                    </div>
                 </div>
            
                  <div class="control-group">
                    <label class="control-label">First name <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="firstname" id="firstname" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                 
                  <div class="control-group">
                    <label class="control-label">Middle Name</label>
                    <div class="controls">
                    <input type="text" name="middlename" id="middlename" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                
                 <div class="control-group">
                    <label class="control-label">Last name <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="lastname" id="lastname" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>

                <div class="control-group">
                    <label class="control-label">Gender <span class="accent">*</span></label>
                    <div class="controls">
                        <input type="radio" id="gender1" name="gender" value="male" size="35" class="gender input-xlarge req_fields" /><span class="gender_label">Male</span>
                      
                        <input type="radio" name="gender" id="gender2" value="female" size="35" class="gender input-xlarge req_fields"  /><span class="gender_label">Female</span>
                        
                         <input type="radio"  name="gender" id="gender3" value="transgender" size="35" class="gender qinput-xlarge req_fields"  /><span class="gender_label">Transgender</span>
                          
                    </div>
                </div>
                
                 <div class="control-group">
                    <label class="control-label">Age <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" id="age" name="age" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                 
                 
                 <div class="control-group">
                    <label class="control-label">Date of Birth <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="dob" id="datepicker-dob" size="12" maxlength="20"  class="input-xlarge" value="" Placeholder="Please click here" />        
                    </div>
                </div>
                
                   <div class="control-group">
                    <label class="control-label">House No/ Bldg./Apt.</label>
                    <div class="controls">
                    <input type="text" id="house_no" name="house_no" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                 
                    <div class="control-group">
                    <label class="control-label">Street/Road/Lane</label>
                    <div class="controls">
                    <input type="text" id="street" name="street" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    
                    </div>
                 </div>
                 
                 
                 
                 
                    <div class="control-group">
                    <label class="control-label">Landmark</label>
                    <div class="controls">
                    <input type="text" name="landmark"  id="landmark" value="" size="35" class="input-xlarge req_fields" Placeholder="Please Type here" />
                    </div>
                 </div>
                
                
                <div class="control-group">
                    <label class="control-label">Area/locality/sector <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" Placeholder="Please Type here" name="area" id="area" value="" size="35" class="input-xlarge req_fields" />
                    
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Village/Town/City <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="city" id="city" size="60" class="input-xlarge req_fields" id="city" value="" Placeholder="Please Type here"  />
             
                    </div>
                </div>
            
                <div class="control-group">
                    <label class="control-label">Post Office</label>
                    <div class="controls">
                    <input type="text" name="post_office" id="post_office" size="60" class="input-xlarge" value="" Placeholder="Please Type here" />        
                    </div>
                </div>
                
                
                 <div class="control-group">
                    <label class="control-label">District</label>
                    <div class="controls">
                    <input type="text" name="district" id="district" size="60" class="input-xlarge" value="" Placeholder="Please Type here" />        
                    </div>
                </div>
                
                   
                 <div class="control-group">
                    <label class="control-label">Sub District</label>
                    <div class="controls">
                    <input type="text" name="sub_district" id="sub_district" size="60" class="input-xlarge" value="" Placeholder="Please Type here" />        
                    </div>
                </div>
                
                  <div class="control-group">
                    <label class="control-label">State <span class="accent">*</span></label>
                    <div class="controls">
                    <input type="text" name="state" id="state" size="60" class="input-xlarge" value="" Placeholder="Please Type here" />        
                    </div>
                </div> 
                
                
               <div class="control-group">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                      <input type="text" name="mobile" size="60" class="input-xlarge" id="mobile" value""  Placeholder="Please Type here" />
                    </div>
                </div>
                
                
                <div class="control-group">
                    <label class="control-label">Email id</label>
                    <div class="controls">
                      <input type="text" name="email" size="60" class="input-xlarge" id="email" value=""  Placeholder="Please Type here" />
                    
                    </div>
                </div>
                
                
                 <div class="control-group">
                    <label class="control-label">Pin Code <span class="accent">*</span></label>
                    <div class="controls">
                      <input type="text" name="pincode" size="60"  Placeholder="Please Type here" class="input-xlarge" id="pincode" value="" />
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

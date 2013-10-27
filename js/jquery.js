$(document).ready(function(){
	
	
	 $("#applicant_id").change(function(){
		
	  var applicant_id= $("#applicant_id").val();
	 
         $.ajax({
                        type: "POST",
                        url: "select-applicant.php",
                        data: 'applicant_id='+applicant_id,
                        success:function(html){
			            var arr2= new Array();
			            arr2 = JSON.parse(html);
						
						var id=arr2[0]['id'];
						$("#firstname").val(arr2[0]['firstname']);
						$("#middlename").val(arr2[0]['middlename']);
						$("#lastname").val(arr2[0]['lastname']);
						$("#gender").val(arr2[0]['gender']);
						$("#age").val(arr2[0]['age']);
						$("#datepicker-dob").val(arr2[0]['dob']);
						$("#house_no").val(arr2[0]['house_no']);
						$("#street").val(arr2[0]['street']);
						$("#landmark").val(arr2[0]['landmark']);
						$("#area").val(arr2[0]['area']);
						$("#city").val(arr2[0]['city']);
						$("#post_office").val(arr2[0]['post_office']);
						$("#district").val(arr2[0]['district']);
						$("#sub_district").val(arr2[0]['sub_district']);
						$("#state").val(arr2[0]['state']);
						$("#mobile").val(arr2[0]['mobile']);
						$("#email").val(arr2[0]['email']);
						$("#pincode").val(arr2[0]['pincode']);
						
						
			            
			
			
			          }
		           });
			
    
     });
	
		
});
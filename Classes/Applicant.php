<?php

class Employee
{
	
    private $id;
    private $groupid;
    private $linemanager;
	private $banner;
	private $username;


	
	public function __construct()	
	{
		$this->id = NULL;
		$this->groupid = NULL;
		$this->linemanager = NULL;
		$this->banner = NULL;
		$this->username = NULL;
		$this->password = NULL;
		$this->firstname = NULL;
		$this->lastname = NULL;
		$this->date_of_joining = NULL;
		$this->dob = NULL;
		$this->qualification = NULL;
		$this->blood_group=NULL;
		$this->gender = NULL;
		$this->married = NULL;
		$this->date_of_marrige = NULL;
		$this->permanent_address = NULL;
		$this->permanent_city = NULL;
		$this->local_address = NULL;
		$this->local_city = NULL;
		$this->mobile = NULL;
		$this->cmobile = NULL;
		$this->emobile = NULL;
		$this->email = NULL;
		$this->cemail = NULL;
		$this->company_name = NULL;
		$this->department = NULL;
		$this->job_designation = NULL;
		$this->career = NULL;
		$this->interests = NULL;
		$this->emp_code = NULL;
    	$this->login_datail = NULL;
	}
	

	
	public function setValues($array)
	{
		foreach($array as $key => $value)
		{
			$this->$key = $value;
		}
	}
	
	
	
	public function getlatestId()
	{
		
		$lestquery=mysql_query("select id from employee_directory order by id desc limit 0,1");        
		if(mysql_num_rows($lestquery)>0)
		{
			$data=mysql_fetch_assoc($lestquery);
			$id=$data['id'];
			$id=$id;
		}
		else
		{
			$id=0;
		}
		
		return $id;
	}
	
	
	

	public function Insert()
	{
		
		$id = $this->getlatestId();
		$id=$id+1;
		$groupid=mysql_real_escape_string($this->groupid); 
		$linemanager=mysql_real_escape_string($this->linemanager); 
		$banner=mysql_real_escape_string($this->banner); 
		$username=mysql_real_escape_string($this->username); 
		$password=mysql_real_escape_string(md5($this->password)); 
	    $firstname=mysql_real_escape_string($this->firstname); 
		$lastname=mysql_real_escape_string($this->lastname); 
		$date_of_joining=mysql_real_escape_string($this->date_of_joining); 
		$dob=mysql_real_escape_string($this->dob); 
		$qualification=mysql_real_escape_string($this->qualification);
		$blood_group=mysql_real_escape_string($this->blood_group);
		$gender=mysql_real_escape_string($this->gender);
		$married=mysql_real_escape_string($this->married);
		$date_of_marrige=mysql_real_escape_string($this->date_of_marrige);
		$permanent_address=mysql_real_escape_string($this->permanent_address);
		$permanent_city=mysql_real_escape_string($this->permanent_city);
		$local_address=mysql_real_escape_string($this->local_address);
		$local_city=mysql_real_escape_string($this->local_city);
		$mobile=mysql_real_escape_string($this->mobile); 
		$cmobile=mysql_real_escape_string($this->cmobile);
		$emobile=mysql_real_escape_string($this->emobile);
		$email=mysql_real_escape_string($this->email);
		$cemail=mysql_real_escape_string($this->cemail);
		$company_name=mysql_real_escape_string($this->company_name);
		$department=mysql_real_escape_string($this->department);
		$job_designation=mysql_real_escape_string($this->job_designation);
		$career=mysql_real_escape_string($this->career);
		$interests=mysql_real_escape_string($this->interests);
		$emp_code=mysql_real_escape_string($this->emp_code);
		$login_detail=mysql_real_escape_string($this->login_detail);
		
	  $insert_query=("insert into employee_directory (id,groupid,linemanager,banner,username,password,lastname,dob,firstname,blood_group,qualification,married,date_of_marrige,permanent_address,gender,permanent_city,local_address,local_city,cmobile,mobile,emobile,email,cemail,company_name,department,job_designation,career,interests,emp_code,login_detail,date_of_joining) values('$id','$groupid','$linemanager','$banner','$username','$password','$lastname','$dob','$firstname','$blood_group','$qualification','$married', '$date_of_marrige', '$permanent_address', '$gender', '$permanent_city','$local_address', '$local_city','$cmobile', '$mobile', '$emobile', '$email', '$cemail','$company_name','$department','$job_designation','$career','$interests','$emp_code','$login_detail','$date_of_joining')");
	    // echo $insert_query; die();
	    $insertquery = mysql_query($insert_query);
		return $insertquery;
	
		
	}
	
	
	public function fetchDisplay($statement1)
	{
	  if($statement1){
		$select = ("select * from employee_directory $statement1");
	  }else{
		$select = ("select * from employee_directory");
	  }
	    //echo $select; 
		$dsquery=mysql_query($select);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
	
			  $arr[$i]['id']=stripslashes($dsdata['id']);
			  $arr[$i]['groupid']=stripslashes($dsdata['groupid']);
			  $arr[$i]['linemanager']=stripslashes($dsdata['linemanager']);
			  $arr[$i]['banner']=stripslashes($dsdata['banner']);
			  $arr[$i]['username']=stripslashes($dsdata['username']);
			  $arr[$i]['password']=stripslashes($dsdata['password']);
			  $arr[$i]['firstname']=stripslashes($dsdata['firstname']);
			  $arr[$i]['lastname']=stripslashes($dsdata['lastname']);
			  $arr[$i]['date_of_joining']=stripslashes($dsdata['date_of_joining']);
			  $arr[$i]['dob']=stripslashes($dsdata['dob']);
			  $arr[$i]['qualification']=stripslashes($dsdata['qualification']);
			  $arr[$i]['blood_group']=stripslashes($dsdata['blood_group']);
			  $arr[$i]['gender']=stripslashes($dsdata['gender']);
			  $arr[$i]['married']=stripslashes($dsdata['married']);
			  $arr[$i]['date_of_marrige']=stripslashes($dsdata['date_of_marrige']);
		      $arr[$i]['permanent_address']=stripslashes($dsdata['permanent_address']);
			  $arr[$i]['permanent_city']=stripslashes($dsdata['permanent_city']);
		      $arr[$i]['local_address']=stripslashes($dsdata['local_address']);
			  $arr[$i]['local_city']=stripslashes($dsdata['local_city']);
			  $arr[$i]['mobile']=stripslashes($dsdata['mobile']);
			  $arr[$i]['cmobile']=stripslashes($dsdata['cmobile']);
			  $arr[$i]['emobile']=stripslashes($dsdata['emobile']);
			  $arr[$i]['email']=stripslashes($dsdata['email']);
			  $arr[$i]['cemail']=stripslashes($dsdata['cemail']);
			  $arr[$i]['company_name']=stripslashes($dsdata['company_name']);
			  $arr[$i]['department']=stripslashes($dsdata['department']);
			  $arr[$i]['job_designation']=stripslashes($dsdata['job_designation']);
			  $arr[$i]['career']=stripslashes($dsdata['career']);
			  $arr[$i]['interests']=stripslashes($dsdata['interests']);
			  $arr[$i]['emp_code']=stripslashes($dsdata['emp_code']);
			  $arr[$i]['login_detail']=stripslashes($dsdata['login_detail']);
		}
		
		
		return $arr;
		
      }
	  
	public function PaginationfetchDisplay($statement,$limit,$startpoint)
	{
	    $ds_query=("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		$dsquery = mysql_query($ds_query);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
	
			  $arr[$i]['id']=stripslashes($dsdata['id']);
			  $arr[$i]['groupid']=stripslashes($dsdata['groupid']);
			  $arr[$i]['linemanager']=stripslashes($dsdata['linemanager']);
			  $arr[$i]['banner']=stripslashes($dsdata['banner']);
			  $arr[$i]['username']=stripslashes($dsdata['username']);
			  $arr[$i]['password']=stripslashes($dsdata['password']);
			  $arr[$i]['firstname']=stripslashes($dsdata['firstname']);
			  $arr[$i]['lastname']=stripslashes($dsdata['lastname']);
			  $arr[$i]['date_of_joining']=stripslashes($dsdata['date_of_joining']);
			  $arr[$i]['dob']=stripslashes($dsdata['dob']);
			  $arr[$i]['qualification']=stripslashes($dsdata['qualification']);
			  $arr[$i]['blood_group']=stripslashes($dsdata['blood_group']);
			  $arr[$i]['gender']=stripslashes($dsdata['gender']);
			  $arr[$i]['married']=stripslashes($dsdata['married']);
			  $arr[$i]['date_of_marrige']=stripslashes($dsdata['date_of_marrige']);
		      $arr[$i]['permanent_address']=stripslashes($dsdata['permanent_address']);
			  $arr[$i]['permanent_city']=stripslashes($dsdata['permanent_city']);
		      $arr[$i]['local_address']=stripslashes($dsdata['local_address']);
			  $arr[$i]['local_city']=stripslashes($dsdata['local_city']);
			  $arr[$i]['mobile']=stripslashes($dsdata['mobile']);
			  $arr[$i]['cmobile']=stripslashes($dsdata['cmobile']);
			  $arr[$i]['emobile']=stripslashes($dsdata['emobile']);
			  $arr[$i]['email']=stripslashes($dsdata['email']);
			  $arr[$i]['cemail']=stripslashes($dsdata['cemail']);
			  $arr[$i]['company_name']=stripslashes($dsdata['company_name']);
			  $arr[$i]['department']=stripslashes($dsdata['department']);
			  $arr[$i]['job_designation']=stripslashes($dsdata['job_designation']);
			  $arr[$i]['career']=stripslashes($dsdata['career']);
			  $arr[$i]['interests']=stripslashes($dsdata['interests']);
			  $arr[$i]['emp_code']=stripslashes($dsdata['emp_code']);
   		      $arr[$i]['login_detail']=stripslashes($dsdata['login_detail']);
			  
		}
		
		
		return $arr;
		
      }
	

	
	public function SetById($id)
	{
	  $setquery=mysql_query("select * from employee_directory where id in($id)");
	  $setdata=mysql_fetch_assoc($setquery);
	  
	  $this->id=$setdata['id'];
	  $this->groupid=$setdata['groupid'];
	  $this->linemanager=$setdata['linemanager'];
	  $this->banner=$setdata['banner'];
	  $this->username=$setdata['username'];
	  $this->password=$setdata['password'];
	  $this->firstname=$setdata['firstname'];
	  $this->lastname=$setdata['lastname'];
	  $this->date_of_joining=$setdata['date_of_joining'];
	  $this->dob=$setdata['dob'];
	  $this->qualification=$setdata['qualification'];
	  $this->blood_group=$setdata['blood_group'];
	  $this->gender=$setdata['gender'];
	  $this->married=$setdata['married'];
	  $this->date_of_marrige=$setdata['date_of_marrige'];
	  $this->permanent_address=$setdata['permanent_address'];
	  $this->permanent_city=$setdata['permanent_city'];
	  $this->local_address=$setdata['local_address'];
	  $this->local_city=$setdata['local_city'];
	  $this->mobile=$setdata['mobile'];
	  $this->cmobile=$setdata['cmobile'];
	  $this->emobile=$setdata['emobile'];
	  $this->email=$setdata['email'];
	  $this->cemail=$setdata['cemail'];
	  $this->company_name=$setdata['company_name'];
	  $this->department=$setdata['department'];
	  $this->job_designation=$setdata['job_designation'];
	  $this->career=$setdata['career'];
	  $this->interests=$setdata['interests'];
	  $this->emp_code=$setdata['emp_code'];
	  $this->login_detail=$setdata['login_detail'];
	 
}
	
	
	
	public function Display()
	{
		
	  $arr['id']=stripslashes($this->id);
	  $arr['groupid']=stripslashes($this->groupid);
	  $arr['linemanager']=stripslashes($this->linemanager);
	  $arr['banner']=stripslashes($this->banner);
	  $arr['username']=stripslashes($this->username);
	  $arr['password']=stripslashes($this->password);
	  $arr['firstname']=stripslashes($this->firstname); 
	  $arr['lastname']=stripslashes($this->lastname);
	  $arr['date_of_joining']=stripslashes($this->date_of_joining);
	  $arr['dob']=stripslashes($this->dob);
	  $arr['qualification']=stripslashes($this->qualification);
  	  $arr['blood_group']=stripslashes($this->blood_group);
	  $arr['gender']=stripslashes($this->gender);
	  $arr['married']=stripslashes($this->married);
	  $arr['date_of_marrige']=stripslashes($this->date_of_marrige);
	  $arr['permanent_address']=stripslashes($this->permanent_address);
	  $arr['permanent_city']=stripslashes($this->permanent_city);
	  $arr['local_address']=stripslashes($this->local_address);
	  $arr['local_city']=stripslashes($this->local_city);
	  $arr['mobile']=stripslashes($this->mobile);
	  $arr['cmobile']=stripslashes($this->cmobile);
	  $arr['emobile']=stripslashes($this->emobile);
	  $arr['email']=stripslashes($this->email);
	  $arr['cemail']=stripslashes($this->cemail);
	  $arr['company_name']=stripslashes($this->company_name);
	  $arr['department']=stripslashes($this->department);
	  $arr['job_designation']=stripslashes($this->job_designation);
	  $arr['career']=stripslashes($this->career);
	  $arr['interests']=stripslashes($this->interests);
	  $arr['emp_code']=stripslashes($this->emp_code);
	  $arr['login_detail']=stripslashes($this->login_detail);
	  
	 
	  return $arr;
	}
	
	public function Update()
	{
		
		$banner=mysql_real_escape_string($this->banner); 
		$groupid=mysql_real_escape_string($this->groupid); 
		$linemanager=mysql_real_escape_string($this->linemanager); 
		$username=mysql_real_escape_string($this->username); 
		$password=mysql_real_escape_string($this->password);
		$firstname=mysql_real_escape_string($this->firstname); 
		$lastname=mysql_real_escape_string($this->lastname); 
		$date_of_joining=mysql_real_escape_string($this->date_of_joining); 
		$dob=mysql_real_escape_string($this->dob); 
		$qualification=mysql_real_escape_string($this->qualification);
		$blood_group=mysql_real_escape_string($this->blood_group);
		$gender=mysql_real_escape_string($this->gender);
		$married=mysql_real_escape_string($this->married);
		$date_of_marrige=mysql_real_escape_string($this->date_of_marrige);
		$permanent_address=mysql_real_escape_string($this->permanent_address);
		$permanent_city=mysql_real_escape_string($this->permanent_city);
		$local_address=mysql_real_escape_string($this->local_address);
		$local_city=mysql_real_escape_string($this->local_city);
		$mobile=mysql_real_escape_string($this->mobile);
		$cmobile=mysql_real_escape_string($this->cmobile);
		$emobile=mysql_real_escape_string($this->emobile);
		$email=mysql_real_escape_string($this->email);
		$cemail=mysql_real_escape_string($this->cemail);
		$company_name=mysql_real_escape_string($this->company_name);
		$department=mysql_real_escape_string($this->department);
		$job_designation=mysql_real_escape_string($this->job_designation);
		$career=mysql_real_escape_string($this->career);
		$interests=mysql_real_escape_string($this->interests);
		$emp_code=mysql_real_escape_string($this->emp_code);
		$login_detail=mysql_real_escape_string($this->login_detail);
		
	    $update_query= ("update employee_directory set
					   groupid = '$groupid',
					   linemanager = '$linemanager',
					   banner = '$banner',
					   username = '$username',
					   password = '$password',
					   lastname = '$lastname',
					   dob = '$dob',
					   date_of_joining = '$date_of_joining',
                       firstname = '$firstname',
					   qualification = '$qualification',
					   blood_group='$blood_group',
					   married = '$married',
					   date_of_marrige = '$date_of_marrige',
					   permanent_address = '$permanent_address',
					   permanent_city = '$permanent_city',
					   local_address = '$local_address',
					   local_city = '$local_city',
					   gender = '$gender',
					   mobile = '$mobile',
					   cmobile = '$cmobile',
					   emobile = '$emobile',
					   email = '$email',
					   cemail = '$cemail',
					   company_name = '$company_name',
					   department = '$department',
					   job_designation = '$job_designation',
					   career = '$career',
					   interests = '$interests',
					   emp_code = '$emp_code',
					   login_detail = '$login_detail'
                       where id=$this->id"); 
		//echo  $update_query; die();
        $query = mysql_query($update_query);
		return $query;
		
	}

	
	public function Update_Selected($sel_id)
	{
		$id = mysql_real_escape_string($sel_id);
		$blood_group = mysql_real_escape_string($this->blood_group);
	    $query = "Update employee_directory set blood_group='$blood_group' where id in($sel_id)"; 
		$res = mysql_query($query);
		
		return $res;
	}
	public function Delete_Selected()
	{  		
		$sel_id = mysql_real_escape_string($this->id);		
		$array_id=explode(",",$this->id);
		for($a=0;$a<count($array_id);$a++){
		        $dpid=$array_id[$a];				
		        $this->SetById($dpid);
				if(file_exists("Employee-photo/Big/".$this->banner)){						
							unlink("Employee-photo/Big/".$this->banner);
				}				
				if(file_exists("Employee-photo/".$this->banner)){						
							unlink("Employee-photo/".$this->banner);
				}
				if(file_exists("Employee-photo/Thumbnail/".$this->banner)){						
							unlink("Employee-photo/Thumbnail/".$this->banner);
				}
			}
 
		$deletequery=mysql_query("delete from employee_directory where id in($sel_id)");	
		
		$deletequery=mysql_query("delete from accesslevel_premission where employee_id in($sel_id)");
		
		
		return $deletequery;
	}
   
   public function LineSelected($employee_id)
	{
		
		$ds_query=("select * from employee_directory where linemanager='$employee_id'"); 
		$dsquery = mysql_query($ds_query);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
	
			  $arr[$i]['linemanager2']=stripslashes($dsdata['firstname']).' '.stripslashes($dsdata['lastname']).' ('.stripslashes($dsdata['emp_code']).')';
			  
	    }
		
		return $arr;
	}
	
	
	
}

?>
<?php
  
	  if(!isset($_SESSION['email']) and (!isset($_SESSION['user_name'])) )
		{
			$email = $user = "" ;
		}
		else
		{
	       $email   = $_SESSION['email'];
	       $user    = $_SESSION['user_name'] ;
	    }
	
	$jobs = $city = $sal = $time = $phone = $job_info = "" ;
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$jobs = $_POST["jobs"];
		$city = $_POST["city"];
		$sal =mysqli_real_escape_string($conn,$_POST["sal"]);		
		$time = $_POST["time"];
		$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
		$job_info = $_POST["job_info"];

  }
	
	
	 $query   ="";
	 $query2  ="";
	 $message ="";
	 $insert1="";
	 
	 
	

		if (!empty($email) and !$jobs=="")
		{
           
              
				   $query2 = "SELECT * FROM jobs WHERE email = '$email' 
				   AND job_name = '$jobs' AND city      = '$city' 
				   AND salary   = '$sal'  AND time_type = '$time'
				   AND phone    = $phone  AND job_info  =  '$job_info'
				   AND type_job = 'DEVELOPMENT'";



				   $check_jobs = mysqli_query($conn,$query2 ) or die('query failed');
	               if(mysqli_num_rows($check_jobs) > 0)
				   {
                    
					$message1[] = "already added to JOBS";
		            }else
					{
				         $query="INSERT INTO   jobs  (email,job_name,city,salary,time_type,phone,job_info,type_job)
						  VALUES ('$email','$jobs','$city','$sal' ,'$time',$phone,'$job_info','DEVELOPMENT')";
		   
			             $insert1=mysqli_query($conn,$query);
						 $message1[] =  'add Job  Successfully ';
						
					}
		
		        }

?>
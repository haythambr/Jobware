<?php



     include '../config/config.php';
	 
	 
	 if(!isset($_SESSION['user_id']))
	 {
		 header('location:../home/index.php');
		 
	 }
	 
	 
	 
	 
	  if ($_SERVER["REQUEST_METHOD"] == "POST")
		// if(isset($_POST['update_jobs']))
		 {
			 
			 $update_id = $_POST['update_id'];
			 $update_type_job = $_POST["type_job"];
			 
			
			
			 
			 $update_city = $_POST["city"];
			 $update_validity = $_POST["validity"];
			 $update_time_type = $_POST["time_type"];
			 $update_salary =mysqli_real_escape_string($conn,$_POST["salary"]);
			 $update_phone = mysqli_real_escape_string($conn,$_POST["phone"]);
			 $update_job_info = $_POST["job_info"];

			 if ($_POST["type_job"] == "builder") {
				$update_job_name = $_POST["job_name1"];
			  } else {
				$update_job_name = $_POST["job_name"];
			  }

			 
			 
			 
			 
			 
$query1="UPDATE jobs SET job_name ='$update_job_name',type_job='$update_type_job',city='$update_city',validity='$update_validity',time_type='$update_time_type',salary=$update_salary,phone=$update_phone,job_info='$update_job_info' WHERE id = '$update_id'";     
mysqli_query($conn,$query1) or die('query failed');


$message[] = 'Job updated successfully!';

		 }
?>
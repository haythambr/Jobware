<?php

    $_SESSION['aa']="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $type_job1 = $_POST["type_job"];

      
    $job_name1 = $_POST["job_name"];
    $job_name2 = $_POST["job_name1"];
    $job_name3 = $_POST["job_name2"];
    
    


    $salary1 = $_POST["salary"];
    $time_type1 = $_POST["time_type"];
    $validity1 = $_POST["validity"];
    $city1 = $_POST["city"];
   





}

if(!isset($_POST['submit']))
        {
            
            $query2="   SELECT * FROM `jobs`
            ORDER BY id DESC";
            $select_jobs= mysqli_query($conn,$query2) or die('query failed');
        }
       else  
        {
            $query2="SELECT * FROM `jobs`
            WHERE ( validity LIKE '%{$validity1}%')
            and   (city      LIKE '%{$city1}%') 
            and   (time_type LIKE '%{$time_type1}%') 
            and   (type_job  LIKE '%{$type_job1}%')
            and   (job_name  LIKE '%{$job_name2}%')
            and   (job_name  LIKE '%{$job_name3}%')
            and   (job_name  LIKE '%{$job_name1}%') $salary1 
            ORDER BY id DESC";
               
            $select_jobs= mysqli_query($conn,$query2) or die('query failed');

        }

      

   
    
	
	





?>


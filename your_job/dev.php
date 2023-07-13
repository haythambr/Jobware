<?php


       include '../config/config.php';
	   
	   
	   //اذا ما كان المتغير موجود رجع المستخدم للصفحة الرئيسية
	   if(!isset($_SESSION['user_id']))
	   {
		   header('location:../home/index.php');
		 
	   }
	   
	   $email1      =   $_SESSION['email'];
	   
	   
	   
	   
	   
	   //كود لحذف الوظيفة 
	  if(isset($_GET['delete']))
	  {

          $delete_id = $_GET['delete'];
		  
          mysqli_query($conn, "DELETE FROM jobs WHERE id = '$delete_id'") or die('query failed');
          header('location:../your_job/dev.php');

       }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobware</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jobware.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <style>
      .button{
        background-color: red !important;
      }
      .job-button1{
        margin-top: 24px;
      }
      .latest-job .container .box .job-button1 a{
    background-color: rgb(74, 74, 218);
    padding: 20px 40px;
    color: white;
    font-weight: bold;
    border-radius: 10px;
    transition: var(--main-transition);
   }
   .latest-job .container .box .job-button1 .edit_button:hover{
    background-color: #19c8fa;
   }
    </style>
</head>
<body style="background-color: #d4cece;" >




    <!-- start header  -->
	
    <?php include '../header/header.php'; ?>
	
    <!-- end header  -->




<!-- start boxes -->
<div style="padding-top:120px;">
<div class="main-title">Your Job</div></div>








<div class="latest-job">
<div class="container">
<?php

	    $query2="   SELECT * FROM `jobs`  WHERE email = '$email1' ORDER BY id DESC";
		  $select_jobs= mysqli_query($conn,$query2) or die('query failed');
         if(mysqli_num_rows($select_jobs) > 0){
            while($jobs1 = mysqli_fetch_assoc($select_jobs)){
      ?>
	 
	
		
   
        <div class="box">
            <div class="card1">
            <div class="company">
            <?php 
            if( $jobs1['type_job'] == 'DEVELOPMENT'){
            ?>
            
            <img src="../img/44649257.png" alt=""></div>
            
            <?php 
            }elseif($jobs1['type_job'] == 'builder'){?>
                  
                <img src="../img/th-removebg-preview (1).png" alt=""></div>

            <?php 
            }
            ?>
                          <div class="info">
            <h3 style="font-size:20px;color:red;"><?php echo $jobs1['email']; ?></h3>
           </div>
          </div>
        <h3 class="job-title"><?php echo $jobs1['job_name']; ?></h3>
        <p class="location"><i class="fas fa-map-marker-alt"></i>
        <span><?php echo $jobs1['city']; ?></span>
        </p>
        <div class="tags">
            <p>
                <i class="fa-solid fa-coins"></i>
                <span><?php echo $jobs1['salary']; ?></span>
            </p>
            <p><i class="fas fa-briefcase"></i><span"><?php echo $jobs1['validity']; ?></span></p>
            <p style="  padding: 16px 28px;
            border-radius: 8px;
            background-color: #b9b9b963;"><i class="fas fa-clock"></i><span><?php echo $jobs1['time_type']; ?></span></p>
        </div>
      
        <div class="job-button1">
            <a href="../updatejob/updatejob.php?update=<?php echo $jobs1['id']; ?>" class="edit_button" style="padding:15px 26px">Update Job</a>
            
            <a href="../your_job/dev.php?delete=<?php echo $jobs1['id']; ?>" class="button" style="padding:15px 26px"   onclick="return confirm('do you want to delete the current job? ');">DELETE</a>
    </div>  
    </div>
	
	
	
	
	
	


      <?php
         }
      }else{
         echo '<p >no jobs added yet!</p>';
      }
	  
	  
	  
      ?>
</div></div>



































<!-- start footer  -->
<div class="footer">
        <div class="container">
            <i class="fa-solid fa-magnifying-glass-dollar logo">JOBWARE</i> 
            <p>We Are Social</p>
            <div class="social-icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-home"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <p class="copyright">&copy; 2023 <span>JOBWARE Team</span> All Right Reserved</p>
        </div>
       </div>
     <!-- end footer  -->
         
    
</body>
</html>
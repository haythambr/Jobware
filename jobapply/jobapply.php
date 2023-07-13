<?php
include '../config/config.php';



if(!isset($_SESSION['user_id']))
	 {
		 header('location:../home/index.php');
		 
	 }

     $user1= $_SESSION['user_id'];



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobware</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/jobware.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  <style>
    span{
        color:#19c8fa;
    }
    .latest-job .container {
        display: grid;
    grid-template-columns: repeat(auto-fill,minmax(380px,1fr));
    gap: 24px;
}


    .latest-job .container .box{
    width: 100%;
    background-color: #ececec;
    border-radius: 8px;
    border: 3px solid #ececec;
    padding: 10px 30px !important;
    box-shadow: 5px 5px 5px #00000052;
    overflow-x: hidden;
    min-height: 400px;
    line-height: 39px;
    font-size: 19px;
    box-shadow: 16px 20px 21px #5a050552;
    }
    @media(max-width:450px){
        .latest-job .container .box {
            font-size: 17px;
        }
    }
  </style>
</head>
<body style="background-color: #d4cece;" >
<header>
<?php include '../header/header.php'; ?>
	
</header>

<section>
<div class="latest-job" style="padding-top: 70px;">
        <div class="main-title" style="margin-top:70px;
                                       margin-bottom: 29px;">
                                       jobs applied</div>



        <div class="container">


        <?php
        
        $query2 = "SELECT * FROM jobs_applied,jobs 
                   WHERE jobs_applied.id_jobs = jobs.id
                   and   jobs_applied.id_user = $user1 
                   ORDER BY jobs_applied.id DESC";



		$select_jobs= mysqli_query($conn,$query2) or die('query failed');
        if(mysqli_num_rows($select_jobs) > 0){
            while($jobs1 = mysqli_fetch_assoc($select_jobs)){
        ?>






            <div class="box">
                <div class="card1">
                <p>Submited in:&nbsp;&nbsp;<span><?php echo $jobs1['Submited_in']; ?></span></p> 
                <p>Email:&nbsp;&nbsp;<span><?php echo $jobs1['email']; ?></span></p> 
                <p>Job Name:&nbsp;&nbsp;<span><?php echo $jobs1['job_name']; ?></span></p>
                <p>City:&nbsp;&nbsp;<span><?php echo $jobs1['city']; ?></span></p> 
                <p>Validity:&nbsp;&nbsp;<span><?php echo $jobs1['validity']; ?></span></p> 
                <p>Time-Type:&nbsp;&nbsp;<span><?php echo $jobs1['time_type']; ?></span></p> 
                <p>Salary:&nbsp;&nbsp;<span><?php echo $jobs1['salary']; ?></span></p> 
                <p>Phone:&nbsp;&nbsp;<span><?php echo $jobs1['phone']; ?></span></p> 
                <p>Experience:&nbsp;&nbsp;<span><?php echo $jobs1['job_info']; ?></span></p> 


                <p>Order Status:&nbsp;&nbsp;<span style="color:<?php if($jobs1['Order_Status'] == 'pending')
                {echo 'orange'; }elseif($jobs1['Order_Status'] == 'Accepted'){echo 'green';}else{echo 'red';}?>"><?php echo $jobs1['Order_Status']; ?></span></p>
                
            
                 </div>
            </div>
            


        <?php
         }
        }else{
            echo '<p >no jobs added yet!</p>';
        }
	  
	  
	  
      ?>
           
        </div>
</div>

</section>




     <!-- start footer -->
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
          <!-- start button  -->
          <div class="up">
            <a href="#header">up</a>
         </div>
    <!-- end footer -->

    
</body>
</html>
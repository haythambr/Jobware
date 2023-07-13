<?php

include '../config/config.php';


if(isset($_SESSION['job_name_search']) or isset($_SESSION['city_search']))
{

    $job_name1=$_SESSION['job_name_search'];
    $city1 = $_SESSION['city_search'];
    $query2="SELECT * FROM `jobs`
    WHERE (job_name  LIKE '%{$job_name1}%')
    and   (city      LIKE '%{$city1}%') 
    AND validity = 'Available'
    ORDER BY id DESC " ;
       
    $select_jobs= mysqli_query($conn,$query2) or die('query failed');

}
else
{
    header('location:../home/index.php');
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
        body {font-family: Arial, Helvetica, sans-serif;}
        

      
        
        /* Set a style for all buttons */
        button {
         
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        .container {
          padding: 16px;
        }
        
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 92%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
         
        }header nav ul li a {
    display: block;
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
    padding: 30px 10px;
    position: relative;
    z-index: 2;
}
        header .container::after {
    content: "";
    position: absolute;
    background-color: #a2a2a2;
    height: 1px;
    width: calc(100% - 30px);
    bottom:16px;
    left: 15px;}
    header ul li .button {
    position: relative;
    display: block;
    padding: 10px 9px;
    border-radius: 14px;
    top: 20px;
    background: transparent;
    color: white;
    border: none;
    transition: var(--main-transition);
}
.modal-content{
    position: relative;
    width: 700px;
    min-height:350px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    
}
h2{
    margin:27px;
    font-size: 32px;
    color: #19c8fa;
    text-align: left;
}

form .inputbox{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: 7px;
}
.add-post{
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(400px,1fr));
    margin: 13px;
}
form .inputbox input{
    padding: 15px;
    border-radius: 9px;
    outline: none;
    border: none;
    border-bottom: 1px solid #ccc;
    background-color: #ffffffc7;
    caret-color:#19c8fa;
}
label{
    color: var(--main-color);
}
        @media (max-width:621px) {
            input{
                max-width: 72% !important;
            }
            form{
                padding:0 !important;
            }
        }
        @media (max-width:958px){
            input{width: 100%;}
        }
		

        </style>

</head>
<body style="background-color: #d4cece;" >



   

    <!-- start header  -->
	
    <?php include '../header/header.php'; ?>
	
    <!-- end header  -->



<?php
if(!empty($job_name1) and !empty($city1 ))
$string="$job_name1  /  $city1 " ;
elseif(!empty($job_name1)  and empty($city1 )  )
$string="$job_name1 " ;
elseif(empty($job_name1)  and !empty($city1 )  )
$string="$city1 " ;
else
$string="All job in seareh" ;

?>


    

    <div class="main-title" style="top: 150px;"
        
       ><?php echo $string ?></div>




<div class="latest-job">
<div class="container">
<?php

	  
         
         if(mysqli_num_rows($select_jobs) > 0){
            while($jobs1 = mysqli_fetch_assoc($select_jobs)){
      ?>



<!-- start boxes -->
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
        <div class="job-button">
            <a href="../jobDetails/jobdetails.php?view=<?php echo $jobs1['id']; ?>" class="button">Apply and Details</a>

	
    </div>
    </div>

	
	

<!-- end boxes -->


<?php
         }
      }else{
         echo '<p >no jobs added yet!</p>';
      }

      ?>

 </div>
	
	
</div>



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




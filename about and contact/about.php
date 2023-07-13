<?php
include '../config/config.php';
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
    header nav ul li a {
    display: block;
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
    padding: 31px 10px 26px;
    position: relative;
    z-index: 2;
}
@media(max-width:990px){
    header nav ul li a{
        font-size: 13px !important;
    }
}
a{
    text-decoration: none;
}
nav{
    margin-bottom: -14px;

}
</style>
</head>
<body style="background-color: #d4cece;" >





<!-- start header  -->
	
<header style="background: #00203f;
               height: 89px;
               padding-bottom: 98px;" >


        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a href="../home/index.php" class="active">Home</a></li>
                <li><a href="../all_job/all_jobs.php" >All Jobs</a></li>
                <li class="active"><a href="../about and contact/about.php" id="about">About</a></li>
                <li><a href="../about and contact/contact.php">contact</a></li>
                <li><a href="../faq/faq.php" >Faq</a></li>
                <li><div class="dropdown">
  <a style="background: transparent;
    position: relative;
    top: 32px;
    padding: 0px 6px 25px;
    " class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   Add Post?
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="../developer/catg-dev.php">DEVELOPMENT</a></li>
    <li><a class="dropdown-item" href="#">TEACHER</a></li>
    <li><a class="dropdown-item" href="#">DESIGNER</a></li>
    <li><a class="dropdown-item" href="../builder/builder.php">BUILDER</a></li>
  </ul>
</div></li>
			 <?php			
			 //اذا ما كان المتغير موجود اظهر الدخول
			if(!isset($_SESSION['user_id']))
			{
			?>	
			
              <li> <a href="../login/login.php" class="button">Log in</a></li>
			  
			 <?php			
			}
			?>	
			
			
			
            </ul>
			
			
			
			<?php
			//اذا ما كان المتغير موجود اظهر الدخول			
			if(!isset($_SESSION['user_id']))
			{
			?>	
			
			
            <div class="form">
                <a href="../all_job/all_jobs.php" class="fas fa-search" id="sea"></a>
            </div>
			
			
			<?php
			//اذا كان المتغير موجود اظهر الصورة 

			}
			else
			{
				
			?>		
			
            <div class="form">
                <a href="../all_job/all_jobs.php" class="fas fa-search" id="sea"></a>
            </div>
			<div class="form" style="  width: 40px;
                                       height: 30px;
                                       position: relative;
                                       margin-left: 54px;
                                       border:none;
                                       left: -49px;">
									   
									   
               
            <a href="../profile/profile.php" class="img">
			
			
			<?php
			include '../home/imgprofile.php';	 
			?>
			
			
			</a>
			<a href="../profile/profile.php" class="img">
			</a>
			
            <a href="../logout/logout.php" title="Log out" ><i class="fa-solid fa-right-to-bracket" 
			style="color: #1800f5;
			position: absolute;
			top: 50%;
			transform: translatey(-50%);
			right: -40px;
			font-size: 30px;"></i>
			</a>
			</div>
			
			<?php
			
			}
			
			?>
			
			
			
			
			
			
			
			
			
          </nav>
        </div>
    </header>
	
    <!-- end header  -->








    

    <div class="about" id="about" style="padding-top:128px">
        <div class="container">
            <h3 class="main-title">About Us</h3>
            <div class="about-content">
                <div class="image">
                    <img src="../img/about-us-concept-illustration_114360-639-removebg-preview.png" alt="">
                </div>
                <div class="text">
                    <p class="p1">Welcome to Jobware, your one-stop destination for finding your dream job. Our mission is to connect talented job seekers with reputable employers who are actively seeking to hire. Whether you're a recent graduate or a seasoned professional, we provide the tools and resources you need to search and apply for job opportunities that match your skills and experience.</p>
                  <hr>
                  <p class="p2">At Jobware, we understand that the job search process can be overwhelming and time-consuming. That's why we've designed our website to be user-friendly and intuitive, making it easy for you to search for job openings and apply for positions that interest you. Our team is committed to providing a seamless and efficient job search experience, so you can focus on what matters most - finding your next career opportunity.</p>
                    </div>
            </div>
        </div>
     </div>









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

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
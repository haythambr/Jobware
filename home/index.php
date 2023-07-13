<?php
    
	
	include '../config/config.php';

    if (isset($_POST['submit3'])) {

         
        $_SESSION['job_name_search'] = $_POST["job_name"];
        $_SESSION['city_search']  = $_POST["city"];
        
    }
  
    if(isset($_POST['submit3']))
{
   
    header('location:../home/index2.php');
}






















    if(isset($_POST['submit2']))
{

    $Full_name = $_POST["Full_name"];
    $Email_contact = $_POST["Email_contact"];
    $Phone_contact = mysqli_real_escape_string($conn,$_POST["Phone_contact"]);
    $Message_contact = $_POST["Message_contact"];
        
    $query7 = "SELECT * FROM contact WHERE  Full_name = '$Full_name' 
				   AND Email_contact = '$Email_contact' AND  Phone_contact  = $Phone_contact 
				   AND Message_contact   = '$Message_contact'  
				  ";



				   $check_message = mysqli_query($conn,$query7 ) or die('query failed');
	               if(mysqli_num_rows($check_message) > 0)
				   {
                    
					$message[] = "already submited the message";
		        }else
					{

     $query5="INSERT INTO contact (Full_name,Email_contact,Phone_contact,Message_contact)
     VALUES('$Full_name','$Email_contact',$Phone_contact,'$Message_contact')";
        $result=mysqli_query($conn,$query5) or die('query failed');
        if ($result)
        {
          $message[] = 'Message Submitted Successfully Thanks';}
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <!--دعم كل اللغات-->  <meta charset="UTF-8">
    <!--التوافق مع كل المتصفحات--> <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--لجعل الصفحة responev والشاشات--> <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	
	<title>Jobware</title>
     <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
  <link rel="stylesheet" href="../css/admin_style.css">
    <!--السلايدر الهوم (الفيديو والصور)--> <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--normalize css--><link rel="stylesheet" href="../css/all.min.css">
    <!--css الصفحات--><link rel="stylesheet" href="../css/jobware.css">
	
    <!--  خطوط غوغل Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
	<!--  خطوط غوغل Google Fonts  -->
 <style>
      @media (min-width:767px) {
        header nav .toggle-menu{
            display: none;
        }
    }
   
    header nav ul{
        display: flex;
    
    }
    @media (max-width:767px){
        header nav ul{
            display: none;
        }
        .message i:hover{
  transform: rotate(150deg);}
        }
    @media (min-width:767px){
      .dropdown10{
        display: none;
      }     
    } 
    .dropdown10 a:hover{
        color: #19c8fa!important;
    }
    @media(max-width:1000px)
    {
        .landing form{
        position: absolute;
    z-index: 1;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-37%);
    background-color: #ffffff2b;
    padding: 26px;
}
    }
    ::marker {
    display: none;
    color: transparent;
} @media(max-width:990px){
        ul li a{
            font-size: 13px !important;
        }
    }
 </style>
</head>
<body>



<!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" style="    background: antiquewhite;
">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
  ';
   }
}
?>

    <!-- start header  -->
    <header>
        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
          <div class="dropdown">
  <i class="fas fa-bars toggle-menu dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   </i>
 
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li class="active" ><a href="../home/index.php" style="color:black; padding:16px">Home</a></li>
                <li><a href="../all_job/all_jobs.php" style="color:black; padding:16px">All Jobs</a></li>
                <li><a href="#about" style="color:black; padding:16px">About</a></li>
                <li><a href="#contact" style="color:black; padding:16px">contact</a></li>
                <li><a href="../faq/faq.php" style="color:black; padding:16px">Faq</a></li>
               
  </ul>
  </div><li><div class="dropdown10">
  <a style="background: transparent;
    position: relative;
    top: -16px;
    color:white;
    padding: 0px 10px;
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

            <ul>
                <li class="active" ><a href="../home/index.php">Home</a></li>
                <li><a href="../all_job/all_jobs.php" >All Jobs</a></li>
                <li><a href="#about" >About</a></li>
                <li><a href="#contact" >contact</a></li>
                <li><a href="../faq/faq.php" >Faq</a></li>
                <li><div class="dropdown">
  <a style="background: transparent;
    position: relative;
    top: 40px;
    padding: 0px 6px 38px;
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
			if(!isset($_SESSION['user_id']))
			{
			?>	
			
                <li> <a href="../login/login.php" class="button">Log in</a></li>
             
			<?php			
			}
			?>	
			
			
			
			</ul>
			
			<?php			
			if(!isset($_SESSION['user_id']))
			{
			?>	
			
            <div class="form">
                <a href="../all_job/all_jobs.php" class="fas fa-search" id="sea"></a>
            </div>
			
			
			
			<?php

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
	
	
	

    <!-- start landing  -->
    <div class="landing">
    <div id="slide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#slide" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#slide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active video">
        <video autoplay muted loop  >
                <source src="../img/construction-site-42923.mp4" type="video/mp4">
            </video>
          </div>
          <div class="carousel-item">
            <img src="../img/wallpaperflare.com_wallpaper (16).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/wallpaperflare.com_wallpaper (17).jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
    
    
    
    
    
    
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2 style="text-align: center;color: #adefd1; ">
            Find Your Next Job
        </h2>

        <div class="job">
            <label for="job" style="color: #adefd1;">Job Title</label>
            <input type="text" value="" name="job_name" id="job" placeholder="Enter Job Name">
        </div>

        <div class="loaction">
            <label for="loaction" style="color: #adefd1;">location</label>
            <input type="text" value="" name="city" id="loaction" placeholder="Enter loaction">
        </div>

        <div class="submit" style="text-align: center;">
        <input type="submit" name="submit3" value="Search Now">
        </div>

    </form>




    </div>
    <!-- end landing  -->
    <!-- start why should  -->
    <div class="review">
        <div class="container">
            <div class="box">
              <div class="image">
                <img src="../img/landing-image.png" alt="">
              </div>
              <div class="reason">
               <h2>Why Should You Join JOBWARE ?</h2>
               <p>AT JOBWARE, we offer various types of work which give you of making good money. Please share your feedback with our website developers. Use the JOBWARE to get decent money from work in part-time or full-time.</p>
              </div>
           </div>
            </div>
            <div class="testimonials" id="testimonials">
                <div class="main-title">Testimonials</div>
                <div class="container">
                  <div class="box1">
                    <img src="../img/avatar-01.png" alt="">
                 
                  <h3>Mohamed farag</h3>
                  <div class="title">Job Title : <span style="font-weight: bold;">Full Stack Developer</span></div>
                  <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>  <p>Excellent platform with everything you need as a jobseeker.</p> 
                  </div>
             </div>
                  <div class="box1">
                    <img src="../img/avatar-02.png" alt="">
                 
                  <h3>mohamed Ibrahem</h3>
                  <div class="title">Job Title : <span style="font-weight: bold;">HR</span></div>
                  <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>      <p>Great website with lots of interesting vacancies. Applying for jobs has never been easier.</p>
                  </div> </div>
            
                  <div class="box1">
                    <img src="../img/avatar-03.png" alt="">
                  
                  <h3>ahmad jo</h3>
                  <div class="title">Jobs Title : <span style="font-weight: bold;">builder</span></div>
                  <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                         <p>A great platform that helps you find the most suitable job for you by offering several jobs</p>
                  </div>
            </div>
               </div>
              
        </div>
        </div>
    <!-- end why should  -->
   
   
   
   

   
   
    <!-- start job-categories -->
    
    <div class="job-categories">
        <div class="main-title">Job Categories</div>
        <div class="container">
        <div class="categories"><a href="../developer/catg-dev.php">
            <div class="card" >
                
                <i class="fa-solid fa-code"></i>
                <div class="title">
                    <p>development</p>
					
					
                    <p>
					
					
					
					<?php
					
					
					$query= "SELECT * FROM `jobs` WHERE  type_job= 'DEVELOPMENT' AND validity = 'Available' ORDER BY id DESC";
	
                    $rusult = mysqli_query($conn,$query);
					
					$rowcount=mysqli_num_rows($rusult);
					
					echo  $rowcount . "  Jobs";
					
					?>
					
					
					
					
					</p>
					
					
               </div>
              
         </div> </a>
            <div class="card">
                <i class="fa-solid fa-school"></i>
                    <div class="title">
                    <p>teacher</p>
                    <p>100 Jobs</p>
                </div>
            </div>
          <div class="card">
                <i class="fa-solid fa-pen"></i>
                    <div class="title">
                    <p>designer</p>
                    <p>50 Jobs</p>
               </div>  
            </div>
            <a href="../builder/builder.php"> <div class="card">
                <i class="fa-solid fa-igloo"></i>
                    <div class="title">
                    <p>builder</p>
                    <p><?php
					
					
					$query= "SELECT * FROM `jobs` WHERE  type_job= 'builder' AND validity = 'Available' ORDER BY id DESC";
	
                    $rusult = mysqli_query($conn,$query);
					
					$rowcount=mysqli_num_rows($rusult);
					
					echo  $rowcount . "  Jobs";
					
					?>
					</p>
                </div>
            </div></a>
        </div>
    </div></div>
    <!-- end job-categories -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- start latest-jobs  -->
    <div class="latest-job">
        <div class="main-title">latest job</div>
        
        
        
        
        <div class="container">
           
        

        <?php

	    $query2="   SELECT * FROM `jobs`WHERE validity = 'Available'
         ORDER BY id DESC LIMIT 6 ";








		  $select_jobs= mysqli_query($conn,$query2) or die('query failed');
	   
         
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
            ?>              <div class="info">
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
	  
	  //echo  $email1 ;
      ?>






        </div>
    </div>
    <!-- end latest-jobs  -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- start Awesome state  -->
    <div class="stats" id="stats">
        <div class="title">OUR STATISTICS</div>
        <div class="container">
            <div class="card1">
                <i class="fa-solid fa-user"></i>
                <span> <?php
					
					
					$query= "SELECT * FROM `users` ";
	
                    $rusult = mysqli_query($conn,$query);
					
					$rowcount=mysqli_num_rows($rusult);
					
					echo  $rowcount ;
					
					?></span>
                <p>Clients</p>
            </div>
            <div class="card1">
                <i class="fa-solid fa-code"></i>
                <span> <?php
					
					
					$query= "SELECT * FROM `jobs` ";
	
                    $rusult = mysqli_query($conn,$query);
					
					$rowcount=mysqli_num_rows($rusult);
					
					echo  $rowcount ;
					
					?></span>
                <p>JOBS</p>
            </div>
            <div class="card1">
                <i class="fa-sharp fa-solid fa-earth-americas"></i>
                <span>10</span>
                <p>Business partners</p>
            </div>
        </div>
    </div>
    <!-- end Awesome state  -->
 
 <!-- start pricing  -->
<!--    <div class="pricing" id="pricing">
        <h2 class="main-title">Pricing Plans</h2>
        <div class="container">
          <div class="box">
            <div class="title">Basic</div>
            <img decoding="async" src="img/hosting-basic.png" alt="" />
            <div class="price">
              <span class="amount">$10</span>
              <span class="time">Per Month</span>
            </div>
            <ul>
              <li>Free access to create an account and browse job listings.</li>
              <li>Limited access to apply for a job per month.</li>
              <li>10 Post per a mounth</li>
            
            </ul>
            <a href="#">Choose Plan</a>
          </div>
          <div class="box popular">
            <div class="label">Most Popular</div>
            <div class="title">Advanced</div>
            <img decoding="async" src="img/hosting-advanced.png" alt="" />
            <div class="price">
              <span class="amount">$20</span>
              <span class="time">Per Month</span>
            </div>
            <ul>
              <li>All features included in the Basic Tier.</li>
              <li>Unlimited job applications.</li>
              <li>40 Post per a mounth</li>
            
            </ul>
            <a href="#">Choose Plan</a>
          </div>
        </div>
      </div> -->
      <!-- End Pricing -->




    <!-- start about us -->
    <div class="about" id="about">
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
    <!-- end about us -->




    

    <!-- start contact  -->
    <div class="contact" id="contact">
            <div class="image">
                <div class="content">
                <h2>We Support you</h2>
                <p>If you have any questions or feedback about our website, we would love to hear from you. Our dedicated customer support team is available to assist you with any inquiries or concerns you may have. Contact us today and take the first step towards landing your dream job with Jobware.</p>
         <img src="../img/support-img-removebg-preview.png" alt="">
             </div>  </div>
            <div class="form">
                <div class="content">
                <h2>Contact Us</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                    <input  class="input" type="text" name="Full_name" placeholder="Your Name">

                    <input class="input" type="email" name="Email_contact" placeholder="Your Email">

                    <input class="input" type="tel" name="Phone_contact" placeholder="Your Phone">

                    <textarea  class="input" name="Message_contact" cols="30" rows="10" placeholder="Tell Us About Your Needs"></textarea>
                    <input type="submit" name="submit2" value="send">
               </form>
          </div>  </div>
        </div>
    <!-- end contact  -->







    <!-- start footer -->
    <div class="footer" id="footer">
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
          <div class="down">
            <a href="#footer">down</a>
         </div>
    <!-- end footer -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>// get all nav links
    const navLinks = document.querySelectorAll('nav ul li a');
    
    // loop through the nav links and add click event listeners
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        // remove active class from current active link
        const currentActiveLink = document.querySelector('nav ul li.active a');
        currentActiveLink.parentElement.classList.remove('active');
        
        // add active class to clicked link
        this.parentElement.classList.add('active');
      });
    });
    </script> 
</body>
</html>
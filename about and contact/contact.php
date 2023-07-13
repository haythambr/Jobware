<?php
include '../config/config.php';






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
    <link rel="stylesheet" href="../css/bootstrap.min.css">


     <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
  <link rel="stylesheet" href="../css/admin_style.css">
  <style>

@media (max-width:767px){
        header nav ul{
            display: none;
        }
        .message i:hover{
  transform: rotate(150deg);}
        header nav .toggle-menu:hover + ul{
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: rgb( 0 0 0 / 50%);
    
        }
        header nav .toggle-menu:hover + ul li a{
            padding: 15px;
        }
    } 

    header nav ul li a {
    display: block;
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
    padding: 40px 10px 26px;
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
    margin-bottom: -21px;

}
  </style>


</head>
<body style="background-color: #d4cece;" >





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
	
<header style="background: #00203f;
               height: 95px;
               padding-bottom: 97px;" >


        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a href="../home/index.php" class="active">Home</a></li>
                <li><a href="../all_job/all_jobs.php" >All Jobs</a></li>
                <li ><a href="../about and contact/about.php" id="about">About</a></li>
                <li class="active"><a href="#contact">contact</a></li>
                <li><a href="../faq/faq.php" >Faq</a></li>
                <li><div class="dropdown">
  <a style="background: transparent;
    position: relative;
    top: 32px;
    padding: 8px 6px 26px;
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









          <!-- start contact  -->

     <div class="contact" id="contact" style="padding-top:102px">
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
                    <input class="input" type="tel" name="Phone_contact"  placeholder="Your Phone">
                    <textarea  class="input" name="Message_contact" cols="30" rows="10" placeholder="Tell Us About Your Needs"></textarea>
                    
                    <input type="submit" name="submit2" value="send">
               </form>

          
            </div>  </div>
        </div>
        
        <!-- end contact  -->






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
<head>    <link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
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
.modal-content {
  background-color: initial; 
     border:initial;
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
    margin-bottom: -15px;

}
</style>
</head>
<header style="background: #00203f;
               height: 107px;
               padding-bottom: 97px;" >


        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a href="../home/index.php" class="active">Home</a></li>
                <li><a href="../all_job/all_jobs.php" >All Jobs</a></li>
                <li><a href="../about and contact/about.php" id="about">About</a></li>
                <li><a href="../about and contact/contact.php">contact</a></li>
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
	

  <script src="../js/bootstrap.bundle.min.js"></script>

	
	
	
	
	 
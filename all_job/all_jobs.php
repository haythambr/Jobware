<?php
include '../config/config.php';
include '../all_job/all_jobs2.php';
?>

<?php 
if (isset($_POST['reset'])){
    
    $type_job1='select catgories';
    $job_name="select type job";
    $salary1='select salary';
    $time_type1='select time job';
    $city1='select city';
    $validity1='select validity';
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<style>
    .fluter
    {
        display: flex;
    flex-direction: row;
    flex-wrap: wrap; 
    justify-content: center;
   }
    select{
        width: 251px;
    margin: 12px 20px;
    padding: 12px 15px;
    color: #e50000c4;
    background: #dfddd9;
    outline: none;
    }
    input[type="submit"] {
        text-align: center;
    background-color: var(--main-color);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px auto;
    display: block;
    width: 160px;
    box-shadow: 5px 5px 5px rebeccapurple;
    text-transform: capitalize;}


@media (max-width:767px) {
    select{
        margin: 12px 2px;

    }
    
}
label{
    position: absolute;
    font-family: Poppins-Regular;
    font-size: 18px;
    color: #666666;
    top: -13px;
    left: 19px;
}
.dropdown{
    margin: 8px 0;
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
<script>
         function updateJobsDatalist(selectedJob) {
          const jobsDev = document.getElementById('jobsDev');
          const jobsBul = document.getElementById('jobsBul');
          const jobsjobs = document.getElementById('jobsjobs');
      
          if (selectedJob === 'DEVELOPMENT') {
            jobsDev.style.display = 'block';
            <?php 
            $job_name2="";
            $job_name3="";

            ?>
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'builder') {
            jobsDev.style.display = 'none';
            <?php 
            $job_name1="";
            $job_name3="";

            ?>
            jobsBul.style.display = 'block';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'designer') {
            jobsDev.style.display = 'none';
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'teacher') {
            jobsDev.style.display = 'none';
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none'; 
          } else{
    jobsDev.style.display = 'none';
    jobsBul.style.display = 'none';
    jobsjobs.style.display = 'block';
  }
}
</script>
<body style="background-color: #d4cece;" onload="updateJobsDatalist(selectedJob)" >


  <!-- start header  -->
	
	<header style="background: #00203f;
               height: 97px;
               padding-bottom: 92px;" >


        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a href="../home/index.php" class="active">Home</a></li>
                <li class="active"><a href="../all_job/all_jobs.php" >All Jobs</a></li>
                <li><a href="../about and contact/about.php" id="about">About</a></li>
                <li><a href="../about and contact/contact.php">contact</a></li>
                <li><a href="../faq/faq.php" >Faq</a></li>
                <li><div class="dropdown">
  <a style="background: transparent;
    position: relative;
    top: 32px;
    padding: 0px 6px 26px;
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

















<!-- job filter start -->
<section class="job-filter" style="    margin: 0px 22px;">
    <h1 class="main-title">Filter jobs</h1>



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="
    max-width: 1023px;
    background-color: transparent; ">
	


    <div class="fluter">
            <div class="dropdown" style="position:relative;">
                <label for="Type-job:" style="position:absolute;">Select Type-job:</label>
			    
                <select name="type_job" onfocus="updateJobsDatalist(this.value)" onchange="updateJobsDatalist(this.value)" placeholder="Select Job Categories" autofocus>
				     <option value=""  selected="">select type_job</option>
					 <option value="DEVELOPMENT"  <?php if(isset($type_job1) && $type_job1 == 'DEVELOPMENT') echo ' selected'; ?> > DEVELOPMENT   </option>
                     <option value="teacher"      <?php if(isset($type_job1) && $type_job1 == 'teacher') echo ' selected';              ?> > TEACHER       </option>
                     <option value="designer"     <?php if(isset($type_job1) && $type_job1 == 'designer') echo ' selected';             ?> > DESIGNER      </option>
                     <option value="builder"      <?php if(isset($type_job1) && $type_job1 == 'builder') echo ' selected';              ?> > BUILDER       </option>
			    </select>
            </div>

                    
                    
            <div class="dropdown" style="position:relative;" id="jobsDev">
                <label for="Type-job:" style="position:absolute;">Select job-name:</label>
    
                <select name="job_name" >
				     <option value=""  selected="">select job-name</option>
					 <option value="programs Developer"              <?php if(isset($job_name1) && $job_name1 == 'programs Developer') echo ' selected';              ?> > programs Developer               </option>
                     <option value="graphic designer"                <?php if(isset($job_name1) && $job_name1 == 'graphic designer') echo ' selected';                ?> > graphic designer                 </option>
                     <option value="network manager"                 <?php if(isset($job_name1) && $job_name1 == 'network manager') echo ' selected';                 ?> > network manager                   </option>
                     <option value="information security manager"    <?php if(isset($job_name1) && $job_name1 == 'information security manager') echo ' selected';    ?> > information security manager     </option>
                     <option value="systems analyst"                 <?php if(isset($job_name1) && $job_name1 == 'systems analyst') echo ' selected';                 ?> > systems analyst                  </option>
                     <option value="it projects manager"             <?php if(isset($job_name1) && $job_name1 == 'it projects manager') echo ' selected';             ?> > it projects manager              </option>
                     <option value="computer maintenance technician" <?php if(isset($job_name1) && $job_name1 == 'computer maintenance technician') echo ' selected'; ?> > computer maintenance technician  </option>
                     <option value="network engineer"                <?php if(isset($job_name1) && $job_name1 == 'network engineer') echo ' selected';                ?> > network engineer                 </option>
                     <option value="information security engineer"   <?php if(isset($job_name1) && $job_name1 == 'information security engineer') echo ' selected';   ?> > information security engineer    </option>
                     <option value="database manager"                <?php if(isset($job_name1) && $job_name1 == 'database manager') echo ' selected';                ?> > database manager                 </option>
			    </select>
            </div>



        
            <div class="dropdown" style="position:relative;" id="jobsBul">
                <label for="Type-job:" style="position:absolute;">Select job-name:</label>
    
                <select name="job_name1" >
				     <option value=""  selected="">select job-name</option>
					 <option value="Builder man"          <?php if(isset($job_name2) && $job_name2 == 'Builder man') echo ' selected';         ?> > Builder man      </option>
                     <option value="Blacksmith man"       <?php if(isset($job_name2) && $job_name2 == 'Blacksmith man') echo ' selected';      ?> > Blacksmith man   </option>
                     <option value="plumber man"          <?php if(isset($job_name2) && $job_name2 == 'plumber man') echo ' selected';         ?> > plumber man      </option>
			    </select>
            </div>







            
            <div class="dropdown" style="position:relative;" id="jobsjobs">
                <label for="Type-job:" style="position:absolute;">Select job-name:</label>
    
                <select name="job_name2" >
				     <option value=""  selected="">select job-name</option>
					 <option value="programs Developer"              <?php if(isset($job_name3) && $job_name3 == 'programs Developer') echo ' selected';              ?> > programs Developer               </option>
                     <option value="graphic designer"                <?php if(isset($job_name3) && $job_name3 == 'graphic designer') echo ' selected';                ?> > graphic designer                 </option>
                     <option value="network manager"                 <?php if(isset($job_name3) && $job_name3 == 'network manager') echo ' selected';                 ?> > network manage                   </option>
                     <option value="information security manager"    <?php if(isset($job_name3) && $job_name3 == 'information security manager') echo ' selected';    ?> > information security manager     </option>
                     <option value="systems analyst"                 <?php if(isset($job_name3) && $job_name3 == 'systems analyst') echo ' selected';                 ?> > systems analyst                  </option>
                     <option value="it projects manager"             <?php if(isset($job_name3) && $job_name3 == 'it projects manager') echo ' selected';             ?> > it projects manager              </option>
                     <option value="computer maintenance technician" <?php if(isset($job_name3) && $job_name3 == 'computer maintenance technician') echo ' selected'; ?> > computer maintenance technician  </option>
                     <option value="network engineer"                <?php if(isset($job_name3) && $job_name3 == 'network engineer') echo ' selected';                ?> > network engineer                 </option>
                     <option value="information security engineer"   <?php if(isset($job_name3) && $job_name3 == 'information security engineer') echo ' selected';   ?> > information security engineer    </option>
                     <option value="database manager"                <?php if(isset($job_name3) && $job_name3 == 'database manager') echo ' selected';                ?> > database manager                 </option>
                     <option value="Builder man"                     <?php if(isset($job_name3) && $job_name3 == 'Builder man') echo ' selected';                     ?> > Builder man                      </option>
                     <option value="Blacksmith man"                  <?php if(isset($job_name3) && $job_name3 == 'Blacksmith man') echo ' selected';                  ?> > Blacksmith man                   </option>
                     <option value="plumber man"                     <?php if(isset($job_name3) && $job_name3 == 'plumber man') echo ' selected';                     ?> > plumber man                      </option>
			    </select>
			    
            </div>












            <div class="dropdown" style="position:relative;">
                <label for="Type-job:" style="position:absolute;">Select salary:</label>
   
                <select name="salary" >
				     <option value=""  selected="">select salary</option>
					 <option value="and salary BETWEEN 0 AND 500"         <?php if(isset($salary1) && $salary1 == 'and salary BETWEEN 0 AND 500') echo ' selected';            ?> > 0 - 500             </option>
                     <option value="and salary BETWEEN 500 AND 1000"      <?php if(isset($salary1) && $salary1 == 'and salary BETWEEN 500 AND 1000') echo ' selected';         ?> > 500 - 1000          </option>
                     <option value="and salary BETWEEN 1000 AND 1500"     <?php if(isset($salary1) && $salary1 == 'and salary BETWEEN 1000 AND 1500') echo ' selected';        ?> > 1000 - 1500         </option>
                     <option value="and salary BETWEEN 1500 AND 2000"     <?php if(isset($salary1) && $salary1 == 'and salary BETWEEN 1500 AND 2000') echo ' selected';        ?> > 1500 - 2000         </option>
                     <option value="and salary >= 2000"                   <?php if(isset($salary1) && $salary1 == 'and salary >= 2000') echo ' selected';                      ?> > greater than 2000   </option>
                     
			    </select>
            </div>

		
			
            <div class="dropdown" style="position:relative;">
                <label for="Type-job:" style="position:absolute;">Select time-type:</label>
			  
                <select name="time_type" >
				     <option value=""  selected="">select time-type</option>
					 <option value="Part-Time"  <?php if(isset($time_type1) && $time_type1 == 'Part-Time') echo ' selected'; ?> >   Part-Time     </option>
					 <option value="Full-Time"  <?php if(isset($time_type1) && $time_type1 == 'Full-Time') echo ' selected'; ?> >   Full-Time     </option>
					 
			    </select>
            </div>
			
			
			
			
            <div class="dropdown" style="position:relative;">
                <label for="Type-job:" style="position:absolute;">Select validity:</label>

                <select name="validity">
				     <option value="" selected="">select validity</option>
					 <option value="Available" <?php if(isset($validity1) && $validity1 == 'Available') echo ' selected'; ?>  >   Available    </option>
					 <option value="Expired"   <?php if(isset($validity1) && $validity1 == 'Expired') echo ' selected';   ?>  >   Expired      </option>
					 
			    </select>
            </div>



            <div class="dropdown" style="position:relative;">
                <label for="Type-job:" style="position:absolute;">Select city:</label>

                <select name="city" >
				    <option value=""  selected="">select city</option>
					<option value="Amman"     <?php if(isset($city1) && $city1 == 'Amman') echo ' selected';     ?>  > Amman     </option>
                    <option value="Zarqa"     <?php if(isset($city1) && $city1 == 'Zarqa') echo ' selected';     ?>  > Zarqa     </option>
                    <option value="Irbid"     <?php if(isset($city1) && $city1 == 'Irbid') echo ' selected';     ?>  > Irbid     </option>
                    <option value="Tafila"    <?php if(isset($city1) && $city1 == 'Tafila') echo ' selected';    ?>  > Tafila    </option>
                    <option value="Jerash"    <?php if(isset($city1) && $city1 == 'Jerash') echo ' selected';    ?>  > Jerash    </option>
                    <option value="Al-Mafraq" <?php if(isset($city1) && $city1 == 'Al-Mafraq') echo ' selected'; ?>  > Al-Mafraq </option>
                    <option value="Al-Salt"   <?php if(isset($city1) && $city1 == 'Al-Salt') echo ' selected';   ?>  > Al-Salt   </option>
                    <option value="Aqaba"     <?php if(isset($city1) && $city1 == 'Aqaba') echo ' selected';     ?>  > Aqaba     </option>
                    <option value="Madaba"    <?php if(isset($city1) && $city1 == 'Madaba') echo ' selected';    ?>  > Madaba    </option>
					 
			    </select>
            </div>
				
				
				
            
	</div>
			<input type="submit" name="submit" value="filter" >

			 <input type="submit" name="reset" value="reset" style="text-align: center;
    background-color: var(--main-color);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px auto;
    display: block;
    width: 160px;
    box-shadow: 5px 5px 5px rebeccapurple;
    text-transform: capitalize;">
        
    
    </form>
</section> 
<!-- job filter end -->










    <!-- start latest-jobs  -->
  
    <div class="latest-job" style="padding-top: 0;">
	
	
	
        <div class="main-title" style="margin-top:70px;
        margin-bottom: 29px;
        ">All job</div>
		
		
		
		
		
		
		
		
		
		
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
    <!-- all jobs end  -->








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
    
    function updateJobsDatalist(selectedJob) {
          const jobsDev = document.getElementById('jobsDev');
          const jobsBul = document.getElementById('jobsBul');
          const jobsjobs = document.getElementById('jobsjobs');
      
          if (selectedJob === 'DEVELOPMENT') {
            jobsDev.style.display = 'block';
            <?php 
            $job_name2="";
            $job_name3="";
            ?>
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'builder') {
            jobsDev.style.display = 'none';
              <?php 
            $job_name1="";
            $job_name3="";
            ?>
            jobsBul.style.display = 'block';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'designer') {
            jobsDev.style.display = 'none';
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none';
          } else if (selectedJob === 'teacher') {
            jobsDev.style.display = 'none';
            jobsBul.style.display = 'none';
            jobsjobs.style.display= 'none'; 
          } else{
    jobsDev.style.display = 'none';
    jobsBul.style.display = 'none';
    jobsjobs.style.display = 'block';
  }
}
     
    </script> 
    <script src="../js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
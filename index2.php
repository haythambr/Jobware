<?php 
include './register/register2.php';
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobware</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/boundi.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- start header  -->
    <header>
        <div class="container" id="header">
            
            <i class="fa-solid fa-magnifying-glass-dollar">JOBWARE</i> 
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a href="#header" class="active">Home</a></li>
                <li><a href="all_jobs.php" >All Jobs</a></li>
                <li><a href="#portfolio" >Portfolio</a></li>
                <li><a href="#about" >About</a></li>
                <li><a href="#pricing" >Pricing</a></li>
            </ul>
            <div class="form" style="          width: 40px;
    height: 30px;
    position: relative;
    margin-left: 54px;
    border-left: 1px solid white;
    left: -44px;">
               
            <a href="profile.php" class="img">
<?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
<?php
         if($fetch['image'] == ''){
            echo '<img src="./img/default-avatar.png" style="
            border-radius: 100%;
    height: 6.5vh;
    margin-bottom: -6px;
    box-shadow: 1px 1px 8px black;
    margin: -10px 5px;
    width: 100%;">';
         }else{
            echo '<img src="./upload_img/'.$fetch['image'].'" style=" 
            border-radius: 100%;
            height: 6.5vh;
            margin-bottom: -6px;
            box-shadow: 1px 1px 8px black;
            margin: -10px 5px;
            width: 100%;">';
         }
      ?>
      </a>
           <a href="profile.php" class="img">
     </a>
     <a href="login/login.php" title="Log out" ><i class="fa-solid fa-right-to-bracket" style="color: #1800f5;
    position: absolute;
    top: 50%;
    transform: translatey(-50%);
    right: -40px;
    font-size: 30px;"></i>
</a>
       </div>
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
                <source src="img/construction-site-42923.mp4" type="video/mp4">
            </video>
          </div>
          <div class="carousel-item">
            <img src="img/wallpaperflare.com_wallpaper (16).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/wallpaperflare.com_wallpaper (17).jpg" class="d-block w-100" alt="...">
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
    <form action="">
        <h2 style="text-align: center;color: #adefd1; ">
        Find Your Next Job
        </h2>
        <div class="job">
        <label for="job" style="color: #adefd1;">Job Title <span style="color: red;">*</span></label>
        <input type="text" name="" id="job" placeholder="Enter Job Name">
</div>
<div class="loaction">
    <label for="loaction" style="color: #adefd1;">location</label>
    <input type="text" name="" id="loaction" placeholder="Enter loaction">
</div>
<div class="submit" style="text-align: center;"><input type="submit" value="Search Now"></div>

    </form>
    </div>
    <!-- end landing  -->
    <!-- start why should  -->
    <div class="review">
        <div class="container">
            <div class="box">
              <div class="image">
                <img src="img/landing-image.png" alt="">
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
                    <img src="img/avatar-01.png" alt="">
                 
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
                    <img src="img/avatar-02.png" alt="">
                 
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
                    <img src="img/avatar-03.png" alt="">
                  
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
        <div class="categories">
            <div class="card" >
                
                <i class="fa-solid fa-code"></i>
                <div class="title">
                    <p>development</p>
                    <p>100 Jobs</p>
               </div>
               <a href="catg-dev.html">click me</a>
         </div>
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
            <div class="card">
                <i class="fa-solid fa-igloo"></i>
                    <div class="title">
                    <p>builder</p>
                    <p>150 Jobs</p>
                </div>
            </div>
        </div>
    </div></div>
    <!-- end job-categories -->
    <!-- start latest-jobs  -->
    <div class="latest-job">
        <div class="main-title">latest job</div>
        <div class="container">
            <div class="box">
                <div class="card1">
                <div class="company"><img src="img/html-5.png" alt="">
                  <div class="info">
                <h3>it info.co</h3>
                <span>2 days ago</span>
               </div>
              </div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i>
            <span>Jordan,Zarqa</span>
            </p>
            <div class="tags">
                <p>
                    <i class="fa-solid fa-coins"></i>
                    <span>2k-5k</span>
                </p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>full-time</span></p>
            </div>
            <div class="job-button">
                <a href="View_job.html" class="button">View Details</a>
            </div>
        </div>
            <div class="box">
                <div class="card1">
                <div class="company"><img src="img/html-5.png" alt="">
                <div class="info">
                <h3>it info.co</h3>
                <span>2 days ago</span>
                </div></div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i>
            <span>Jordan,Zarqa</span>
            </p>
            <div class="tags">
                <p>
                    <i class="fa-solid fa-coins"></i>
                    <span>2k-5k</span>
                </p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>full-time</span></p>
            </div>
            <div class="job-button">
                <a href="View_job.html" class="button">View Details</a>
            </div>
        </div>
            <div class="box">
                <div class="card1">
                <div class="company"><img src="img/html-5.png" alt="">
               <div class="info">
                <h3>it info.co</h3>
                <span>2 days ago</span>
                </div></div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i>
            <span>Jordan,Zarqa</span>
            </p>
            <div class="tags">
                <p>
                    <i class="fa-solid fa-coins"></i>
                    <span>2k-5k</span>
                </p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>full-time</span></p>
            </div>
            <div class="job-button">
                <a href="View_job.html" class="button">View Details</a>
            </div>
        </div>
            <div class="box">
                <div class="card1">
                <div class="company"><img src="img/html-5.png" alt="">
               <div class="info">
                <h3>it info.co</h3>
                <span>2 days ago</span>
              </div></div>
            </div>
            <h3 class="job-title">Senior Web Developer</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i>
            <span>Jordan,Zarqa</span>
            </p>
            <div class="tags">
                <p>
                    <i class="fa-solid fa-coins"></i>
                    <span>2k-5k</span>
                </p>
                <p><i class="fas fa-briefcase"></i><span>Part-time</span></p>
                <p><i class="fas fa-clock"></i><span>full-time</span></p>
            </div>
            <div class="job-button">
                <a href="View_job.html" class="button">View Details</a>
            </div>
        </div>
        </div>
    </div>
    <!-- end latest-jobs  -->
    <!-- start Awesome state  -->
    <div class="stats" id="stats">
        <div class="title">OUT STATISTICS</div>
        <div class="container">
            <div class="card1">
                <i class="fa-solid fa-user"></i>
                <span>150</span>
                <p>Clients</p>
            </div>
            <div class="card1">
                <i class="fa-solid fa-code"></i>
                <span>100</span>
                <p>JOBS</p>
            </div>
            <div class="card1">
                <i class="fa-sharp fa-solid fa-earth-americas"></i>
                <span>10</span>
                <p>Business partners</p>
            </div>
            <div class="card1">
                <i class="fa-solid fa-money-bill"></i>
                <span>500</span>
                <p>Money</p>
            </div>
        </div>
    </div>
    <!-- end Awesome state  -->
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js.map"></script>
</body>
</html>
<?php
 include '../updatejob/updatejob2.php';
         

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
  
  
  <!-- custom admin css file link  -->
  <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
   <link rel="stylesheet" href="../css/admin_style.css">
  
  <style>
    form{
      width: 500px !important;
    background: #fff !important;
    border-radius: 10px !important;
    padding: 48px 55px 45px 55px !important;
    border-radius: 47px !important;
    position: relative !important;
    top: 95px !important;
    z-index: 33 !important;
    /* height: 970px; */
    margin-bottom: 150px !important;

    }
section{
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: #a64bf4;
    background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
    background: linear-gradient(45deg, #00dbde, #fc00ff);
}
label{
    font-family: Poppins-Regular;
    font-size: 18px;
    color: #666666;
    line-height: 1.5;
    padding-left: 5px;
}
.inputbox{
    margin-bottom: 29px;}
input{

    display: block;
    width: 100%;
    background: transparent;
    font-family: Poppins-Medium;
    font-size: 18px;
    color: #333333;
    line-height: 1.2;
    padding: 4px 5px;
    border: none;
    border-bottom: 2px solid blue;
    outline: none;
    background: #fff7f7;

}
     textarea{
        min-height: 110px;
    padding-top: 9px;
    padding-bottom: 13px;
    display: block;
    width: 100%;
    background: transparent;
    font-family: Poppins-Medium;
    font-size: 18px;
    color: #333333;
    line-height: 1.2;
    padding: 0 5px;
     }
     .but {
  background-color: #a64bf4;
  border-radius: 100px;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
     .but-go {
  background-color: red;
  border-radius: 100px;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.but:hover {
  box-shadow:  linear-gradient(45deg, #00dbde, #fc00ff);;
  transform: scale(1.05) rotate(-1deg);
}
     </style>
	 
	 
	 
	 
	 
	 
</head>
<body style="background-color: #d4cece;" >


<!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>


    <!-- start header  -->
    <?php include '../header/header.php'; ?>
	
    <!-- end header  -->
	
	
	
	
	
	
	
  <section>
  
  
  <?php
  
   if(isset($_GET['update']))
	  {
   $_SESSION['update']=$_GET['update'];
	  }
   $update_id = $_SESSION['update'];
   $select_job = mysqli_query($conn, "SELECT * FROM `jobs` WHERE id = '$update_id'") or die('query failed');
   if(mysqli_num_rows($select_job) > 0){
      while($jobs1 = mysqli_fetch_assoc($select_job)){
  ?>
  
  



    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   method="post"  enctype="multipart/form-data">
	
	
	
        <h3 style="position: relative;
                   top: -15px;
                   font-size: 21px;"><?php echo $_SESSION['email'] ; ?></h3>
				   
				   
				   
				   
				   
        <div class="inputbox">
          <label for="jobs">Choose Job Categories:</label>
          <input list="jobs" name="type_job" onfocus="updateJobsDatalist(this.value)" placeholder="Select Job Categories" onchange="updateJobsDatalist(this.value)" placeholder="Select Job Categories" autofocus  value="<?php echo $jobs1['type_job']; ?>" required>
          <datalist id="jobs">
            <option value="DEVELOPMENT"></option>
            <option value="teacher"></option>
            <option value="designer"></option>
            <option value="builder"></option>
          </datalist>
        </div>
      
	  
	  
	  
        <div class="inputbox" id="jobsDev" style="display: none">
          <label for="jobsDevSelect">Choose Job name:</label>
          <input list="jobsDevSelect" name="job_name" placeholder="Select Job Name" value="<?php echo $jobs1['job_name']; ?>" >
          <datalist id="jobsDevSelect">
            <option value="programs Developer"></option>
            <option value="graphic designer"></option>
            <option value="network manager"></option>
            <option value="information security manager"></option>
            <option value="systems analyst"></option>
            <option value="it projects manager"></option>
            <option value="computer maintenance technician"></option>
            <option value="network engineer"></option>
            <option value="information security engineer"></option>
            <option value="database manager"></option>
          </datalist>
        </div>
      
	  

        <div class="inputbox" id="jobsBul" style="display: none">
          <label for="jobsBulSelect">Choose Job name:</label>
          <input list="jobsBulSelect" name="job_name1" placeholder="Select Job Name" value="<?php echo $jobs1['job_name']; ?>">
          <datalist id="jobsBulSelect">
            <option value="Buldier man"></option>
            <option value="Blacksmith man"></option>
            <option value="plumber man"></option>
          </datalist>
        </div>
		
		
		
		
      
        <div class="inputbox">
          <label for="city">Choose your city:</label>
          <input list="city" name="city" placeholder="Select City" value="<?php echo $jobs1['city']; ?>" required>
          <datalist id="city">
            <option value="Amman"></option>
            <option value="Zarqa"></option>
            <option value="Irbid"></option>
            <option value="Tafila"></option>
            <option value="Jerash"></option>
            <option value="Al-Mafraq"></option>
            <option value="Al-Salt"></option>
            <option value="Aqaba"></option>
            <option value="Madaba"></option>
          </datalist>
        </div>
      
	  
	  
        <div class="inputbox">
          <label for="Avalibility">Choose Avalibility:</label>
          <input list="Avalibility" name="validity" placeholder="Select Avalibility" value="<?php echo $jobs1['validity']; ?>" required>
          <datalist id="Avalibility">
            <option value="Available"></option>
            <option value="Expired"></option>
          </datalist>
        </div>
		
		
		
		
        <div class="inputbox">
          <label for="jobtime">Choose time job:</label>
          <input list="jobtime" name="time_type" placeholder="Select Job Time"  value="<?php echo $jobs1['time_type']; ?>" required>
          <datalist id="jobtime">
            <option value="Full Time"></option>
            <option value="Part Time"></option>
          </datalist>
        </div>
		
		
		
		
		
		
        <div class="inputbox">
          <label for="salary">Enter Salary:</label>
          <input list="Salary" name="salary" placeholder="Enter expected Salary" value="<?php echo $jobs1['salary']; ?>" required>
          <datalist id="Salary">
            <input type="number" name="" id="">
          </datalist>
        </div>
		
		
		
       <div class="inputbox">
        <label for="tel">Your Phone</label>
       <input type="tel" name="phone" id="tel" class="tel" placeholder="Enter Your Phone"   value="<?php echo $jobs1['phone']; ?>">
       </div> 
	   
	   
	   
       <div class="inputbox">  <label for="message">message</label>
       <textarea name="job_info" class="message" id="" cols="20" rows="10" placeholder="Your Message Here..." ><?php echo $jobs1['job_info']; ?></textarea>
	   </div>
     
	 
	  <input type="hidden" name="update_id"  value="<?php echo $jobs1['id']; ?>" >
     
	 
	 
      <div class="button">
	  
        <button type="submit" name="update_jobs" class="but">Update Job</button>
        <button class="but-go" ><a href="../your_job/dev.php" style="color: white;">Go back</a></button>
     

	 </div>
	  
	  
	  
	  
    </form>
	
	
	<?php
        }
         }else{
           echo '<p class="empty">no update jobs select</p>';
              }
    ?>
	
	
	
	</section>
	
	
	
	
	
	
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
         
    
           <script>
        function updateJobsDatalist(selectedJob) {
          const jobsDev = document.getElementById('jobsDev');
          const jobsBul = document.getElementById('jobsBul');
      
          if (selectedJob === 'DEVELOPMENT') {
            jobsDev.style.display = 'block';
            jobsBul.style.display = 'none';
          } else if (selectedJob === 'builder') {
            jobsDev.style.display = 'none';
            jobsBul.style.display = 'block';
          } else {
    jobsDev.style.display = 'none';
    jobsBul.style.display = 'none';
  }
}
</script>
    
</body>
</html>
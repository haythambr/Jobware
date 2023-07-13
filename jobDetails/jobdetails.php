<?php


   include '../config/config.php';

   if (isset($_POST['submit'])) 
   {

    $user_id1 = $_SESSION['user_id'];
    $job_id1=$_POST['job_id'];
    $Worker_experiences=$_POST['Worker_exper'];
    $Submited_in = date('d-M-Y');


    $query2="SELECT * FROM jobs_applied WHERE id_user = $user_id1 AND id_jobs = $job_id1 ";

		$check_jobs = mysqli_query($conn,$query2 ) or die('query failed');
	  if(mysqli_num_rows($check_jobs) > 0)
		{
                    
			$message[] = "already added to JOBS";
		}else
			{

        $query=" INSERT INTO jobs_applied (id_user,id_jobs,Submited_in,Worker_experiences)VALUES($user_id1,$job_id1,'$Submited_in','$Worker_experiences')";
        $result=mysqli_query($conn,$query) or die('query failed');
        if ($result)
        {
          $message[] = 'Job Submitted Successfully See Jobs applied section';
        }
      
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jobware.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  
  
  <!-- custom admin css file link  -->
  <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
   <!--<link rel="stylesheet" href="../css/message_style.css">-->

   <!-- custom admin css file link  -->
  <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
  <link rel="stylesheet" href="../css/admin_style.css">
  
  <style>
    form{
        text-align: center;
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
.sub:hover{
  color: white;
}
.but:hover {
  background: green;
    transform: scale(1.05) rotate(-1deg);
    color: white;
}
h3{
    font-size: 21px;
    padding: 20px;
    border-bottom: 3px solid pink;
}
   
        /* Set a style for all buttons */
      
       
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
         z-index: 100; /* Sit on top */
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
         overflow: hidden;
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
.message i:hover{
  transform: rotate(150deg);}
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
     </style>
	 
	 
	 
	 
	 
	 
</head>
<body style="background-color: #d4cece;" >


<!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" style="    background-color: antiquewhite;
      ">
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
  
   if(isset($_GET['view']))
	  {
   $_SESSION['view']=$_GET['view'];
	  }
	  
	  
   $view_id = $_SESSION['view'];
   $select_job = mysqli_query($conn, "SELECT * FROM `jobs` WHERE id = '$view_id'") or die('query failed');
   if(mysqli_num_rows($select_job) > 0){
      while($jobs1 = mysqli_fetch_assoc($select_job)){
  ?>
  





  
    <form action = ""   method=""  enctype="multipart/form-data">
	
	
	
      <label for="">email:</label><h3 style="position: relative;
                   top: -15px;
                   font-size: 21px;"><?php echo $jobs1['email']; ?></h3>
				     <label for="">Job Name:</label> <h3 for="jobs" style=" border-bottom: 3px solid pink;"><?php echo $jobs1['job_name']; ?></h3>
             <label for="">City:</label>       <h3 for="jobs" style=" border-bottom: 3px solid pink;"><?php echo $jobs1['city']; ?></h3>
             <label for="">Validity:</label>  <h3 for="jobs" style=" border-bottom: 2px solid pink;"><?php echo $jobs1['validity']; ?></h3>
             <label for="">Time Type:</label>   <h3 for="jobs" style=" border-bottom: 2px solid pink;"><?php echo $jobs1['time_type']; ?></h3>
             <label for="">Salary:</label>  <h3 for="jobs" style=" border-bottom: 1px solid pink;"><?php echo $jobs1['salary']; ?></h3>
             <label for="">Phone:</label>  <h3 for="jobs" style=" border-bottom: 1px solid pink;" ><?php echo $jobs1['phone']; ?></h3>
       
            <label for="">Required Experience:</label> <textarea name="job_info" style="position: initial; border:none;     outline: none;
" class="message" id="" cols="20" rows="10" placeholder="There are no comments or additional information " readonly ><?php echo $jobs1['job_info']; ?></textarea>
     
	 
	    <!--<input type="hidden" name="job_id"  value="<?php echo $view_id; ?>" >-->
      
     
	 
	 
      <div class="button" style="    margin-top: 35px;">


      <?php			
			if(isset($_SESSION['user_id']))
			{
			?>	
	  
         <a onclick="document.getElementById('id01').style.display='block'" class="but">submit</a> 


      <?php			
			 }
       else{
        
			?>	
       <button style="    padding: 10px 15px;
    background: #0e00ca;
    border-radius: 8px;"><a href="../login/login.php" style="font-size: 14px;
    color: white;">Click here to log in to apply for the job</a></button>
       <?php 
       }
       ?>

        <button class="but-go" ><a href="../developer/catg-dev.php" style="color: white;">Go back</a></button>
     

	 </div>
	  
	  
	  
	  
    </form>
	
	
	<?php
        }
         }else{
           echo '<p class="empty">no view jobs select</p>';
              }
    ?>
	
	
	</section>
	
	
	
	
	

<!-- strt button  -->
<div class="Add">
  
 

    <div id="id01" class="modal">
	
      
      <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="padding: 44px;
         width: 44% !important;
" >
	  
	  
      <h2 style="    text-align: center;
    top: -39px;
    position: relative;
    font-size: 27px;"> Add experiences</h2>
	  
	  
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
		
		
        <div class="add-post">
				
        <label for="textarea" style="    color: black;
">Enter Your experiences and notes : <span class="req1" style="color:red">*</span> </label>
            <div class="inputbox"> 
                <textarea required oninput="hideSpan()" name="Worker_exper" id="textarea" cols="3" rows="3" style="
    border-radius: 9px;
    outline: none;
    border: none;
    border-bottom: 1px solid #ccc;
    background-color: #d0cacbc7;
    caret-color: red;
    margin: 15px;
    margin-left: -8px;
"></textarea>
            </div>


            <input type="hidden" name="job_id"  value="<?php echo $view_id; ?>" >

       
		
		</div>
      <button type="submit" class="sub" name="submit" style="height: 54px;
    border-radius: 11px;
    text-transform: uppercase;
    border: none;

    font-size: 20px;" 
    >  submit  </button>
    </form>



    </div>




    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
		
 		

        </script>  
 
 
 </div>
 

<!-- end button  -->



















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
     function hideSpan() {
      var span = document.querySelector('.req1');
      span.style.display = 'none';
    }
  </script>
</body>
</html>
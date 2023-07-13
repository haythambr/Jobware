<?php


       include '../config/config.php';
       include "../builder/builder2.php";
	   
	   
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



    <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
  <link rel="stylesheet" href="../css/message.css">
 
  
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        

      
        
        /* Set a style for all buttons */
        button {
         
          border: none;
          cursor: pointer;
          width: 100%;
        }
        .message i:hover{
  transform: rotate(150deg);}
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
  position: relative !important;
    width: 700px ;
    min-height:350px !important;
    background: transparent !important;
    border: 2px solid rgba(255,255,255,0.5) !important;
    border-radius: 20px !important;
    backdrop-filter: blur(15px) !important;
    
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
		.message{
      background: antiquewhite;

    }
 .req{
  color: red ;
  font-weight: 900;
 }
        </style>

</head>
<body style="background-color: #d4cece;" >





<!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
<?php
 

if(isset($message1)){
   foreach($message1 as $message1){
      echo '
      <div class="message">
         <span>'.$message1.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>






   

    <!-- start header  -->
	
    <?php include '../header/header.php'; ?>
	
    <!-- end header  -->




  <div class="main-title" style="    top: 143px;

        ">builder</div>


<div class="latest-job">
<div class="container">


<?php

	    $query2="   SELECT * FROM `jobs`  WHERE type_job = 'builder' AND validity = 'Available' ORDER BY id DESC";
		  $select_jobs= mysqli_query($conn,$query2) or die('query failed');
	   
         
         if(mysqli_num_rows($select_jobs) > 0){
            while($jobs1 = mysqli_fetch_assoc($select_jobs)){
      ?>

<!-- start boxes -->
<div class="box">
            <div class="card1">
            <div class="company">
           <img src="../img/th-removebg-preview (1).png" alt=""></div> 
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
	  
	  //echo  $email1 ;
      ?>

 </div>
	
	
</div>



 <?php		

        
		 //اذا كان المتغير موجود اظهر زر اضافة الوظائف
			if(isset($_SESSION['user_id']))
			{ 
			?>	

<!-- strt button  -->
<div class="Add">
   <button onclick="document.getElementById('id01').style.display='block'" > <i class="fa-solid fa-plus" style=" color:#FFBABA; font-size: 40px;
     background-color: var(--main-color);
        text-align: center;
        text-decoration: none;
        position: fixed;
        right: 0;
        padding: 2px;
        margin: 5px;
        z-index: 2;
        bottom: 1px;
    ">
 </i>   </button>
 
 <?php

// include "../developer/developer2.php";

?>
 <!-- php-->


    <div id="id01" class="modal">
	
      
      <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="padding: 44px;
      width: 80%;" >
	  
	  
      <h2 style="text-align: center;"> Add Post</h2>
	  
	  
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
		
		
        <div class="add-post">
		
		
		
		
       
<div class="inputbox">
    <label for="jobs">Choose Job name:<span class="req">*</span></label>
    <input list="jobs" name="jobs"  required class="inp" oninput="checkInput()"  autocomplete="off">
    <datalist id="jobs">
        <option value="Builder man"></option>
        <option value="Blacksmith man"></option>
        <option value="plumber man"></option>
    </datalist>
</div>

<div class="inputbox">
    <label for="city">Choose your city:<span class="req" id="req">*</span></label>
    <input list="city" name="city"  required class="inp" onchange="checkInput()"  autocomplete="off">
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
    <label for="phone">Enter your Phone:<span class="req">*</span></label>
    <input type="tel" name="phone" id="phone" required class="inp" oninput="checkInput()">
</div>

<div class="inputbox">
    <label for="textarea">Enter the required experiences and notes:</label>
    <textarea name="job_info" id="textarea" cols="3" rows="3" style="border-radius: 9px; outline: none; border: none; border-bottom: 1px solid #ccc; background-color: #ffffffc7; caret-color: #19c8fa; padding: 10px;"></textarea>
</div>

<div class="inputbox">
    <label for="sal">Enter Expected salary:<span class="req">*</span></label>
    <input type="number" name="sal" id="sal" required class="inp" oninput="checkInput()">
</div>

 <div class="inputbox radio">
    <label for="time">Enter the time type:<span class="req1" style="color:red">*</span></label>
    <input type="radio" value="Part-Time" name="time" style="position: relative; top: 20px; right: 97px;" required onchange="hideSpan()">
    <label for="Part-Time">Part-Time</label>
    <input type="radio" value="Full-Time" name="time" style="position: relative; top: 20px; right: 97px;" required onchange="hideSpan()">
    <label for="Full-Time">Full-Time</label>
  </div>
  

				
				
				
				
				
        <div class="container">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
		
		</div>
		
		
		
		
		
      <button type="submit" name="submit" style="height: 54px;
    border-radius: 11px;
    text-transform: uppercase;" >  post    </button>
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
 
  <?php	
  
	}
  else{?>
  <div class="Add">
   <button onclick="document.getElementById('id01').style.display='block'" > <i class="fa-solid fa-plus" style=" color:#FFBABA; font-size: 40px;
     background-color: var(--main-color);
        text-align: center;
        text-decoration: none;
        position: fixed;
        right: 0;
        padding: 2px;
        margin: 5px;
        z-index: 2;
        bottom: 1px;
    ">
 </i>   </button>



    <div id="id01" class="modal">
	
      
      <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="padding: 44px;
      width: 80%;" >
	  
	  
      <h2 style="text-align: center;">You can only add posts when you login on the site</h2>
	  
	  
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
		
       <p style="color: black;
    font-size: 20px;">Click here to login, then come back here to add posts: <a href="../login/login.php" style="
    background: #1806ff;
    color: white;
    padding: 10px 15px;
    border-radius: 9px;
">login</a></p>
        
        <div class="add-post">
        <div class="container">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">cancel</button>
        </div>
		
		</div>
		
		
		
		
		
      
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
 
<?php 
  }
?>


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
function checkInput() {
  var reqSpans = document.getElementsByClassName("req");

  for (var i = 0; i < reqSpans.length; i++) {
    reqSpans[i].style.display = "inline"; // إظهار جميع العناصر <span>
  }

  var inputs = document.getElementsByTagName("input");

  for (var i = 0; i < inputs.length; i++) {
    var input = inputs[i];

    if (input.value !== "") {
      var reqSpan = input.parentNode.querySelector(".req");
      if (reqSpan) {
        reqSpan.style.display = "none"; // إخفاء الـ span
      }
    }
  }
}
function hideSpan() {
      var span = document.querySelector('.req1');
      span.style.display = 'none';
    }
  
</script>
</body>
</html>




<?php
	 include '../config/config.php';
	  
	  
	  
	 //اذا ما كان المتغير موجود رجع المستخدم للصفحة الرئيسية
	 if(!isset($_SESSION['user_id']))
	 {
		 header('location:../home/index.php');
		 
	 }
				
				
				
			
	 
	 
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/styleprofile">
   <script src="https://kit.fontawesome.com/223a4bc651.js" crossorigin="anonymous"></script>
   </head>
<body>


   
<div class="container">

   <div class="profile">
      <?php
	  
	     
         if($_SESSION['image'] == ''){
            echo '<img src="../img/default-avatar.png">';
         }else{
            echo '<img src="../upload_img/'.$_SESSION['image'].'">';
         }
       
      ?>
      <h3><?php echo  $_SESSION['user_name']; ?></h3>
      <a href="../upadteprofile/updateprofile.php" class="btn"><i class="fa-solid fa-pen-to-square">&nbsp;&nbsp;&nbsp;</i>update profile</a>
     <a href="../your_job/dev.php" class="btn"><i class="fa-solid fa-star">&nbsp;&nbsp;&nbsp;</i>manage your post</a>
     <a href="../JobApplications/jobapplications.php" class="btn"><i class="fa-solid fa-check-double">&nbsp;&nbsp;&nbsp;</i>Job Applications</a>
     <a href="../jobapply/jobapply.php" class="btn"><i class="fa-solid fa-circle-check">&nbsp;&nbsp;&nbsp;</i>jobs applied</a>




     
     <?php			
			if($_SESSION['State_user'] == 'ADMIN')
			{
			?>	
     <a href="../admin/admin_page.php" class="btn"><i class="fa-solid fa-circle-user">&nbsp;&nbsp;&nbsp;</i>admin</a>

     <?php			
			 }
			?>	



      <a href="../home/index.php" class="btn"><i class="fa-solid fa-backward">&nbsp;&nbsp;&nbsp;</i>BACK</a>

   </div>

</div>

</body>
</html>
<?php
include '../upadteprofile/updateprofile2.php'
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/styleprofile">
   <link rel="stylesheet" href="../register/register.css">
   <link rel="stylesheet" href="../css/all.min.css">
 <style>
    .eye{
        position: relative;
    }
 </style>
</head>
<body>
   
<div class="update-profile">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   method="post"  enctype="multipart/form-data">  
   

<div>
<?php

  if($_SESSION['image'] == ''){
            echo '<img src="../img/default-avatar.png">';
         }else{
            echo '<img src="../upload_img/'.$_SESSION['image'].'">';
         }


	
?>
</div>

   
	<span class="error"><?php echo "$message"; ?> </span>
	<span class ="error1"><?php echo "$confpaas"; ?> 	</span>
      <div class="flex">
         <div class="inputBox">
            
			
			<span class=error><?php echo "$message5"; ?> </span>
			
			<span>User name :</span>
			<span class="error"><?php echo "$update_nameErr"; ?> </span>
			<span class="error"><?php echo "$message3"; ?> </span>
            <input type="text" name="update_name" value="<?php echo $_SESSION['user_name']; ?>" class="box" >
            
			
			
			
			<span>Your phone :</span>
			<span class="error"><?php echo "$phoneErr"; ?> </span>
            <input type="tel" name="update_phone" value="<?php echo $_SESSION['phone']; ?>" class="box" >
			
            
			
			
			<span>Update your pic :</span>
			<span class="error"><?php echo "$message4"; ?> </span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="upload-box" style="    margin-bottom: 6px;
">
            
			
			
			<span>New password :</span>
			<span class="error"><?php echo "$passwordErr"; ?> </span>
            <div class="eye">
            <i class="fa-solid fa-eye" style="color: #5b6669;position: absolute;
            right: 12px;
            z-index: 1;
            top: 17px;" 
            aria-hidden="true" id="eye" onclick="toggle()" ></i>            
            <input type="password"id="password" name="new_pass" placeholder="Enter new password" class="box" value="<?php echo "$password2" ;?>">
            </div>
            
            <?php
            
            //if (!empty($_POST["new_pass"])) {

            ?>
            
            
            
            <span class="error" style="white-space:nowrap;"><?php echo "$passErr11"; ?></span> 
            <span class="error" style="white-space:nowrap"><?php echo "$passErr22"; ?></span> 
            <span class="error" style="white-space:nowrap"><?php echo "$passErr33"; ?></span> 
            <span class="error" style="white-space:nowrap"><?php echo "$passErr44"; ?></span>
            

            <?php
            //}

            ?>
         
		 
		     
		  
		 </div>
		 
		 
		 
		 
         <div class="inputBox">
		 
		 
		 
            <span>Your email :</span>
			<span class="error"><?php echo "$update_emailErr"; ?> </span>
			<span class="error"><?php echo "$message2"; ?> </span>
            <input type="email" name="update_email" value="<?php echo $_SESSION['email']; ?>" class="box" >
            
			
			
            <span>Your Age:</span>
			<span class="error"><?php echo "$update_ageErr"; ?> </span>
		     <input type="number" name="update_age"  class="box"  value="<?php echo $_SESSION['age']; ?>" >
			
			
			
			 <span class>Old password :</span>
			<span class="error"><?php echo "$oldpasswordErr"; ?> </span>
            <div class="eye" style="position:relative">
            <i class="fa-solid fa-eye" style="color: #5b6669;
            position: absolute;
            z-index: 1;
            right: 12px;
            top: 17px;" 
            aria-hidden="true" id="eye" onclick="toggle1()" ></i>            
            <input type="password" id="password1" name="old_pass" placeholder="Enter previous password" class="box" style="    margin-top: -1px;
">
			</div>
			
			
			<span>Confirm password : </span>           
			<span class ="error"><?php echo "$confirmpasswordErr";  ?></span>
            <div class="eye">
            <i class="fa-solid fa-eye" style="
                color: #5b6669;
                position: absolute;
                z-index: 1;
                right: 12px;
                top: 17px;
            " aria-hidden="true" id="eye" onclick="toggle2()" ></i>            
            <input type= "password" id="password2" name="confirm_pass" placeholder="Confirm new password" class="box"  value="<?php echo "$confirmpassword";?>">
             </div>
           
		 
           
         
		 </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn1">

      <a href="../profile/profile.php" class="btn1">Go back</a>
   </form>
</div>
<script>
    var state=false;
    function toggle(){
     if(state){
        document.getElementById("password").setAttribute("type","password");
        state=false;
     }
     else{
        document.getElementById("password").setAttribute("type","text");
        state=true;
     }
    }
    var state=false;
    function toggle1(){
     if(state){
        document.getElementById("password1").setAttribute("type","password");
        state=false;
     }
     else{
        document.getElementById("password1").setAttribute("type","text");
        state=true;
     }
    }
    var state=false;
    function toggle2(){
     if(state){
        document.getElementById("password2").setAttribute("type","password");
        state=false;
     }
     else{
        document.getElementById("password2").setAttribute("type","text");
        state=true;
     }
    }
    </script>
</body>
</html>
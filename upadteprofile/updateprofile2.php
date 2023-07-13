<?php

    include '../config/config.php';
	
	//اذا ما كان المتغير موجود رجع المستخدم للصفحة الرئيسية
	 if(!isset($_SESSION['user_id']))
	 {
		 header('location:../home/index.php');
		 
	 }
	
	
	$user_id       =  $_SESSION['user_id'] ;
	$passwordold1  =  $_SESSION['password'];
	$user_name_old =  $_SESSION['user_name'];
	$email_old     =  $_SESSION['email'];
	//$age_old       =  $_SESSION['age'];
	
	
	
	
	
   
   $update_age = $oldpassword22 = $update_name = $update_email = $phone = $password2 = $oldpassword = $confirmpassword = "";
   
   $update_ageErr = $update_nameErr = $update_emailErr = $phoneErr = $passwordErr = $oldpasswordErr = $confirmpasswordErr = "" ;
   
   $passErr11 = $passErr22 = $passErr33 = $passErr44 = "";
   
   
	 
   
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  

    
  
  if (empty($_POST["update_name"])) {
    $update_nameErr = "*  UserName is required";
  } else {
    $update_name = $_POST["update_name"];
  }
  
  
  if (empty($_POST["update_age"])) {
    $update_ageErr = "*  Age is required";
  } else {
    $update_age =mysqli_real_escape_string($conn,$_POST["update_age"]);  }
  
  
  
  
  
  
  if (empty($_POST["update_email"])) {
    $update_emailErr = "*  Email is required";
  } else {
    $update_email  = $_POST["update_email"];
  }
  
   if (!filter_var($update_email, FILTER_VALIDATE_EMAIL) ) 
   {
	   
          $update_emailErr = "*  Invalid email format";
		      $update_email=="";
   }
   
   
   
  
  
  if (empty($_POST["update_phone"])) {
    $phoneErr = "*  Phone is required";
  } else {
    $phone = mysqli_real_escape_string($conn,$_POST["update_phone"]);
    }
  
  
  
  
  if (empty($_POST["old_pass"])) {
    $oldpasswordErr = "*  Old Password is required<br>";
  } else {
    $oldpassword = $_POST["old_pass"];
	$oldpassword22=md5($oldpassword);
  }
  
  
  
  
  if (empty($_POST["new_pass"])) {
    $passwordErr = "*  Password is required<br>";
  } else {
    $password2 = $_POST["new_pass"];
  }
  
  
  
  
  
  if (empty($_POST["confirm_pass"])) {
    $confirmpasswordErr = "*  Confirm password is required<br>";
  } else {
    $confirmpassword = $_POST["confirm_pass"];
  }
  
   
   
   if (  !preg_match('/[[:upper:]]{1,}/',$password2)){
		    $passErr11="*  it must contain at least one capital letters<br>";
			$password2="";
		}
		
		
	if (  !preg_match('/[[:lower:]]{1,}/',$password2)){
			$passErr22="*  it must contain at least one lowercase letters<br>";
			$password2="";
		}
			
			
	if (  !preg_match('/[[:digit:]]{1,}/',$password2)){
			$passErr33="*  it must contain at least a numbers<br>";
			$password2="";
		}
				
				
	if (  !preg_match('/.{5,}/',$password2)){
			$passErr44="*  it must contain at least 5 letters or numbers<br>";
			$password2="";
		}
		
		
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../upload_img/'.$update_image;

   
		
	
   

   
   
		
		
  }		
				
	 $query   ="";
	 $query2  ="";
	 $query3  ="";
	 $query4  ="";
	 $confpaas="";
	 $message ="";
	 $message2="";
	 $message3="";
	 $message4="";
	 $message5="";
	 
		
	    $query2="   SELECT * FROM users  WHERE email = '$update_email'";
		$query3="   SELECT * FROM users  WHERE user_name = '$update_name'";

		$rusult= mysqli_query($conn,$query2);
		$rusult2= mysqli_query($conn,$query3);
     
	 
	if (!$update_email=="" && !$update_name=="")
    if (mysqli_num_rows($rusult) > 0 && $email_old != $update_email) 
	    {
            $message = '*   user already exist';
			$message2= '*   email already exist';
		} elseif  (mysqli_num_rows($rusult2) > 0 && $user_name_old != $update_name)
		{
			$message = '*   user already exist';
			$message3= '*   username already exist';

        } elseif  ($password2 != $confirmpassword)
		{
			$confirmpassword="";
			$message="";
            $confpaas= '*  confirm password not matched!';
		} elseif  ($oldpassword22  !=  $passwordold1  )
		{
			
			$oldpassword="";
			$message="";
            $confpaas= '*  Old password not matched!';
			
			
        } elseif  ($update_emailErr==""  && $passErr11=="" && $passErr22==""  && $passErr33==""  && $passErr44=="" && $message=="" && $password2==$confirmpassword)
		{
			
			$password1=md5($password2);
			$confpaas="";
			$query= "UPDATE  users SET user_name = '$update_name' , email = '$update_email' , password = '$password1' , phone = $phone , age = $update_age  WHERE id = $user_id  ";
			
			$update1=mysqli_query($conn,$query);
			
			
			
			
			if(!empty($update_image)){
				
               if($update_image_size > 20000000){
                   $message4 = 'image is too large';
               }else{
                       $image_update_query = mysqli_query($conn, "UPDATE users SET image = '$update_image' WHERE id = $user_id") or die('query failed');
                       if($image_update_query){
                          move_uploaded_file($update_image_tmp_name, $update_image_folder);
                        }
                       $message5= 'image updated succssfully!';
                    } 
            }
			


        if ($update1) {
			
			
	$query4= "SELECT * FROM users WHERE id = $user_id ";
	
    $rusult3 = mysqli_query($conn,$query4);
   
  
   if (mysqli_num_rows($rusult3) > 0)
       {
		   $message="";
		   $row2 = mysqli_fetch_assoc($rusult3);
		   
		   $_SESSION['user_id'] = $row2['id'];
		   $_SESSION['name'] = $row2['full_name'];
		   $_SESSION['user_name'] = $row2['user_name'];
		   $_SESSION['email'] = $row2['email'];
		   $_SESSION['city'] = $row2['city'];
		   $_SESSION['age'] = $row2['age'];
		   $_SESSION['image'] = $row2['image'];
		   $_SESSION['phone'] = $row2['phone'];
		   $_SESSION['password'] = $row2['password'];
            
         }
      }
		}

    //echo$passwordold1;
    //echo "<br> $oldpassword22";


?>
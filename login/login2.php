<?php
     
	 include '../config/config.php';
	  
	     
	  $email = $password = $password1 = "" ;
	  
	  $emailErr = $passwordErr  = "" ;
	  
	  
	  
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
	if (empty($_POST["email"])) {
	  $emailErr = "*  email or username is required";
	} else {
	  $email = $_POST["email"];
	}
	
	
	
	if (empty($_POST["password"])) {
	  $passwordErr = "*  password is required";
	} else {
	  $password1= $_POST["password"];
	  $password = md5($_POST["password"]);
	}
	
  }
	 $query   ="";
	 $message ="";
	
	
	$query= "SELECT * FROM `users` WHERE (email = '$email' or user_name = '$email' ) AND password = '$password'";
	
    $rusult = mysqli_query($conn,$query);
   
   
   if (!$email=="" && !$password=="")
   if (mysqli_num_rows($rusult) > 0)
       {
		   $message="";
		   $row = mysqli_fetch_assoc($rusult);
		   
		   $_SESSION['user_id'] = $row['id'];
		   $_SESSION['name'] = $row['full_name'];
		   $_SESSION['user_name'] = $row['user_name'];
		   $_SESSION['email'] = $row['email'];
		   $_SESSION['password'] = $row['password'];
		   $_SESSION['city'] = $row['city'];
		   $_SESSION['age'] = $row['age'];
		   $_SESSION['image'] = $row['image'];
		   $_SESSION['phone'] = $row['phone'];
		   $_SESSION['State_user'] = $row['State_user'];

		   header('location:../home/index.php');
	   } else 
	   {
		   $message ='* invalid email or password';
	   }
	
	
	 
	





   
   
   
   








?>
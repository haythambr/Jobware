<?php

    include '../config/config.php';


   $FullName = $username = $email = $password = $city = $age = $confirmpassword = $phone ="";
   
   $fnameErr = $unameErr = $emailErr = $cityErr = $ageErr = $confirmpasswordErr = $passwordErr =$phoneErr = "" ;
   
   $passErr11 = $passErr22 = $passErr33 = $passErr44 = "";
   
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "*  FullName is required";
  } else {
    $FullName = $_POST["fname"];
  }



  
  
  if (empty($_POST["uname"])) {
    $unameErr = "*  UserName is required";
  } else {
    $username = $_POST["uname"];
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "*  Email is required";
  } else {
    $email  = $_POST["email"];
  }
  
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "*  Invalid email format";
		   $email=="";
         }
  
  
  if (empty($_POST["city"])) {
    $cityErr = "*  City is required";
  } else {
    $city = $_POST["city"];
  }
  
  
  if (empty($_POST["age"])) {
    $ageErr = "*  Age is required";
  } else {
    $age = mysqli_real_escape_string($conn,$_POST["age"]);
  }


  if (empty($_POST["phone"])) {
    $phoneErr = "*  Phone is required";
  } else {
    $phone =mysqli_real_escape_string($conn,$_POST["phone"]); 
   }
  
  
  if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "*  Confirm password is required<br>";
  } else {
    $confirmpassword = $_POST["confirmpassword"];
  }
  
  
  if (empty($_POST["password"])) {
    $passwordErr = "*  Password is required<br>";
  } else {
    $password = $_POST["password"];
  }
  
   
   
   
   
   
   if (  !preg_match('/[[:upper:]]{1,}/',$password)){
		    $passErr11="*  it must contain at least one capital letters<br>";
			$password="";
		}
		
		
	if (  !preg_match('/[[:lower:]]{1,}/',$password)){
			$passErr22="*  it must contain at least one lowercase letters<br>";
			$password="";
		}
			
			
	if (  !preg_match('/[[:digit:]]{1,}/',$password)){
			$passErr33="*  it must contain at least a numbers<br>";
			$password="";
		}
				
				
	if (  !preg_match('/.{5,}/',$password)){
			$passErr44="*  it must contain at least 5 letters or numbers<br>";
			$password="";
		}
  }
			
				
	 $query   ="";
	 $query2  ="";
	 $query3  ="";
	 $confpaas="";
	 $message ="";
	 $message2="";
	 $message3="";
		
	    $query2="   SELECT * FROM `users`  WHERE email = '$email'";
		$query3="   SELECT * FROM `users`  WHERE user_name = '$username'";

		$rusult= mysqli_query($conn,$query2);
		$rusult2= mysqli_query($conn,$query3);
     
	 
	if (!$email=="" && !$username=="")
    if (mysqli_num_rows($rusult) > 0) 
	    {
            $message = '*   user already exist';
			$message2= '*   email already exist';
		} elseif  (mysqli_num_rows($rusult2) > 0)
		{
			$message = '*   user already exist';
			$message3= '*   username already exist';

        } elseif  ($password != $confirmpassword)
		{
			$confirmpassword="";
			$message="";
            $confpaas= '*  confirm password not matched!';
        } else if($emailErr==""  && $passErr11=="" && $passErr22==""  && $passErr44==""  && $passErr33=="" && $message=="" && $password==$confirmpassword)
		{
			$password1=md5($password);
			$confpaas="";
			$query= "INSERT INTO  `users` (full_name,user_name,email,password,city,age,phone) VALUES('$FullName','$username','$email','$password1','$city','$age',$phone)";
			
			$insert1=mysqli_query($conn,$query);

        if ($insert1) {
            header('location:../login/login.php');
         }
      }
   
   
 







?>
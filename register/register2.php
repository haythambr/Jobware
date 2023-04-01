<?php

    session_start();

   $conn= mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'jobware');



   $FullName = $username =  $email    = $password = $city     = $age  =  $confirmpassword = "";
   
   $fnameErr = $unameErr = $emailErr = $cityErr = $ageErr = $confirmpasswordErr = $passwordErr = "" ;
   
   $passErr11 = $passErr22 = $passErr33 = $passErr44 = "";
   
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "* FullName is required";
  } else {
    $FullName = $_POST["fname"];
  }



  
  
  if (empty($_POST["uname"])) {
    $unameErr = "* UserName is required";
  } else {
    $username = $_POST["uname"];
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    $email  = $_POST["email"];
  }
  
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format";
		   $email=="";
         }
  
  
  if (empty($_POST["city"])) {
    $cityErr = "* City is required";
  } else {
    $city = $_POST["city"];
  }
  
  
  if (empty($_POST["age"])) {
    $ageErr = "* Age is required";
  } else {
    $age = $_POST["age"];
  }
  
  
  if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "* Confirm password is required<br>";
  } else {
    $confirmpassword = $_POST["confirmpassword"];
  }
  
  
  if (empty($_POST["password"])) {
    $passwordErr = "* Password is required<br>";
  } else {
    $password = $_POST["password"];
  }
  
   
   
   
   
   
   if (  !preg_match('/[[:upper:]]{1,}/',$password)){
		    $passErr11="it must contain at least one capital letters<br>";
			$password="";
		}
		
		
	if (  !preg_match('/[[:lower:]]{1,}/',$password)){
			$passErr22="it must contain at least one lowercase letters<br>";
			$password="";
		}
			
			
	if (  !preg_match('/[[:digit:]]{1,}/',$password)){
			$passErr33="it must contain at least a numbers<br>";
			$password="";
		}
				
				
	if (  !preg_match('/.{5,}/',$password)){
			$passErr44="it must contain at least 5 letters or numbers<br>";
			$password="";
		}
  }


/*if (isset($_POST['submit'])) {
	
	
   $FullName = $_POST['fname'];
   $username = $_POST['uname'];
   $email    = $_POST['email'];
   $password = $_POST['password'];
   $city     = $_POST['city'];
   $age      = $_POST['age'];
   $confirmpassword = $_POST['confirmpassword'];
  }*/
  
	   
	  /* $passerr1="";
	   $passerr2="";
	   $passerr3="";
	   $passerr4="";
	   $emailErr="";
	   
	   
	   $query   ="";
	   $query2  ="";*/
	 
	   
	   
	 /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format";
         }*/
	
	
	
	/*if (  !preg_match('/[[:upper:]]{1,}/',$password)){
		    $passerr1="it must contain at least one capital letters ";
		}
		
		
	if (  !preg_match('/[[:lower:]]{1,}/',$password)){
			$passerr2="it must contain at least one lowercase letters";
		}
			
			
	if (  !preg_match('/[[:digit:]]{1,}/',$password)){
			$passerr3="it must contain at least a numbers";
		}
				
				
	if (  !preg_match('/.{5,}/',$password)){
			$passerr4="it must contain at least 5 letters or numbers";
		}*/
				
				
					
				
	 $query   ="";
	 $query2  ="";
	 $confpaas="";
	 $message ="";
		
	    $query2="   SELECT * FROM `users`  WHERE email = '$email' OR user_name = '$username'";

		$rusult= mysqli_query($conn,$query2);
     
	 
	if (!$email=="" && !$username=="")
    if (mysqli_num_rows($rusult) > 0) 
	    {
            $message = '*   user already exist';
        } elseif  ($password != $confirmpassword)
		{
			$message="";
            $confpaas= 'confirm password not matched!';
        } else if($emailErr==""  && $passErr11=="" && $passErr22==""  && $pasEerr33==""  && $passErr44=="" && $message=="" && $password==$confirmpassword)
		{
			
			$confpaas="";
			$query= "INSERT INTO  `users` (full_name,user_name,email,password,city,age) VALUES('$FullName','$username','$email','$password','$city','$age')";
			
			$insert1=mysqli_query($conn,$query);

        if ($insert1) {
            header('location:../login/login.html');
         }
      }
   
   
 







?>
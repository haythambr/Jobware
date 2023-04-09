<!-- php-->
<?php

include "../register/register2.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Register</title>
	
	
</head>
<body>
   <section>
  <div class="form-box">
  
  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
	
	
	

         <h2>Registration</h2>
		 <span class ="error"><?php echo "$message"; ?> </span>
		 
         <div class="register">
		 
          <div class="inputbox">
            <input type="text"   name="fname"    class="FullName" placeholder="Enter Your Name"   value="<?php echo "$FullName"?>">
			<span class ="error"><?php echo "$fnameErr"; ?> </span>
           <label for="Fullname">FullName</label>
            </div>
			
			
           <div class="inputbox">
            <input type="text" name="uname"     placeholder="Enter Your Username" value="<?php echo "$username"?>">
			<span class ="error"><?php echo "$unameErr"; ?> </span>
			<span class ="error1"><?php echo "$message3"; ?> </span>
           <label for="username">username</label>
            </div>
			
			
			
           <div class="inputbox">
            <input type="email"   name="email"   placeholder="Enter Your email"   value="<?php echo "$email"?>">
			<span class ="error"><?php echo "$emailErr"; ?> </span>
			<span class ="error1"><?php echo "$message2"; ?> </span>

           <label for="email">email</label>
		   		   		  
            </div>
			
            <div class="inputbox">
            <input list="city" name="city"    value="<?php echo "$city"?>">
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
			  <span class ="error"><?php echo "$cityErr"; ?> </span>

            <label for="city">Choose your city:</label>
            </div>
			
            <div class="inputbox">
            <input type="number" name="age"   placeholder="Enter Your Age"   value="<?php echo "$age"  ?>">
			  <span class ="error"><?php echo "$ageErr"; ?> </span>

           <label for="age">Age</label>
            </div>

           <div class="inputbox passerrparent">
            <input type="password" name="password"    placeholder="Enter Your Password" value="<?php echo "$password"?>">
			<span class ="error"><?php echo "$passwordErr"; ?> 
			</span>
            <div class="passerr">
            <span style="white-space: nowrap;"><?php echo "$passErr11"; ?></span> 
            <span style="white-space: nowrap;"><?php echo "$passErr22"; ?></span> 
            <span style="white-space: nowrap;"><?php echo "$passErr33"; ?></span> 
            <span style="white-space: nowrap;"><?php echo "$passErr44"; ?></span> 
        </div>
           <label for="password">password</label>
            </div>
			
			
			
           <div class="inputbox passerrlast">
            <input type="password"  name="confirmpassword"      placeholder="Confirm Your Password" value="<?php echo "$confirmpassword"?>">
			<span class ="error"><?php echo "$confirmpasswordErr";  ?></span>
            <span class ="error1"><?php echo "$confpaas"; ?> 	</span>
           <label for="confirmpassword">Confirm Password</label>
            </div>
			
        </div>
		
		
        <div class="login">
            <p>Already have an account ? <a href="../login/login.php"> Log in</a></p>
        </div> 
        <button class="reg_but"  type="submit" name="submit">
                <span class="text">Register</span>
        </button>
		
		
		
		
		
    </form>
  </div>


   </section>
</body>
</html>

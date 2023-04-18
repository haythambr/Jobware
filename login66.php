<?php

session_start();
if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$password'");
   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   } else {
      $message[] = 'incorrect email or password!';
   }
}
?>
<!-- php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/login.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Log in</title>
	
	<style>
   .error{
    color: #D8000C;
    background-color: #FFBABA;
    border-radius: 3px;
    position: relative;
    top: -6px;
    right: -54px;
    
}
</style>

</head>
<body>
   <section>
  <div class="form-box">
  
    <form action="" method="post">
	
	
	
        <h2>Login</h2>
		

        <div class="inputbox">
            <i class="fa-solid fa-envelope"></i>
            
            <input type="text"  name="email" class="email" style="color: #ff69b4;" required>
        <label for="email">UserName or Email</label>
		
		<!-- <span class ="error"><?php //echo "$emailErr"; ?> </span> -->
    </div>
	
	
	
	
        <div class="inputbox">
            <i class="fa-solid fa-lock"></i>
            
            <input type="password"  name="password" style="color: #ff69b4;" required>
        <label for="password">Password</label>
		
		<!-- <span class ="error"><?php //echo "$passwordErr"; ?> </span> -->
		
    </div>
	
	
	
        <div class="forget">
            <label for="forget"><input type="checkbox" id="forget" checked>Remember Me  </label>
           <a href="#">Forget Password</a>
        </div>
		
		
		
        <button>Log in</button>
        <div class="register">
            <p>Don't have a account ? <a href="./register/register.php">Register</a></p>
        </div>
    </form>
  </div>


   </section>
</body>
</html>

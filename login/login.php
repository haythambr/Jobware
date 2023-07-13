<!-- php-->
<?php

include "./login2.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
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
  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
	
	
	
        <h2>Login</h2>
		
		<span class ="error"><?php echo "$message"; ?> </span>

        <div class="inputbox">
            <i class="fa-solid fa-envelope"></i>
            
            <input type="text"  name="email" class="email" style="color: #ff69b4;" value="<?php echo "$email"?>" required>
        <label for="email">UserName or Email</label>
		
		<!-- <span class ="error"><?php //echo "$emailErr"; ?> </span> -->
    </div>
	
	
	
	
        <div class="inputbox">
        <i class="fa-solid fa-eye" style="color: #19c8fa;" aria-hidden="true" id="eye" onclick="toggle()" ></i>            
            <input type="password"  name="password" style="color: #ff69b4;" id="password"  value="<?php echo "$password1"?>" required>
        <label for="password">Password</label>
		
		<!-- <span class ="error"><?php //echo "$passwordErr"; ?> </span> -->
		
    </div>
	
	
	
        <div class="forget">
            <label for="forget"><input type="checkbox" id="forget" checked>Remember Me  </label>
           <a href="#">Forget Password</a>
        </div>
		
		
		
        <button>Log in</button>
        <div class="register">
            <p>Don't have a account ? <a href="../register/register.php">Register</a></p>
        </div>
    </form>
  </div>


   </section>
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
   </script>
</body>
</html>

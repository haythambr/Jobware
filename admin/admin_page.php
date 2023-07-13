<?php

include '../config/config.php';


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
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style1.css">
 <style>
   .header .flex{
      background: blanchedalmond;
      max-width: 100%;
   }
   section{
        min-height: 100vh;
    width: 100%;
    background: url("../img/dashboard.jpg");  
   background-position: center;
    background-size: cover;
   }
   .dashboard .box-container .box{
      text-align: center;
    border: var(--border);
    padding: 2rem;
    border-radius: 3.5rem;
    background: transparent;
   }
   .dashboard .box-container .box p{
      color: wheat;
     background-color:#554fd7;
   }
   .dashboard .box-container .box h3{
      color: white;
   }
 </style>
</head>
<body>
   
<?php  @include 'admin_header.php'; ?>

<section class="dashboard">

   <h1 class="title" style="color:wheat">dashboard</h1>

   <div class="box-container">

      

     
     

      <div class="box">
         <?php
            $query= "SELECT * FROM `jobs` ";
	
            $rusult = mysqli_query($conn,$query);
       
       $rowcount=mysqli_num_rows($rusult);
       
         ?>
         <h3><?php echo  $rowcount ;  ?></h3>
         <p>post added</p>
      </div>

      <div class="box">
         <?php
           
           $query= "SELECT * FROM users where State_user='USER' ";
	
               $rusult = mysqli_query($conn,$query);
          
          $rowcount=mysqli_num_rows($rusult);
          
          
         ?>
         <h3><?php echo  $rowcount ; ?></h3>
         <p>users</p>
      </div>

      <div class="box">
      <?php
           
           $query= "SELECT * FROM users where State_user='ADMIN' ";

           $rusult = mysqli_query($conn,$query);
      
      $rowcount=mysqli_num_rows($rusult);
      
      
     ?>
     <h3><?php echo  $rowcount ; ?></h3>
         <p>admin</p>
      </div>

      <div class="box">
      <?php
           
           $query= "SELECT * FROM `users`";
          
           $rusult = mysqli_query($conn,$query);
      
      $rowcount=mysqli_num_rows($rusult);
      
      
     ?>
     <h3><?php echo  $rowcount ; ?></h3>
         <p>total accounts</p>
      </div>

      <div class="box">
         <?php
           $select_messages = mysqli_query($conn, "SELECT * FROM `contact`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php  echo $number_of_messages; ?></h3>
         <p>new messages</p>
      </div>

   </div>

</section>













<!--<script src="js/admin_script.js"></script>-->

</body>
</html>
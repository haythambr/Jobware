<?php

include '../config/config.php';






if(!isset($_SESSION['user_id']))
{
   header('location:../home/index.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM users WHERE id = '$delete_id'") or die('query failed');
   header('location:../admin/admin_users.php');
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
      .title{
         color: wheat;

      }
      section{
   padding:3rem 2rem;
   background: url("../img/dashboard.jpg");

}
     </style>
</head>
<body>
   
<!-- start header  -->

<?php include 'admin_header.php'; ?>

<!-- end header  -->



<section class="users">

   <h1 class="title">users account</h1>


   <!-- <div class="main-title">Your Job</div></div> -->






   <div class="box-container">
      <?php
         $query="   SELECT * FROM users  ORDER BY id DESC";
         $select_users = mysqli_query($conn,$query) or die('query failed');
         if(mysqli_num_rows($select_users) > 0){
            while($users1 = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
         <p>User Id : <span><?php echo $users1['id']; ?></span></p>
         <p>full Name : <span><?php echo $users1['full_name']; ?></span></p>
         <p>User Name : <span><?php echo $users1['user_name']; ?></span></p>
         <p>Email : <span><?php echo $users1['email']; ?></span></p>
         <p>City : <span><?php echo $users1['city']; ?></span></p>
         <p>Age : <span><?php echo $users1['age']; ?></span></p>
         <p>Phone : <span><?php echo $users1['phone']; ?></span></p>
         <p>User Type : <span style="color:<?php if($users1['State_user'] == 'ADMIN'){ echo 'var(--orange)'; }; ?>"><?php echo $users1['State_user']; ?></span></p>
         <a href="admin_users.php?delete=<?php echo $users1['id']; ?>" onclick="return confirm('do you want to delete the current user?');" class="delete-btn">DELETE</a>
      </div>
      <?php
         }
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>
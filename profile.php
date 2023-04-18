<?php
include './register/register2.php';
$user_id=  $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleprofile">
   <script src="https://kit.fontawesome.com/223a4bc651.js" crossorigin="anonymous"></script>
   </head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="./img/default-avatar.png">';
         }else{
            echo '<img src="./upload_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['user_name']; ?></h3>
      <a href="updateprofile.php" class="btn"><i class="fa-solid fa-pen-to-square">&nbsp;&nbsp;&nbsp;</i>update profile</a>
     <!--<a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>-->
     <a href="dev.php" class="btn"><i class="fa-solid fa-star">&nbsp;&nbsp;&nbsp;</i>manage your post</a>
     <a href="home.php" class="btn"> <i class="fa-solid fa-gear">&nbsp;&nbsp;&nbsp;</i>Settings</a>
      <a href="index2.php" class="btn"><i class="fa-solid fa-backward">&nbsp;&nbsp;&nbsp;</i>BACK</a>

   </div>

</div>

</body>
</html>
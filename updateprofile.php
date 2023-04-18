<?php
include './register/register2.php';
$user_id = $_SESSION['user_id'];
if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   mysqli_query($conn, "UPDATE `users` SET user_name = '$update_name', email = '$update_email' WHERE id = '$user_id'");

   
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));
    $message='';
   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `users` SET password = '$confirm_pass' WHERE id = '$user_id'");
         $smessage = 'password updated successfully!';  
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = './upload_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000000){
         $message = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $smessage = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleprofile">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="./img/default-avatar.png">';
         }else{
            echo '<img src="./upload_img/'.$fetch['image'].'">';
         }
         if(is_array($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
            if(isset($smessage)){
               foreach($smessage as $smessage){
                  echo '<div class="smessage">'.$smessage.'</div>';
               }
            
         }
      }

      ?>
      <div class="flex">
         <div class="inputBox">
            <span>User name :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['user_name']; ?>" class="box" required>
            <span>Your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box" required>
            <span>Your number :</span>
            <input type="tel" name="update_phone" value="<?php echo $fetch['email']; ?>" class="box" required>
            <span>Update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="upload-box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>Old password :</span>
            <input type="password" name="update_pass" placeholder="Enter previous password" class="box">
            <span>New password :</span>
            <input type="password" name="new_pass" placeholder="Enter new password" class="box">
            <span>Confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn1">
      <a href="profile.php" class="btn1">Go back</a>
   </form>
</div>
</body>
</html>
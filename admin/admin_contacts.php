<?php



include '../config/config.php';

if(!isset($_SESSION['user_id']))
{
   header('location:../home/index.php');
}


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `contact` WHERE id_contact = '$delete_id'") or die('query failed');
   header('location:admin_contacts.php');
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
   <link rel="stylesheet" href="../admin/css/admin_style1.css">
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
   
<?php @include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title">messages</h1>

   <div class="box-container">

      <?php
       $select_message = mysqli_query($conn, "SELECT * FROM `contact`ORDER BY id_contact DESC") or die('query failed');
       if(mysqli_num_rows($select_message) > 0){
          while($fetch_message = mysqli_fetch_assoc($select_message)){
      ?>
      <div class="box">
         <p>user id : <span><?php echo $fetch_message['id_contact']; ?></span> </p>
         <p>name : <span><?php echo $fetch_message['Full_name']; ?></span> </p>
         <p>Email : <span><?php echo $fetch_message['Email_contact']; ?></span> </p>
         <p>Number : <span><?php echo $fetch_message['Phone_contact']; ?></span> </p>
         <p>message : <span><?php echo $fetch_message['Message_contact']; ?></span> </p>
         <a href="admin_contacts.php?delete=<?php echo $fetch_message['id_contact']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">you have no messages!</p>';
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>
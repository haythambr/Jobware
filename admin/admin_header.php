<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Dashboard</span></a>
      <nav class="navbar">
         <a href="admin_page.php" style=" color: #5b69e0;;">home</a>
         <a href="admin_users.php" style=" color: #5b69e0;">users</a>
         <a href="admin_contacts.php" style=" color: #5b69e0;">messages</a>
         <a href="../home/index.php" class="btn"><i class="fa-solid fa-backward">&nbsp;&nbsp;&nbsp;</i>BACK</a>
      </nav>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      

   </div>

</header>
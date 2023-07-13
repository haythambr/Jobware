<?php

include '../config/config.php';


    if(!isset($_SESSION['user_id']))
	{
		header('location:../home/index.php');
		 
	}

    if (isset($_POST['submit'])) 
   {
    $Order_Status2=$_POST['Order_Status1'];
    $id_jobs_applied = $_POST['id1'];


    //$query3="SELECT * FROM jobs_applied WHERE id_user = $user_id1 AND id_jobs = $job_id1 ";

    $query3= "UPDATE  jobs_applied SET Order_Status = '$Order_Status2'  WHERE id = $id_jobs_applied  ";
    $update1=mysqli_query($conn,$query3);

    if($update1 and $Order_Status2 == 'Rejected')
    {
        $message[] = 'The job application has been rejected';


    }
    else if($update1 and $Order_Status2 == 'Accepted')
    {
        $message[] = 'The job application has been accepted';
        
    }
    else
    {
        $message[] = 'Failed to update job status';
    }






   }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobware</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/jobware.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  
  
  
  <!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
  <link rel="stylesheet" href="../css/admin_style.css">
  
  
  <style>
    span{
        color:#19c8fa;
    }
    .latest-job .container {
        display: grid;
    grid-template-columns: repeat(auto-fill,minmax(380px,1fr));
    gap: 24px;
}

.message i:hover{
  transform: rotate(150deg);}
    .latest-job .container .box{
    width: 100%;
    background-color: #ececec;
    border-radius: 8px;
    border: 3px solid #ececec;
    padding: 10px 30px !important;
    box-shadow: 5px 5px 5px #00000052;
    overflow-x: hidden;
    min-height: 400px;
    line-height: 39px;
    font-size: 19px;
    box-shadow: 16px 20px 21px #5a050552;
    }
    @media(max-width:450px){
        .latest-job .container .box {
            font-size: 17px;
        }
    }
   
  </style>
</head>
<body style="background-color: #d4cece;" >


<!-- لطباعة الرسالة اته الوظيفة نعمل الها تحديث  -->
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


<?php include '../header/header.php'; ?>
	

<section>
<div class="latest-job" style="padding-top: 70px;">
        <div class="main-title" style="margin-top:70px;
                                       margin-bottom: 29px;">
                                    Applications Details</div>



        <div class="container">


        <?php

        if(isset($_GET['view']))
        {
            $_SESSION['view']=$_GET['view'];
        }
        
        $view_id = $_SESSION['view'];

    $query2 = "SELECT * FROM users,jobs_applied
    WHERE jobs_applied.id_user = users.id
    and   jobs_applied.id_jobs =  $view_id
    and   Order_Status         = 'pending' ";
     //ORDER BY jobs_applied.id DESC";


    $select_job = mysqli_query($conn, $query2) or die('query failed');

    

    if(mysqli_num_rows($select_job) > 0){
        
        while($jobs1 = mysqli_fetch_assoc($select_job)){

            



    ?>
    





            <div class="box">
                <div class="card1">
                
                <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                <p>Submited in:&nbsp;&nbsp;<span><?php echo $jobs1['Submited_in']; ?></span></p> 
                <p>Full Name:&nbsp;&nbsp;<span><?php echo $jobs1['full_name']; ?></span></p> 
                <p>Email:&nbsp;&nbsp;<span><?php echo $jobs1['email']; ?></span></p> 
                <p>City:&nbsp;&nbsp;<span><?php echo $jobs1['city']; ?></span></p>
                <p>Age:&nbsp;&nbsp;<span><?php echo $jobs1['age']; ?></span></p> 
                <p>Phone:&nbsp;&nbsp;<span><?php echo $jobs1['phone']; ?></span></p> 
                <p>Experience:&nbsp;&nbsp;<textarea readonly style="background:whitesmoke;
                                                           display: block;
                                                           width: 355px;
                                                           height: 108px;
                                                           padding: 6px 11px;"><?php echo $jobs1['Worker_experiences']; ?></textarea></p> 


                <p>application state:&nbsp;&nbsp;<span> 

                    <select name="Order_Status1"  style="padding: 9px 39px;background: #00ffffb5;
                                            outline: none;margin: 10px 0;">

                    <option value="" disabled selected>pending</option>
                    <option value="Rejected">Rejected</option>
                    <option value="Accepted">Accepted</option>
                    </select>
                </span>
                </p> 

                <input type="hidden" name="id1"  value="<?php echo $jobs1['id'];; ?>" >
               
                 <input type="submit" name="submit" value="Update">
                 </form>
            
                 </div>
            </div>




            <?php
    }
        }else{
        echo '<p class="empty">no view jobs select</p>';
    }
    ?>


            



    



        </div>
</div>

</section>




     <!-- start footer -->
     <div class="footer">
        <div class="container">
            <i class="fa-solid fa-magnifying-glass-dollar logo">JOBWARE</i> 
            <p>We Are Social</p>
            <div class="social-icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-home"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <p class="copyright">&copy; 2023 <span>JOBWARE Team</span> All Right Reserved</p>
        </div>
       </div>
     <!-- end footer  -->
          <!-- start button  -->
          <div class="up">
            <a href="#header">up</a>
         </div>
    <!-- end footer -->

    
</body>
</html>
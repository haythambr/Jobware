<?php

     
	 
	 if($_SESSION['image'] =='')
	 {
		  echo '<img src="../img/default-avatar.png" style="
            border-radius: 100%;
    height: 6.5vh;
    margin-bottom: -6px;
    box-shadow: 1px 1px 8px black;
    margin: -10px 5px;
    width: 100%;">';
		 
		 
		 
	 }
	 
	 else {
		 
		 echo '<img src="../upload_img/'.$_SESSION['image'].'" style=" 
            border-radius: 100%;
            height: 6.5vh;
            margin-bottom: -6px;
            box-shadow: 1px 1px 8px black;
            margin: -10px 5px;
            width: 100%;">';
			
			
	 }







?>
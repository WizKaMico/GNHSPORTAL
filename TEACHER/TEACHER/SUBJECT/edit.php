<?php
session_start();


include('../../../connection/connection.php'); 

if(isset($_POST['edit'])){
    
      $id = mysqli_real_escape_string($conn, $_POST['id']);
      $code = mysqli_real_escape_string($conn, $_POST['code']);
      $year = mysqli_real_escape_string($conn, $_POST['year']);
      $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);

		
          mysqli_query($conn,"UPDATE subject SET code='$code', year='$year', subject_name='$subject_name' WHERE id = '$id'");  

         
 
					header('location: index.php');			

   }

  

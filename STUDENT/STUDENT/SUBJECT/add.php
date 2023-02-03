<?php
session_start();

include('../../../connection/connection.php'); 

if(isset($_POST['register'])){
    
      $code = mysqli_real_escape_string($conn, $_POST['code']);
      $year = mysqli_real_escape_string($conn, $_POST['year']);
      $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);
  

		
          mysqli_query($conn,"INSERT INTO subject (code, year, subject_name) VALUES ('$code', '$year', '$subject_name')");  

         

 
					header('location: index.php');			

   }

  

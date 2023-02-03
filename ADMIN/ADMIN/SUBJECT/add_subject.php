

<?php
  session_start();
  include_once('../../../connection/connection.php');
  if(isset($_POST['add'])){
  $code = $_POST['code'];
  $module_name  = $_POST['module_name'];
  $week_no   = $_POST['week_no'];
  $quarter  = $_POST['quarter'];
  $subject_id  = $_POST['subject_id'];
  $date  = $_POST['date'];
  $year = $_POST['year'];

    $sql = "INSERT INTO module_details (code, module_name, week_no, quarter, subject_id, date) VALUES ('$code', '$module_name', '$week_no', '$quarter', '$subject_id', '$date')";

    //use for MySQLi OOP
    if($conn->query($sql)){
      $_SESSION['success'] = ' added successfully';
    }
    ///////////////

    //use for MySQLi Procedural
    // if(mysqli_query($conn, $sql)){
    //  $_SESSION['success'] = 'Member added successfully';
    // }
    //////////////
    
    else{
      $_SESSION['error'] = 'Something went wrong while adding';
    }
  }
  else{
    $_SESSION['error'] = 'Fill up add form first';
  }

  header('location: index.php?id='.$year);
?>

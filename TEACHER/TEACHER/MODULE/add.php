
  
<?php
      require_once '../../../connection/connection.php';
      date_default_timezone_set('Asia/Manila');
      if(ISSET($_POST['submit'])){
            if($_FILES['upload']['name'] != "") {
                  $file = $_FILES['upload'];

                  $code = $_POST['code']; 
                  $subject_id = $_POST['subject_id'];
                  $date = date('Y-m-d');
                  $file_name = $file['name'];
                  $file_temp = $file['tmp_name'];
                  $name = explode('.', $file_name);
                  $path = "files/".$file_name;
 
                  $conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path', '$subject_id', '$code', '$date')") or die(mysqli_error());
 
                  move_uploaded_file($file_temp, $path);
                  header("location:index.php");
 
            }else{
                  echo "<script>alert('Required Field!')</script>";
                  echo "<script>window.location='index.php'</script>";
            }
      }
?>
<?php
	session_start();
	include('../../../connection/connection.php'); 
 
	if(isset($_POST['add'])){
		$year = $_POST['year'];
		$section = $_POST['section'];
		$code = $_POST['code'];
		$sql = "INSERT INTO section (section, year, code) VALUES ('$section', '$year', '$code')";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Section added successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
 
	header('location: index.php');
?>
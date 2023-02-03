<?php
	session_start();
	include('../../../connection/connection.php'); 
 
	if(isset($_POST['add'])){
		$year = $_POST['year'];
		
		$sql = "INSERT INTO grade (year) VALUES ('$year')";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Grade added successfully';
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
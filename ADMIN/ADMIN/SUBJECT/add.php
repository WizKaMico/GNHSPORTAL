<?php
	session_start();
	include_once('../../../connection/connection.php');
	if(isset($_POST['add'])){
		$code = $_POST['code'];
		$year = $_POST['year'];
		$subject_name = $_POST['subject_name'];
		$sql = "INSERT INTO subject (code, year, subject_name) VALUES ('$code', '$year', '$subject_name')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = ' added successfully';
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

	header('location: index.php?id='.$year);
?>
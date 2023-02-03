<?php
	session_start();
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			
			<div class="height10">
			</div>
			<div class="row">
					<a href="#addnew" data-toggle="modal" class="btn btn-primary" style='background-color:#421714; border-color:#421714;'><span class="glyphicon glyphicon-plus"></span>ADD NEW SUBJECT</a>
					<a href="#module" data-toggle="modal" class="btn btn-primary" style='background-color:#421714; border-color:#421714;'><span class="glyphicon glyphicon-plus"></span>ADD NEW MODULE</a>
					<a href="year.php" class="btn btn-primary" style='background-color:#421714; border-color:#421714; margin-right:5px;'> BACK</a>
				<br>
				<br>
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>SUBJECT CODE</th>
						<th>SUBJECT NAME</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
								include_once('../../../connection/connection.php');
							$sql = "SELECT * FROM subject WHERE year = '$id'";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['code']."</td>
									<td>".$row['subject_name']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-edit'></span></a>
										
										<a href='module_list.php?view=".$row['id']."' class='btn btn-success btn-sm' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-book'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>
<?php include('add_module.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>
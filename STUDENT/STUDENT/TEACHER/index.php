<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMIN</title>
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
		<div class="col-sm-12">
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
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-success pull-right" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-plus"></span> ADD NEW TEACHER</a>
			</div>
			<div class="height10">
			</div>
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>EMPLOYEE NO.</th>
						<th>LASTNAME</th>
						<th>FIRSTNAME</th>
						<th>MI</th>
						<th>EMAIL</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT * FROM teacher";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['employee_no']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['initial']."</td>
									<td>".$row['email']."</td>
									<td>
										<a href='#edit_".$row['user_id']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['user_id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='#qr_".$row['user_id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-qrcode'></span></a>
										<a href='#subject_".$row['user_id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-book'></span></a>
										<a href='assigned.php?user_id=".$row['user_id']."' class='btn btn-danger btn-sm' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-user'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							
						?>
					</tbody>
				</table>
			</div>
        </div>
<?php include('add_modal.php') ?>

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
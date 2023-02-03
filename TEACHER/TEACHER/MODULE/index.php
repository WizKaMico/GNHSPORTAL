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
				<a href="#addnew" data-toggle="modal" class="btn btn-success pull-right" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-plus"></span> ADD NEW MODULE</a>
			</div>
			<div class="height10">
			</div>
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>MODULE ID</th>
						<th>TITLE</th>
						<th>SUBJECT</th>
						<th>SUBJECT CODE</th>
						<th>YEAR</th>
						<th>DATE</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT *, file.code as rcode,subject.code as scode FROM `file` left join subject ON file.subject_id = subject.id";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$name = explode('/', $row['file']);
								echo 
								"<tr>
									<td>".$row['rcode']."</td>
									<td>".strtoupper($row['name'])."</td>
									<td>".$row['subject_name']."</td>
									<td>".$row['scode']."</td>
									<td>".$row['year']."</td>
									<td>".$row['date']."</td>
									<td>
									<a href='download.php?file=".$name[1]."' class='btn btn-danger btn-sm' style='background-color:#421714; border-color:#421714;'><span class='	glyphicon glyphicon-download-alt'></span></a>
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
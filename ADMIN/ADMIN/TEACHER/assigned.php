<?php
	session_start();
	$department = $_GET['department'];
	$teacher = $_GET['teacher'];
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
			<a href="print_pdf.php?department=<?php echo $department; ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div>
			<div class="height10">
			</div>

			   <h5>ADVISOR : <?php echo strtoupper($teacher); ?></h5>
			   <p>LIST OF STUDENTS</p>
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
							<th>STUDENT NO.</th>
						<th>YEAR</th>
						<th>LASTNAME</th>
						<th>FIRSTNAME</th>
						<th>MI</th>
						<th>EMAIL</th>
						<th>SECTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT *, grade.year as ryear FROM student LEFT JOIN section ON student.year = section.code LEFT JOIN grade ON section.year = grade.id WHERE status != 'ARCHIVE' AND student.year = '$department'";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
										<td>".$row['employee_no']."</td>
									<td>".$row['ryear']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['initial']."</td>
									<td>".$row['email']."</td>
									<td>".$row['section']."</td>
									
								</tr>";
								include('edit_delete_modal.php');
							}
							
						?>
					</tbody>
				</table>
			</div>
        </div>


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
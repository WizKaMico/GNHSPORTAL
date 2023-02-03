S<?php
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
				<a href="#addnew" data-toggle="modal" class="btn btn-success pull-right" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-plus"></span> ADD NEW STUDENT</a>

				<a href="#addsection" data-toggle="modal" class="btn btn-success pull-right" style="background-color:#421714; border-color:#421714; margin-right:10px;"><span class="glyphicon glyphicon-plus"></span> ADD SECTION</a>
				
				<a href="#addgrade" data-toggle="modal" class="btn btn-success pull-right" style="background-color:#421714; border-color:#421714; margin-right:10px;"><span class="glyphicon glyphicon-plus"></span> ADD GRADE</a>
			</div>
			<div class="height10">
			</div>
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>STUDENT NO.</th>
						<th>YEAR</th>
						<th>LASTNAME</th>
						<th>FIRSTNAME</th>
						<th>MI</th>
						<th>EMAIL</th>
						<th>SECTION</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT *, grade.year as ryear FROM student LEFT JOIN section ON student.year = section.code LEFT JOIN grade ON section.year = grade.id WHERE status != 'ARCHIVE'";

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
<?php 

include('add_modal.php');  
include('add_section.php');
include('add_grade.php');
?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<!-- generate datatable on our table -->
<script>


var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

var cmd = document.querySelector('#cmd');
cmd.addEventListener("click", function () {   
    var contentContainer = document.querySelector('#content');
    doc.fromHTML(contentContainer.outerHTML, 15, 15, {
        'width': 70,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});




</script>	
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
<?php 


$email = $_GET['student_name']; 
include('../../../../connection/connection.php');
 
$result=mysqli_query($conn, "select * from student where email= '$email'");
$row=mysqli_fetch_array($result);

 
$checkTotal=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM student_subject WHERE user_id = '".$row['user_id']."'");
$prow=mysqli_fetch_array($checkTotal);


$check=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM student_subject WHERE status = 'CLAIMED' AND user_id = '".$row['user_id']."'");
$claimedrow=mysqli_fetch_array($check);

$checku=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM student_subject WHERE status = 'UNCLAIMED' or status = ' ' AND user_id = '".$row['user_id']."'");
$unclaimedrow=mysqli_fetch_array($checku);


$checkr=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM student_subject WHERE status = 'RETURN' AND user_id = '".$row['user_id']."'");
$returnedrow=mysqli_fetch_array($checkr);


$unclaim = $unclaimedrow['TOTAL'];
$claim = $claimedrow['TOTAL'];
$total = $prow['TOTAL']; 
$return = $returnedrow['TOTAL'];


$value = ($return / 100) * $total;
$rvalue = ($value * 100); 


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="card" style="margin-left:-22px; margin-top:-20px;">
		<header class="card__gallery">
			<div class="card__gallery-item card__gallery-item__main" style="background-color:white;">
				<img src="../../../../img/1.svg" alt="" style="background-color:white;">
			</div>
			<div class="card__gallery-item">
				<img src="../../../../img/7.svg"
					alt="" style="background-color:white;">
			</div>
			<div class="card__gallery-item">
				<img src="../../../../img/11.svg" alt="" style="background-color:white;">
			</div>
			<div class="card__gallery-item">
				<img src="../../../../img/12.svg" alt="" style="background-color:white;">
			</div>
			<div class="card__gallery-item">
				<img src="../../../../img/18.svg" alt="" style="background-color:white;">
			</div>
		</header>
		<main class="card__user">
			<img src="../../../../img/18.svg" alt="" class="card__user-image" style="background-color:maroon;">
			<div class="card__user-info">
				<h2 class="card__user-info__name"><?php echo strtoupper($row['fname']); echo ' '; echo strtoupper($row['lname']); ?></h2>
				<p class="card__user-info__stats"><?php echo strtoupper($row['email']); ?></p>
			</div>
			<div class="card__user-actions">
				<button class="card__user-actions-follow"><?php echo strtoupper($row['year']); ?></button>
				<button class="card__user-actions-message">#<?php echo strtoupper($row['employee_no']); ?></button>
			</div>
		</main>
 
 <?php if($return == $total){ ?>
   <div class="w3-light-grey" style="margin-bottom:100px;">
    <div class="w3-container w3-green" style="width:100%">COMPLETED : <?php echo  $return; ?>/<?php echo $total; ?></div>
  </div>
<?php } else { ?>

  <div class="w3-light-grey" style="margin-bottom:<?php echo $total; ?>px;">
    <div class="w3-container w3-green" style="width:<?php echo  $rvalue; ?>%"><?php echo $rvalue; ?></div>
  </div>
<?php } ?>	



		<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>SUBJECT CODE</th>
						<th>SUBJECT NAME</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
						
							$sql = "SELECT *,student.user_id as STUD,subject.id as SUBJ, student_subject.status as SUBJSTAT, student_subject.subject_id as SUBJID, student_subject.id as SUBJIDR FROM student LEFT JOIN student_subject ON student.user_id = student_subject.user_id LEFT JOIN subject ON student_subject.subject_id = subject.id WHERE student.user_id = '".$row['user_id']."'";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['code']."</td>
									<td>".$row['subject_name']."</td>
										<td>";
										if($row['SUBJSTAT'] == ''){ echo 'UNCLAIMED'; }else{ echo $row['SUBJSTAT'];  }
									echo "</td>
									<td>";
                    
                                 if(empty($row['SUBJSTAT'])){

										echo "<a href='#edit_".$row['SUBJIDR']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-edit'></span></a>";

									  }else{

									 	echo "<a href='#edit_".$row['SUBJID']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#421714; border-color:#421714;'><span class='glyphicon glyphicon-edit'></span></a>"; 		

									  }


									echo "</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							
						?>
					</tbody>
				</table>
	</div>
<!-- partial -->
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




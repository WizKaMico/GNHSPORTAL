<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">EDIT : <?PHP echo strtoupper($row['fname']); ?></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Emp No.:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="employee_no" value="<?php echo $row['employee_no']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Department:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="code">
							<?php
							include_once('../../../connection/connection.php');
							$sqls = "SELECT *,grade.year as grade, grade.id as grade_year, section.id as sec_id, section.section as sname FROM grade LEFT JOIN section ON grade.id = section.year";

							//use for MySQLi-OOP
							$queries = $conn->query($sqls);
							while($xrow = $queries->fetch_assoc()){
						     ?>		
							<option value="<?php echo $xrow['code']; ?>">GRADE : <?php echo strtoupper($xrow['grade']); ?> | SECTION : <?php echo strtoupper($xrow['sname']); ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">MI:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="initial" value="<?php echo $row['initial']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STATUS:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="status">
							<option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?> (CURRENT)</option>
							<option value="VALID">VALID</option>
							<option value="ARCHIVE">ARCHIVE</option>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">DELETE</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ARCHIVE -->
<div class="modal fade" id="archive_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Activate</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Activate Archive Member</p>
				<h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="activate.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- QR -->
<div class="modal fade" id="qr_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">QR CODE</h4></center>
            </div>
            <div class="modal-body">	
            	<center>
            		<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Flocalhost/GNHS/PAGES/TEACHER/index.php?email=<?php echo $row['email']; ?>%2F&choe=UTF-8" title="TEACHER:<?php echo $row['name']; ?>|EMPLOYEENO:<?php echo $row['employee_no']; ?>"/>
            		</center>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- ADD SUBJECT -->
<div class="modal fade" id="subject_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD SUBJECT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_subject.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<input type="hidden" class="form-control" name="email" value="<?php echo $row['email']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STATUS:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="subject_id">
							<?php
							$sql1 = "SELECT * FROM subject";
							$querys = $conn->query($sql1);
							while($rows = $querys->fetch_assoc()){
							?>	
							<option value="<?php echo $rows['id']; ?>"><?php echo $rows['subject_name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="ADD" class="btn btn-success" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-check"></span> ADD</a>
			</form>
            </div>

        </div>
    </div>
</div>
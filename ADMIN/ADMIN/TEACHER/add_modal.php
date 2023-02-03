<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD ADMIN</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Emp No.:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="employee_no" value="<?php echo rand(666666,999999); ?>" required="" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Grade & Sec:</label>
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
						<input type="email" class="form-control" name="email" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">MI:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="initial" required>
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="register" class="btn btn-primary" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
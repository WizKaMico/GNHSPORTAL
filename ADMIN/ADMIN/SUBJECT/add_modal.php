<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Subject</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Code No.:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="code" value="<?php echo rand(6666,9999); ?>" required="" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">year:</label>
					</div>
					<div class="col-sm-10">
							<select class="form-control" name="year">
							<?php
							include_once('../../../connection/connection.php');
							$sqls = "SELECT * FROM grade";

							//use for MySQLi-OOP
							$queries = $conn->query($sqls);
							while($xrow = $queries->fetch_assoc()){
						     ?>		
							 <option value="<?php echo $xrow['id']; ?>">GRADE : <?php echo $xrow['year']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Subject Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="subject_name" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
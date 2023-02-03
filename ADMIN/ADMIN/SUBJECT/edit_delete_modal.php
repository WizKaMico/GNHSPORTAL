<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Subject</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
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
								<option value="<?php echo $row['year']; ?>">GRADE : <?php echo $row['year']; ?> (CURRENT)</option>	
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
						<input type="text" class="form-control" name="subject_name" value="<?php echo $row['subject_name']; ?>"  required>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Sudject</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['subject_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>&year=<?php echo $row['year']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>


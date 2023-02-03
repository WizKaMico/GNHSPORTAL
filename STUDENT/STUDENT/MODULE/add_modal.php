<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD MODULE</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CODE:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="code" value="<?php echo rand(6666,9999); ?>" required="" readonly="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">FILE:</label>
					</div>
					<div class="col-sm-10">
				       <input class="form-control" type="file" name="upload"/>
					</div>
				</div>


			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">SUBJECT:</label>
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
                <button type="submit" name="submit" class="btn btn-primary" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="module" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD MODULE</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_subject.php">
				<?php date_default_timezone_set('Asia/Manila'); ?>
				<input type="hidden" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>">
				<input type="hidden" class="form-control" name="code" value="<?php echo rand(6666,9999); ?>">
				<input type="hidden" class="form-control" name="year" value="<?php echo $id; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">SUBJECT:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="subject_id">
							<?php
							$sql1 = "SELECT * FROM subject WHERE year = '$id'";
							$querys = $conn->query($sql1);
							while($rows = $querys->fetch_assoc()){
							?>	
							<option value="<?php echo $rows['id']; ?>"> <?php echo $rows['subject_name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">MODULE NAME:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="module_name" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">WEEK NO:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="week_no">
							
							<option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						    <option value="4">4</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">QUARTER NO:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="quarter">
							
							<option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						    <option value="4">4</option>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-success" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-check"></span> ADD</a>
			</form>
            </div>

        </div>
    </div>
</div>

     <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Employee No:</label>
                        <input type="text" class="form-control" value="<?php echo $row['employee_no']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control"  value="<?php echo $row['fname']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Lastname</label>
                        <input type="text" class="form-control" value="<?php echo $row['lname']; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                      </div>
                    </div>
                   

                  </div>
                  
                   
                 
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                    <!--   <button type="submit" class="btn btn-primary btn-round">Update Profile</button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
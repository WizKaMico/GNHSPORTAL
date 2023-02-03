     <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="#" method="POST">
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Employee No:</label>
                        <input type="text" class="form-control" name="employee_no" value="<?php echo $row['employee_no']; ?>" required>
                         <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control" name="fname"  value="<?php echo $row['fname']; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Lastname</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                      </div>
                    </div>
               
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <input type="text" class="form-control" value="<?php echo $row['department']; ?>" required>
                      </div>
                    </div>

                  </div>
                  
                   
                 
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="update" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>


                <?php 


                    if(isset($_POST['update'])){
               
                       $employee_no  =  $_POST['employee_no']; 
                       $fname = $_POST['fname'];
                       $lname = $_POST['lname'];
                       $email = $_POST['email']; 
                       $password = $_POST['password']; 
                       $pass = md5($password);  
                       $user_id = $_POST['user_id'];
                       
                         mysqli_query($conn,"UPDATE admin SET employee_no='$employee_no',  email='$email', fname='$fname', lname='$lname' WHERE user_id = '$user_id'");  


          
 


                    }


                ?>


              </div>
            </div>
          </div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>

<body>

    <div class="container">

        <div class="img">
            <img src="img/1.svg" alt="BG">
        </div>

        <div class="login-content">

        <?php if(!empty($_GET['view'])){ ?>

            <?php if($_GET['view'] == 'ADMIN') { ?>

           <?php if(!empty($_GET['message']) && $_GET['message'] == 'LOCKED'){ ?>   


               <form action="action/login.php" method="POST">

                <div class="title-container">
                    <img src="ADMIN/images/logo.png">
                </div>


                <div class="login-inner-content" id="proceed">




                     <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input type="email" name="email" class="input" required>
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="pswrd" name="password" type="password" class="input" required>
                        </div>
                    </div>

                    <a href="#">ACCOUNT LOCKED</a>

                  <input type="submit" class="btn" name="login" value="LOGIN" style="background-color:#421714; border-color:#421714;">  

                </div>

                
                   <p style="margin-top:50px;">You need to wait <span id="time">60</span> before you can proceed</p>
            

            </form>


                
               



 

                <style type="text/css">
                    
                    #proceed {
                      display: none;
                    }

                </style>
       
            
            <?php } else { ?>

                <form action="action/login.php" method="POST">

                <div class="title-container">
                    <img src="ADMIN/images/logo.png">
                </div>


                <div class="login-inner-content">




                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input type="email" name="email" class="input" required>
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="pswrd" name="password" type="password" class="input" required>
                        </div>
                    </div>

                    <a href="#">ADMIN</a>

                </div>

                <input type="submit" class="btn" name="login" value="Login" style="background-color:#421714; border-color:#421714;">
                
                <a href="index.php" style="display: block;
                width: 100%;
                height: 30px;
                border-radius: 50px;
                outline: none;
                border: none;
                background-image: linear-gradient(to right, #5bdffa, #36cbe9, #5bdffa );
                background-size: 200%;
                font-size: 1.2rem;
                color: #fff;
                font-family: 'poppins',sans-serif;
                margin: 1rem 0;
                cursor: pointer;
                transition: .5s;">BACK</a>
            

            </form>

            <?php } ?>    

            <?php } else if($_GET['view'] == 'TEACHER') { ?>
            <form action="action/teacher_login.php" method="POST">

                <div class="title-container">
                    <img src="ADMIN/images/logo.png">
                </div>


                <div class="login-inner-content">


                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input type="email" name="email" class="input" required>
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="pswrd" name="password" type="password" class="input" required>
                        </div>
                    </div>

                    <a href="#">TEACHER</a>

                </div>

                <input type="submit" class="btn" name="login" value="Login" style="background-color:#421714; border-color:#421714;">
                <a href="index.php" style="display: block;
                width: 100%;
                height: 30px;
                border-radius: 50px;
                outline: none;
                border: none;
                background-image: linear-gradient(to right, #5bdffa, #36cbe9, #5bdffa );
                background-size: 200%;
                font-size: 1.2rem;
                color: #fff;
                font-family: 'poppins',sans-serif;
                margin: 1rem 0;
                cursor: pointer;
                transition: .5s;">BACK</a>

            

            </form>    


             <?php } else if($_GET['view'] == 'STUDENT') { ?>
            <form action="action/student_login.php" method="POST">

                <div class="title-container">
                    <img src="ADMIN/images/logo.png">
                </div>


                <div class="login-inner-content">


                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input type="email" name="email" class="input" required>
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="pswrd" name="password" type="password" class="input" required>
                        </div>
                    </div>

                    <a href="#">STUDENT</a>

                </div>

                <input type="submit" class="btn" name="login" value="Login" style="background-color:#421714; border-color:#421714;">

            

            </form>    



            <?php }else{ ?>

            <?php } ?>


            <?php }else{ ?>    

                <form action="action/student_login.php" method="POST">

                <div class="title-container">
                    <a href="?view=<?php echo 'TEACHER'; ?>"><img src="img/4.svg" style="width:50%;"></a>
                </div>

                  <div class="title-container">
                    <a href="?view=<?php echo 'ADMIN'; ?>"><img src="img/2.svg" style="width:50%;"></a>
                </div>


            </form>    

            <?php } ?>


        </div>
    </div>





    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        
       var i = 60;
var time = $("#time")
var timer = setInterval(function() {
  time.html(i);
  if (i == 0) {
    $("#proceed").show();
    clearInterval(timer);

  }
  i--;
}, 1000)     


    </script>

</body>

</html>
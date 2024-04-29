<?php
    include('server.php');   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    </head>
    <body>
       <div class="formsBack">

    <?php 
        if(count($error)>0):
    ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <?php
                    foreach($error as $error1){
                        echo  $error1;
                        echo "<br>";
                    }
                    ?>
        </div>
    </div>

                    <?php endif ?>

        <div class="container">
            <h2 class="m-3">Sign In</h2>
            <div class="formArea">
                
    <form class="form-control" action="login.php" method="post">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="userName" placeholder="User Name" name="username" autocomplete="off"> 
        <label for="userName">User Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" autocomplete="off">
        <label for="pass">Password</label>
    </div>
    <div class="text-center">
                    <button type="submit" class="btn btn-warning m-2" name="login">Sign In</button>
                    <a href="register.php" class="btn btn-outline-warning m-2">Sign Up</a>
                    </div>
    </form>
            </div>
        </div>
        </div>
        <script src="js/app.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
    </body>
</html>
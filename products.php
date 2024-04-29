<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    </head>
    <body>
    <header class="h-auto">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <div>
            <a class="navbar-brand" href="#home"><img class="logo" src="images/logo.png" alt="logo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse links" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?#categories">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?#contact">Contact Us</a>
              </li>
            </ul>

        <?php if(isset($_SESSION['username'])){?>
          
            <p class="text-white fs-5 m-2">Welcome  <?php echo $_SESSION['username']; ?></p><a class="btn btn-outline-warning" href="index.php?logout='1'">Log Out</a>
           <?php }
            else
            {
            ?>
                        <div class="signBtns nav-item">
              <a href="login.php" class="btn btn-outline-warning">Sign In</a>
              <a href="register.php" class="btn btn-outline-warning signUpBtn">Sign Up</a>
              </div>
            <?php
            }
        ?>
        </div>
        </div>
        </nav>
    </header>
    <div class="form p-2">
        <h2 class="text-center fw-bolder text-warning h-auto overflow-hidden" style="margin-top: 5%;">All Products</h2>
        <table class="m-auto" width="95%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr>
        <th><strong>Product Name</strong></th>
        <th><strong>Color</strong></th>
        <th><strong>Price</strong></th>
        <th><strong>Image</strong></th>
        <th><strong>Show More</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sql="SELECT * FROM `products` ORDER BY id asc;";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
        <td align="center"><?php echo $row["productName"]; ?></td>
        <td align="center"><?php echo $row["color"]; ?></td>
        <td align="center"><?php echo $row["price"]; ?></td>
        <td align="center"><img width="15%" height="15%" src="images/productsImages/<?php echo $row["img"];?>" alt=""></td>
        <td align="center">
        <a href="" class="btn btn-outline-warning text-dark">Show More</a>
        </td>
        </tr>
        <?php $count++; } ?>
        </tbody>
        </table>
        </div>


        <script src="js/app.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
    </body>
</html>
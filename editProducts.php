<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:9%;">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="admin.php">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="adminProducts.php">Products</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
    <?php
            $id = $_GET['id'];
            $qry1 = mysqli_query($db,"SELECT * FROM `products` WHERE id ='$id'");
            $data = mysqli_fetch_array($qry1);
            ?>
    <div class="formsBack">
        <h2  style="margin-top: 5%;">Edit Product</h2>
        <div class="formArea">
                <form class="form-control" method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" autocomplete="off" required value="<?php echo $data ['productName'];?>"> 
                        <label for="productName">Product Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="color" autocomplete="off" required value="<?php echo $data ['color'];?>" >
                        <label for="color">Color</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="price" placeholder="Price" name="price" autocomplete="off" required value="<?php echo $data ['price'];?>" >
                        <label for="price">Price</label>
                    </div>
                    <div class="text-center">
                    <button class="btn btn-outline-warning m-2" type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>     
            <?php
            if(isset($_POST['update']))
            {
                $productName = $_POST['productName'];
                $color = $_POST['color'];
                $price = $_POST['price'];
            
                $sql1 = "UPDATE `products` SET`productName`='$productName',`color`='$color',`price`='$price' WHERE `id`='$id'";
                $edit = mysqli_query($db,$sql1);
            
                if($edit)
                {
                    mysqli_close($db);
                    header("location:adminProducts.php");
                }
                else
                {
                    echo "Error";
                }
            }
            ?>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
</body>
</html>
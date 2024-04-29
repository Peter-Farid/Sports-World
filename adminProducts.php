<?php include 'server.php'; ?>
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style="margin-left:8%;">
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

<div class="formsBack">
        <h2  style="margin-top: 5%;">Products</h2>
        <div class="form p-2">
<table width="95%" class="m-auto" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Product Name</strong></th>
<th><strong>Color</strong></th>
<th><strong>Price</strong></th>
<th><strong>Image</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql="SELECT * FROM `products` ORDER BY id asc;";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td class="text-light" align="center"><?php echo $row["id"]; ?></td>
<td class="text-light" align="center"><?php echo $row["productName"]; ?></td>
<td class="text-light" align="center"><?php echo $row["color"]; ?></td>
<td class="text-light" align="center"><?php echo $row["price"]; ?></td>
<td align="center"><img width="15%" height="15%" src="images/productsImages/<?php echo $row["img"];?>" alt=""></td>
<td align="center">
<a class="btn btn-outline-warning" href="editProducts.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a class="btn btn-warning" href="deleteProduct.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>

</div>





        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
        <h2  style="margin-top: 5%;">Admin Interface</h2>
        <div class="formArea">
        <form class="form-control h-auto text-center" method="POST">
            <div class="form-floating mb-3 mt-3">
                <input type="search" class="form-control" id="search" placeholder="Search " name="search" autocomplete="off">
                <label for="search">User Search</label>
            </div>
            <button class="btn btn-warning m-2 " name="searchBtn">Search</button>
        </form>
        </div>
        <?php
        include 'server.php';
        if(isset($_POST['searchBtn'])){
            $st = $_POST['search'];
            $query = "SELECT * FROM `users` WHERE `username`='$st'";
            $result = mysqli_query($db,$query);
            if($row = mysqli_fetch_array($result)){
                ?>
                <br>
                <br>
                <center>
                    <table class="border-warning w-75 h-auto text-white text-center">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                        </tr>
                        <?php
                        echo "<tr>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "</tr>";
                        ?>
                        <?php
                        }
                        else
                        {
                            ?>
                            <p class="text-white text-center m-5">
                            <?php echo"Name Doesn't Exist";?>
                            </p>
                            <?php
                        }
                    }
                    ?>
                    </table>
                </center>
    </div>

        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
</body>
</html>
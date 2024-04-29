<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sports World</title> 
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
                <a class="nav-link text-white" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#categories">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact Us</a>
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
    <section class="welcome" id="home" class="sections">
      <div id="slogan">
        <h1>Welcome To The Sports World</h1>
        <p>  The Best Equipment To Make You Fit...</p>
      </div>
      <div id="pageTitle">
        <h3>The Tools To A Perfect Body</h3>
        <p>Sports World Offers A High Quality Sports Tools</p>
        <p>Shop Now For Your Physical Education Equipment and Every Thing Your Body Need</p>
        <a href="" class="btn btn-outline-warning">Show More</a>
      </div>
    </section>
    <section id="about" class="sections row text-center">
      <br>
      <br>
      <h2 class="fw-bolder text-warning mt-2">About Us</h2>
      <div id="aboutImg" class="col-md-4">
        <img src="images/sportsTools.jpg">
      </div>
      <div id="aboutContent" class="col-md-8">
        <h3 class="text-warning overflow-hidden">Sports World Always With You To Reach Your Goals</h3>
        <p>Our presence in the market is like stone as we have a diamond reputation, we are not just
          selling sportswear and fitness equipment only but we do have a great team working for our customer's 
          satisfaction after sales service as all our equipment are guaranteed.</p>
      </div>
    </section>
    <section id="services" class="sections h-auto">
      <br>
      <br>
      <h2 class="fw-bolder text-warning mt-3 overflow-hidden">Services</h2>
      <div class="container-fluid">
        <div class="row text-center m-5">
          <div class="col-lg-4 fs-1">
            <i class="fas fa-dumbbell text-info m-4"></i>
            <h4 class="m-4 fw-bolder text-warning overflow-hidden">Sports Equipments</h4>
            <p class="fs-4">Every Sports Equipment With Highest Quality </p>
          </div>
          <div class="col-lg-4 fs-1 ">
            <i class="fas fa-tshirt text-info m-4"></i>
            <h4 class="m-4 fw-bolder text-warning overflow-hidden">Sports Wear</h4>
            <p class="fs-4">Every Sports Wear With Best Designs And Highest Quality</p>
          </div>
          <div class="col-lg-4 fs-1 overflow-hidden">
            <img class="m-4" src="images/consult.png" width="13%" height="16%">
            <h4 class="m-4 fw-bolder text-warning overflow-hidden">Sports Consulting</h4>
            <p class="fs-4">Every Sports Consulting You Need You Will Get</p>
          </div>
        </div>
      </div>
    </section>
    <section id="categories" class="sections h-auto">
      <br>
      <br>
      <h2 class="fw-bolder text-warning mt-3 h-auto mb-4">Categories</h2>
      <div class="w-auto m-auto">
        <div id="productContainer" class="row">
						<div class="category col-md-6 col-lg-4 col-xl-3 mt-2 w-auto m-auto">
							<div class="card">
                <img src="images/gym.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="overflow-hidden text-warning">GYM Equipments And Clothes</h3>
                  <p class="card-text">Discover a wide range of products covering all disciplines of gymnastics. We offers a range of equipment for physical learning and development.</p>
                </div>
              </div>
						</div>
            <div class="category col-md-6 col-lg-4 col-xl-3 mt-2 w-auto m-auto">
							<div class="card">
                <img src="images/football.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="overflow-hidden text-warning">Football Equipments And Clothes</h3>
                  <p class="card-text">We offers a wide range of products that is very important for football player. Discover all equipent and football clothes available.</p>
                </div>
              </div>
						</div>
            <div class="category col-md-6 col-lg-4 col-xl-3 mt-2 w-auto m-auto">
							<div class="card">
                <img src="images/golf.jpg" class="card-img-top" alt="...">
                <br>
                <div class="card-body">
                  <h3 class="overflow-hidden text-warning">Golf Equipments And Clothes</h3>
                  <br><p class="card-text">Every Golf equipment you need you will get from a big group of products.</p>
                </div>
              </div>
						</div>
            <div class="category col-md-6 col-lg-4 col-xl-3 mt-2 w-auto m-auto">
							<div class="card">
                <img src="images/sports wear.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="overflow-hidden text-warning">Sports Wear And Accessories</h3>
                  <p class="card-text">Every sports wear categories are available with a big varity of models and brands.</p>
                </div>
              </div>
						</div>
        </div>
      </div>
    </section>
    <section id="contact" class="sections position-relative">
      <div id="contactTop">
      <br>
      <br>
      <h2 class="fw-bolder text-warning mt-3 overflow-hidden">Contact Us</h2>
          <div class="contactInfo h-auto p-2 text-xl-start">
            <ul class="list-unstyled ">
              <li class="fs-4"><a href="tel:01XXXXXXXXX" target="_blanck" class="text-decoration-none text-dark"><i class="fas fa-phone-alt text-warning"></i>  01XXXXXXXXX</a></li>
              <li class="fs-4"><a href="mailto:sportsworld2022@gmail.com" target="_blanck" class="text-decoration-none text-dark"><i class="fas fa-envelope text-warning"></i>  sportsworld2022@gmail.com</a></li>
              <li class="fs-4"><a href="https://telegram.me/username" target="_blanck" class="text-decoration-none text-dark"><i class="fab fa-telegram-plane text-warning"></i>  01XXXXXXXXX</a></li>
              <li class="fs-4"><a href="https://wa.me/00201XXXXXXXXX" target="_blanck" class="text-decoration-none text-dark"><i class="fab fa-whatsapp text-warning"></i>  01XXXXXXXXX</a></li>
            </ul>
          </div>
          <div class="mailing p-3 h-auto fs-3">
            <form>
              <h5 class="overflow-hidden">Subscribe to our newsletter</h5>
              <p>Monthly digest of whats new and exciting from us.</p>
              <div class="d-flex w-100 gap-2 justify-content-center">
                <input id="newsletter1" type="text" class="form-control w-auto" placeholder="Email address">
                <button class="btn btn-outline-warning text-dark w-auto" type="button">Subscribe</button>
              </div>
            </form>
          </div>
      </div>
      <footer class="p-2 m-auto w-100 overflow-hidden">
        <div class="my-2 border-top border-warning w-100">
          <p class=" text-white footerPara">&copy; 2021 Sports World Inc. All rights reserved.</p>
          <div class="socialLinks">
            <a class="m-2 link-dark text-warning" href="#"><i class="fab fa-twitter"></i></a>
            <a class="m-2 link-dark text-warning" href="#"><i class="fab fa-instagram"></i></a>
            <a class="m-2 link-dark text-warning" href="#"><i class="fab fa-facebook"></i></a>
          </div>
        </div>
      </footer>
    </section>
    
    
  
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
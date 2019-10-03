<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="pics/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.default.min.css">
    <link rel="stylesheet" href="css/owl-carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.min.css">
    
</head>
<body>

<div class="scroll-top text-center">
    <i class="fab fa-envira"></i>
</div>
    

<section class="header-nav pt-4">
    <div class="logo-search text-white d-flex justify-content-between align-items-center px-5">
        <div class="search">
            <form class="d-flex align-items-center" method="GET" action="#">
                <button type="submit" class="fas fa-search"></button>
                <input type="text" class="form-control head-search" name="search" placeholder="Search" maxlength="20" required>
            </form>
        </div>
        <div class="logo text-center">
            <img src="pics/logo2.png" height="100px">
        </div>
        <a href="tel:" class="number" style="text-decoration:none; color:white;">
            <i class="fas mr-1 fa-phone-volume"></i>
            <span class="number">9813-822-002</span>
        </a>
    </div>
      <div class="menu-icon text-white text-center" onclick="openNav()">
        <i class="fas fa-bars"></i>
    </div>

</section>

<div id="myNav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <img src="pics/logo_footer_x2.png" class="d-block mx-auto" height="50px">
    <div class="mt-5 d-flex align-items-center flex-column">
        <div class="overlay-nav">
        <a class="nav-link active" href="index.php">HOME</a>
        <a class="nav-link " href="about.php">ABOUT US</a>
        <a class="nav-link " href="service.php">SERVICES</a>
        <a class="nav-link " href="gallery.php">GALLERY</a>
        <a class="nav-link " href="service.php#in-touch">MAKE AN APPOINTMENT</a>
        <a class="nav-link " href="contact.php">CONTACT</a>
        </div>
        <form action="#" method="GET">
            <div class="form-wrap d-flex align-items-center my-3">
            <input type="text" class="form-control" placeholder="Search"> 
            <button type="submit" class="fas fa-search mr-2"></button>
            </div>
        </form>
        <div class="social-icons">
            <a href="#" style="color: #3b5998"> <i class="fab mx-3 fa-facebook-f"></i></a>
            <a href="#" style="color: #e4405f"> <i class="fab mx-3 fa-instagram"></i></a>
            <a href="#"  style="color: #00acee"> <i class="fab mx-3 fa-twitter"></i></a>
            <a href="#" style="color: #dd4b39"> <i class="fab mx-3 fa-google-plus-g"></i></a>
        </div>
    </div>
  </div>
</div>


    <nav class="navbar d-none navbar-expand-lg">
        <ul class="navbar-nav mx-auto justify-content-center align-items-center">
            <li class="nav-item"><a class="nav-link active" href="index.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
            <li class="nav-item"><a class="nav-link" href="service.php">SERVICES</a></li>
            <li class="nav-item"><a class="nav-link" href="gallery.php">GALLERY</a></li>
            <li class="nav-item"><a class="nav-link" href="service.php#in-touch">MAKE AN APPOINTMENT</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
        </ul>
    </nav>

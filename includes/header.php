<?php  
    require "config/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Namasta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=BASE_URL;?>assets2/img/favicon.png" rel="icon">
  <link href="<?=BASE_URL;?>assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=BASE_URL;?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=BASE_URL;?>assets2/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=BASE_URL;?>assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<audio id="player" autoplay loop>
    <source src="<?=BASE_URL;?>assets2/mp3/Genshin Impact THEME SONG!.mp3" type="audio/mp3">
</audio>
<script>
  var audio = document.getElementById("player");
  audio.volume = 0.1;
</script>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> 08123910556
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 07:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">Id</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Namasta</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="<?=BASE_URL;?>admin/login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
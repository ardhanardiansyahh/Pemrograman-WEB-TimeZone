<?php

include "database.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION["email"])) {
    echo "<script> alert('You have to login first');</script>";
    echo "<script> location= 'login.php'; </script>";
	exit;
}

$email=$_SESSION["email"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TimeZone Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    
    <div class="container d-flex align-items-center">

    <h1 class="ml1">
      <span class="text-wrapper">
        <span class="line line1"></span>
        <span class="letters">TimeZone</span>
        <span class="line line2"></span>
      </span>
    </h1>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="./register.php">Registration</a></li>
          <li><a class="nav-link scrollto" href="./login.php">Login</a></li>
		  <li><a class="nav-link scrollto" href="./forums/index.php">Forums</a></li>
        </ul>
      </nav>
    </div>

    
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <svg viewbox="0 0 100 20">
            <defs>
              <linearGradient id="gradient">
                <stop color="#000"/>
              </linearGradient>
              <pattern id="wave" x="0" y="-0.5" width="100%" height="100%" patternUnits="userSpaceOnUse">
                <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
                  <animateTransform
                      attributeName="transform"
                      begin="0s"
                      dur="1.6s"
                      type="translate"
                      from="0,0"
                      to="30,0"
                      repeatCount="indefinite" />
                </path>
              </pattern>
            </defs>
            <text text-anchor="middle" x="40" y="15" font-size="16" fill="blue" fill-opacity="0.4">TimeZone</text>
            <text text-anchor="middle" x="40" y="15" font-size="16" fill="url(#wave)"  fill-opacity="1">TimeZone</text>
          </svg>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/timezone.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TimeZone</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TinDog</title>

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/bs/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <!-- Bootstrap scripts -->
  <script src="js/bsjs/bootstrap.bundle.min.js"></script>
</head>

<body>

  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">tindog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#pricing" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="#cta" class="nav-link">Download</a>
            </li>
            <li class="nav-item">
              <a href="signup.php" class="nav-link">Sign Up Now</a>
            </li>
          </ul>
        </div>
      </nav>



      <!-- Title -->

      <div class="row">
        <div class="col-lg-6">
          <h1>Meet new and interesting dogs nearby.</h1>
          <button type="button" class="btn btn-lg btn-dark dl-btn"><i class="fa-brands fa-apple"></i> Download</button>
          <button type="button" class="btn btn-lg btn-outline-light dl-btn"><i class="fa-brands fa-google-play"></i>
            Download</button>
        </div>
        <div class="col-lg-6">
          <img class="title-img" src="images/iphone6.png" alt="iphone-mockup">
        </div>
      </div>
    </div>

  </section>


  <!-- Features -->

  <section id="features">

    <div class="row">
      <div class="col-lg-4 feat-box">
        <i class="fa-solid fa-circle-check fa-4x feat-ico"></i>
        <h3>Easy to use.</h3>
        <p>So easy to use, even your dog could do it.</p>
      </div>
      <div class="col-lg-4 feat-box">
        <i class="fa-solid fa-bullseye fa-4x feat-ico"></i>
        <h3>Elite Clientele</h3>
        <p>We have all the dogs, the greatest dogs.</p>
      </div>
      <div class="col-lg-4 feat-box">
        <i class="fa-solid fa-heart fa-4x feat-ico"></i>
        <h3>Guaranteed to work.</h3>
        <p>Find the love of your dog's life or your money back.</p>
      </div>
    </div>

  </section>


  <!-- Testimonials -->

  <section id="testimonials">

    <div id="test-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <h2>I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
          <img class="test-img" src="images/dog-img.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>

        <div class="carousel-item">
          <h2>My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
          <img class="test-img" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#test-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#test-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>A Plan for Every Dog's Needs</h2>
    <p>Simple and affordable price plans for your and your dog.</p>

    <div class="row">
      <div class="pricing-col col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Chihuahua</h3>
          </div>
          <div class="card-body">
            <h2>Free</h2>
            <p>5 Matches Per Day</p>
            <p>10 Messages Per Day</p>
            <p>Unlimited App Usage</p>
            <div class="d-grid">
              <button class="btn btn-lg btn-outline-dark" type="button">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <div class="pricing-col col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Labrador</h3>
          </div>
          <div class="card-body">
            <h2>₱2500/mo</h2>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <div class="d-grid">
              <button class="btn btn-lg btn-dark" type="button">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <div class="pricing-col col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Mastiff</h3>
          </div>
          <div class="card-body">
            <h2>₱4500/mo</h2>
            <p>Pirority Listing</p>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <div class="d-grid">
              <button class="btn btn-lg btn-dark" type="button">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <!-- Call to Action -->

  <section id="cta">

    <h3 class="cta-heading">Find the True Love of Your Dog's Life Today.</h3>
    <button type="button" class="btn btn-lg btn-dark dl-btn"><i class="fa-brands fa-apple"></i> Download</button>
    <button type="button" class="btn btn-lg btn-light dl-btn"><i class="fa-brands fa-google-play"></i> Download</button>


  </section>


  <!-- Footer -->

  <footer id="footer">

    <div class="row">
      <div class="col-lg">
        <i class="fa-brands fa-twitter ico"></i>
        <i class="fa-brands fa-facebook ico"></i>
        <i class="fa-brands fa-instagram ico"></i>
        <i class="fa-solid fa-envelope ico"></i>
        <p>© Copyright TinDog</p>
      </div>
    </div>


    

    <div class="d-grid">
    <a class="btn btn-lg btn-outline-dark" href="logout.php">Logout</a>
    </div>
  </footer>


  <script src="js/bsjs/index.js" charset="utf-8"></script>
</body>

</html>
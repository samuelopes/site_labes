<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>LabES</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <?php
    include_once("Estruturas/top_header.php");
  ?>
  <!-- navbar -->
  <?php
    include_once("Estruturas/navbar.php");
  ?>
</header>
<!-- /header -->

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><h2 class="text-primary font-secondary">Contact Us</h2></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
        <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
        <p>71 Shelton Street<br>London WC2H 9JQ England</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="-22.00704474" data-longitude="-47.89489746"></div>
</section>
<!-- /gmap -->

<!-- footer -->
<?php
  include_once("Estruturas/footer.php");
?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
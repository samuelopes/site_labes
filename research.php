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
          <li class="list-inline-item"><h2 class="text-primary font-secondary">Our Research Areas</h2></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- research -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-1.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Geography</h4>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-2.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Mathematical</h4>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-3.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Humanities</h4>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-4.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Physical & Sciences</h4>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-5.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Biological Sciences</h4>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-6.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Archaeology</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /research -->

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
<?php 
  include("Class/ClassCrud.php");
?>

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
          <li class="list-inline-item"><h2 class="text-primary font-secondary">Our Professors</h2></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list
        <ul class="list-inline text-center filter-controls mb-5">
          <li class="list-inline-item m-3 text-uppercase" data-filter=".arts">arts</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".bio-science">biological science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".business-study">business studies</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".law">law</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".pharmacy">pharmacy</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".science">science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".social-science">social science</li>
        </ul>-->
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">
      <?php
        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB("*", "professor", "", array());

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){
      ?>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.php?id_prof=<?php echo $Fetch['id_professor']; ?>">
              <h4 class="card-title"><?php echo utf8_encode($Fetch['nome']); ?></h4>
            </a>
            <!--<p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>-->  
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
<!-- /teachers -->

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
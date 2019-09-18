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

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Software Engineering Lab</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">LabES has as main objective to support the teaching, research and dissemination of knowledge in the area of Software Engineering</p>
            <a href="about.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">View More</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Our Professors</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Our professors have a great knowledge of what we are researching</p>
            <a href="teacher.php" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">View More</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Our Research Areas</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Our research areas have a high connection with the social context that we live in</p>
            <a href="research.php" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About LabES</h2>
        <p>Created in 1993, the Laboratory of Software Engineering of ICMC-USP (LabES) has as main objective to support the teaching, research and dissemination of knowledge in the area of Software Engineering. Currently the laboratory has 11 doctorate professors, responsible for the orientation of postgraduate students (master's and doctorate) and undergraduate (scientific initiation). The research conducted basically focuses on the establishment of processes, methodologies and tools for software development.</p>
        <a href="about.php" class="btn btn-primary-outline">View more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-us.png" alt="about image" height="504">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Professors</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="teacher.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">View all</a>
          </div>
        </div>
      </div>
      <?php
        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB("*", "professor", "", array());
        
        # variavel para impedir que mais de 6 professores sejam mostrados
        $i = 0;
        while (($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) and ($i<6)){
          $i++;
      ?>
        <!-- teacher -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-4.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.php?id_prof=<?php echo $Fetch['id_professor']; ?>">
                <h4 class="card-title"><td><?php echo $Fetch['nome']; ?></td></h4>
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
  <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="teacher.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">View All</a>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Research Areas</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="courses.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">System-of-Systems</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p> 
        <a href="course-single.php" class="btn btn-primary btn-sm">Software Test</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">Software Architecture</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        <a href="course-single.php" class="btn btn-primary btn-sm">See More</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">Software Architecture</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        <a href="course-single.php" class="btn btn-primary btn-sm">See More</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">Software Architecture</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        <a href="course-single.php" class="btn btn-primary btn-sm">See More</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-5.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">Software Architecture</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">See More</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-6.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <!--<li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>-->
        </ul>
        <a href="#">
          <h4 class="card-title">Software Architecture</h4>
        </a>
        <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">See More</a>-->
      </div>
    </div>
  </div>
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">View all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<!--<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
        <h2 class="section-title text-white">Training In Advannce Networking</h2>
        <a href="contact.html" class="btn btn-secondary">join now</a>
      </div>
    </div>
  </div>
</section>-->
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/campus_icmc.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://www.youtube.com/watch?v=bwzYzp6RVAk" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">About ICMC</h2>
          <p>The Instituto de Ciências Matemáticas e de Computação (ICMC) at University of São Paulo (USP) is one of the most important Brazilian institutions in the fields of Computer Science, Mathematics, Applied Mathematics and Statistics.</p>
          <p>Our mission is to produce, evolve and disseminate knowledge and innovation in the areas of Mathematics, Computer Science and Statistics, train human resources at undergraduate and graduate levels and promote cultural and social insertion actions. This mission is defined by its commitment to the need for social, scientific and technological evolution in the region of São Carlos, the state of São Paulo and Brazil.</p>
          <p>The ICMC's vision is to become a worldwide reference in teaching and research contributing decisively to the evolution of knowledge in its areas of expertise, training high-level human resources and supporting the scientific, technological and social development of the region, state and country.</p>
          <a href="https://www.icmc.usp.br/en/" class="btn btn-primary btn-sm" target="_BLANK">See More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

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
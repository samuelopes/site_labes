<?php 
  include("Class/ClassCrud.php");

  
  if (isset($_GET['id_prof'])){
    $id_professor = $_GET['id_prof'];
  }
  else{
    header('Location: index.php');
  }

  $Crud = new ClassCrud();
  $BFetch = $Crud->selectDB("*", "professor", "WHERE id_professor = ".$id_professor, array());
  $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);

  #caso o professor não seja encontrado, retornar uma mensagem de erro e voltar a página dos professores
  if($Fetch == false){
    header('Location: teacher.php');
  }
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Our Professor</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $Fetch['nome']; ?></li>
        </ul>
        <!--<p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="images/teachers/teacher-4.jpg" height="418" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3 class="mb-4"><?php echo $Fetch['nome']; ?></h3>
        <br>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">CONTACT INFO</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i><?php echo $Fetch['email']; ?></a></li>
              <li class="mb-3"><a class="text-color" href="<?php echo $Fetch['link-lattes']; ?>" target="_blank"><i class="ti-link mr-2"></i>CV Lattes</a></li>
              <!--<li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>Elisa Yumi Nakagawa</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>Elisa Yumi Nakagawa</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>Elisa Yumi Nakagawa</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                  Cremazie,Quebec</a></li>-->
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">CAREER SUMMARY</h4>
            <ul class="list-unstyled">
              <!--<h6 class="text-color">Formação acadêmica/Titulação</h6>
              <p class="mb-5"><strong>Graduação</strong><br>Universidade de São Paulo /ICMC, USP/ICMC, Brasil<br><strong>Mestrado</strong><br>Universidade de São Paulo /ICMC, USP/ICMC, Brasil.</p>-->
              <li class="mb-2"><strong>Graduação: </strong><br>Universidade de São Paulo/ICMC (Brazil)</li>
              <li class="mb-2"><strong>Mestrado: </strong><br>Universidade de São Paulo/ICMC (Brazil)</li>
              <li class="mb-2"><strong>Doutorado: </strong><br>Universidade de São Paulo/ICMC (Brazil)</li>
              <li class="mb-2"><strong>Pós-Doutorado: </strong><br>Universidade de São Paulo/ICMC (Brazil)</li>
              <li class="mb-2"><strong>Livre-Docência: </strong><br>Universidade de São Paulo/ICMC (Brazil)</li>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="mb-4">WHO AM I?</h4>
        <p class="mb-5"><?php echo utf8_encode($Fetch['descricao']); ?></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <h4 class="mb-4">RESEARCH AREAS</h4>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
          <div class="card-body">
            <!--<ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>-->
            <a href="course-single.html">
              <h4 class="card-title">Software Architecture</h4>
            </a>
            <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
            <a href="course-single.html" class="btn btn-primary btn-sm">View more</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-5.jpg" alt="course thumb">
          <div class="card-body">
            <!--<ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>-->
            <a href="course-single.html">
              <h4 class="card-title">Software Architecture</h4>
            </a>
            <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
            <a href="course-single.html" class="btn btn-primary btn-sm">View more</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-6.jpg" alt="course thumb">
          <div class="card-body">
            <!--<ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>-->
            <a href="course-single.html">
              <h4 class="card-title">Software Architecture</h4>
            </a>
            <!--<p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
            <a href="course-single.html" class="btn btn-primary btn-sm">View more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teacher details -->

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
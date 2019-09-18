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
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="https://icmc.usp.br/en/" target="_BLANK">ABOUT ICMC</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/icmc.usp/" target="_BLANK"><i class="ti-facebook"></i></a></li>
            <!--<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>-->
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.linkedin.com/school/icmc-usp/about/" target="_BLANK"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://instagram.com/icmc_usp?igshid=1riuo7a90gjx1" target="_BLANK"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <!--<div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" height="68"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="teacher.html">Professors</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="research.html">Research Areas</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item @@blog invisible">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>
            <li class="nav-item dropdown view invisible">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Teacher</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
              <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>elisa@icmc.usp.br</a></li>
              <li class="mb-3"><a class="text-color" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4790213Y9"><i class="ti-link mr-2"></i>CV Lattes</a></li>
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
        <p class="mb-5">É professora associada do Departamento de Sistemas de Computação do Instituto de Ciências Matemáticas e de Computação da Universidade de São Paulo (ICMC/USP). Atua no Programa de Pós-Graduação em Ciências de Computação e Matemática Computacional do ICMC/USP (Nível 7 da Capes) como orientadora de alunos de mestrado e doutorado e como responsável por disciplinas de pós-graduação. Também é co-orientadora no PhD-Program of Computer Science e do Regular Master in Computer Science da University of Kaiserslautern, Alemanha, e do Groningen Graduate School of Science da University of Groningen, Holanda. É curadora do Museu de Computação do ICMC/USP e participa ativamente de atividades de cultura e extensão na USP, além de ser coordenadora de diversos projetos de cultura e extensão nos últimos anos. É coordenadora do Projeto Memória Virtual. Tem sido paraninfa e professora homenageada de turmas de graduação. É assessora científica de agências de fomento à pesquisa nacional e internacional (Netherlands Organisation for Scientific Research (NWO), Fundação de Amparo à Pesquisa do Estado de São Paulo (FAPESP), Fundação de Amparo à Pesquisa do Estado do Amazonas (FAPEAM) e da Fundação de Amparo à Ciência e Tecnologia do Estado de Pernambuco (FACEPE)), tem sido coordenador de eventos nacionais e internacionais, bem como membro de comitês de programa de várias conferências e workshops e revisora em revistas nacionais e internacionais, tais como a IEEE Software, IEEE Transactions on Software Engineering (TSE), Information and Software Technology (IST), IEEE Computer, Journal of Systems and Software (JSS), Data & Knowledge Engineering Journal (DKE) e Concurrency and Computation. Tem sido coordenadora de projetos de pesquisa financiados pela FAPESP, Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq), Coordenação de Aperfeiçoamento de Pessoal de Nível Superior (Capes) e pela Netherlands Universities Foundation for International Cooperation (Nuffic). Em termos de formação acadêmica, conduziu seu projeto de pós-doutorado em 2014-2015 na Université Bretagne Sud, França, e em 2011-2012 na Fraunhofer Institute for Experimental Software Engineering (Fraunhofer IESE), Alemanha. Possui o título de livre docência (2013), de doutor (2006) e de mestre (1998) em Ciências de Computação e Matemática Computacional pela USP. É bacharel em Ciências de Computação também pela USP (1994). Tem experiência na área de Engenharia de Software, atuando principalmente nos seguintes temas: arquitetura de software, arquitetura de referência, sistemas-de-sistemas, linha de produto de software, teste de software, ontologia e software livre. Dentre os temas pesquisados, tem-se nas pesquisas sobre o estabelecimento, representação, avaliação e utilização de arquiteturas de referência. Possui artigos publicados em periódicos internacionais importantes da área e em conferências nacionais e internacionais, podendo-se citar o JSS, IST, IEEE Software, IEEE Systems Journal, ICSA (IEEE/IFIP Conference on Software Architecture) e ECSA (European Conference on Software Architecture). É membro da Sociedade Brasileira de Computação (SBC) e da IEEE Computer Society. É também representante institucional da SBC no ICMC/USP.</p>
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
<footer>
  <!-- newsletter -->
  <!--<div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>-->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <a class="logo-footer d-flex justify-content-center" href="index.html"><img class="mb-4" src="images/logo.png" height="68" alt="logo"></a>
      <div class="row">
        <div class="col-lg-12 col-sm-12 mb-5 mb-lg-0 d-flex justify-content-center">
          <!-- logo -->
          <ul class="list-unstyled text-center">
            <li class="mb-2">Laboratório de Engenharia de Software</li>
            <li class="mb-2">Universidade de São Paulo</li>
            <li class="mb-2">Instituto de Ciências Matemáticas e Computação</li>
            <li class="mb-2">São Carlos - SP</li>
            <li class="mb-2">Brasil</li>
          </ul>
        </div>
        <!-- company 
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
          </ul>
        </div>-->
        <!-- links
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="event.html">Events</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
          </ul> 
        </div>-->
        <!-- support 
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
          </ul>
        </div>-->
        <!-- support
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Theme By <a href="https://themefisher.com">themefisher.com</a></p> . All Rights Reserved.
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://dribbble.com/themefisher"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
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
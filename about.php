<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animated.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- <script src="js/javascript.js"></script> -->
  <script src="https://use.fontawesome.com/57a0a1faad.js"></script>
  <title>zHeroDev</title>
  <link rel="icon" type="image/ico" href="img/zD_logo.ico">
</head>

<!-- Star Body -->
<body id="particleWrapper">
  <!-- particles.js container -->
  <div id="particles-js"></div>
  <header class="header particle-title" >

    <nav class=" animated fadeIn delay-1s navbar navbar-expand-lg">
      <!-- Logo -->
      <a class="navbar-logo" href="https://zherodev.herokuapp.com/">
        <img class ="logo" src="img/zherodev_logo.png" alt="">
      </a>
      <!-- boton toggle cuando la vista es en movil -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <!-- lineas del boton -->
        <span class="line"></span> 
        <span class="line"></span> 
        <span class="line" style="margin-bottom: 0;"></span>

      </button>
      <!-- Opciones de menu (contenedo) -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <!-- Opciones de menu lista -->
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active nav_background" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav_background" href="about.php">Sobre m??</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav_background" href="portfolio.php">Portfolio</a>
          </li>
        </ul>
      </div>
    </nav>  
    <!-- Nombre  -->
    <div class="container-fluid">
      <div class="row">
        <div class="animated fadeIn delay-2s col-lg-6">
        <h1 class="main_title about_question">??Quien soy?</h1> 
        <h5 class="about_description">Mi nombre es Eiborth Gomez Martinez, soy desarrollador freelance. Tengo experiencia de m??s de 5 a??os como desarrollador software. Estoy enfocado en el desarrollo de apps moviles y web.
        Para mi lo mejor es aprender.
        <br>
        <br>
        Considero la comunicaci??n y el uso de las metodolog??as ??giles, herramientas esenciales para lograr entregables de calidad. S?? consideras que estas habilidades te pueden ser ??tiles, estoy a la disposici??n de conversar contigo.
      </h5>   
        

        </div>
        <div class="animated fadeIn delay-2s col-lg-6">
         <div class="about_intro vanish_effect"  alt="intro"></div>   
       </div>
     </div>
   </div>
   <!-- Pie de pagina -->
   <footer  class="main-footer  animated fadeIn delay-1s">
    <div class="container ">
      <div class="row web_footer_portfolio web_footer">
        <div class="col-sm-12">
          <div class="copyright">
            Copyright ?? 2021 <a  href="https://zherodev.herokuapp.com/">zherodev | by Eiborth G??mez</a>
          </div>
          <ul class="copyright social-links" >      
             <li ><a href='https://www.linkedin.com/in/eiborth-g%C3%B3mez-zherodev/' target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>  
      </div>
    </div>
  </footer>
</header>

<!-- agrega un wrapper para asegurarse de que el t??tulo no se salga del ??rea de part??culas -->

<script src="js/particles.min.js"></script>
<script src="js/particulas.js"></script>
</body>
<!-- End Body -->

</html>
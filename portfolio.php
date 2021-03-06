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
    <!-- projects  -->
    <div class="container animated fadeIn delay-1s">   
    <div class="row">       
      <div class="col-md">        
          <div class="card ">
            <img class="card-img-top" src="img/odig_portfolio.png">          
            <div class="card-body">
              <h4 class="card-title" >Odig - App movil</h4>
              <p class="card-text">Ahorra de la mejor manera enfocandote en un solo objetivo, estableciendo una meta fija, el valor de tu meta y mostrando cuanto llevas <a href="apks/Odig.apk">Ver apk.</a></p>
              <!-- <a href="#" class="btn btn-primary">Entrar</a> -->
            </div>
          </div>          
      </div>    

       <div class="col-md">        
           <div class="card ">
            <img class="card-img-top" src="img/myform_portfolio.png">            
            <div class="card-body">
              <h4 class="card-title" >My form - App movil</h4>
              <p class="card-text">Encargada de llevar un conteo de metas de forma individual por cada usuario, mostrando informacion  respaldada en tiempo real <a href="apks/Myform.apk">Ver apk.</a></p>
              <!-- <a href="#" class="btn btn-primary">Entrar</a> -->
            </div>
          </div>      
      </div>

      <div class="col-md">        
          <div class="card ">
            <img class="card-img-top" src="img/alcambio_portfolio.png">            
            <div class="card-body">
              <h4 class="card-title">Al cambio - App movil</h4>
              <p class="card-text">Ayuda a visualizar y realizar el calculo de cambio de algunas monedas permitiendo que el usuario ingrese la la tasa y la moneda junto a la cantidad <a href="apks/Alcambio.apk">Ver apk.</a></p>
              <!-- <a href="#" class="btn btn-primary">Entrar</a> -->
            </div>
          </div>          
      </div>

    </div>

  </div>

  <div class="container animated fadeIn delay-1s">   
    <div class="row">
      <div class="col-md">        
          <div class="card ">
            <img class="card-img-top" src="img/maxicolors_portfolio.png">            
            <div class="card-body">
              <h4 class="card-title">Servicios maxicolors - Pagina web</h4>
              <p class="card-text">Ofreciendo servicio de latoneria y pintura maxicolors trabaja con materiales de alta calidad como <a href="https://serviciosmaxicolors.herokuapp.com/" target="_blank">Ver proyecto.</a></p>
              <!-- <a href="#" class="btn btn-primary">Entrar</a> -->
            </div>
          </div>          
      </div>
      <div class="col-md">        
          <div class="card ">
            <img class="card-img-top" src="img/brutal_portfolio.png">            
            <div class="card-body">
              <h4 class="card-title">Brutal player - Pagina web</h4>
              <p class="card-text">Donde comprar y cambiar tus video juegos brutal player es una opcion para los amantes del gaming <a href="https://brutalp.herokuapp.com/" target="_blank">Ver proyecto.</a></p>
              <!-- <a href="#" class="btn btn-primary">Entrar</a> -->
            </div>
          </div>          
      </div>
      <div class="col-md">        
          <!-- <div class="card">
            <img class="card-img-top" src="img/myform_portfolio.png">            
            <div class="card-body">
              <h4 class="card-title">Titulo de la tarjeta 1</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem, 
                                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                    nec tortor sit amet, maximus mattis dui. </p>
              <a href="#" class="btn btn-primary">Entrar</a>
            </div>
          </div>    -->       
      </div>

       
    </div>

  </div>
   <!-- Pie de pagina -->
   <footer  class="main-footer animated fadeIn delay-1s">
    <div class="container ">
      <div class="row web_footer_portfolio_fix web_footer">
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

<script src="js/javascript.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particulas.js"></script>
</body>
<!-- End Body -->

</html>
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
  <script src="js/javascript.js"></script>
	<title>Document</title>
</head>

<!-- Star Body -->
<body>
<header class="header">
  <nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <a class="navbar-logo" href="#">
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
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>  

   <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
          <h1 class="nombre animated fadeIn delay-5s" >EIBORTH GÓMEZ</h1>
          <h5 class="maquina_escribir " id="texto" ></h5>       
        </div>
        <div class="animated fadeIn delay-1s col-lg-6">
           <div class="proyectos_intro"  alt="intro"></div>   
        </div>
    </div>
</div>
</header>
  <script src="js/javascript_second.js"></script>
</body>
<!-- End Body -->

</html>
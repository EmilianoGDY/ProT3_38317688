<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicio</title>
    <!-- Links de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link Estilos CSS -->
    <link rel="stylesheet" href="estilos.css">
    <!-- Links Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Barra de Navegacion con Bootstrap  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <img src="img/imagen2.png" class="logo" alt="..." width="95px" height="60px">
          <a class="navbar-brand" href="inicio.php">Tus Clases de Guitarra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" href="inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="QuienesSomos.html">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Acercade.html">Acerca de</a>
              </li>
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo htmlspecialchars($usuario); ?>
                </button>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="index.php">Cerrar Sesion</a></li>
                 </ul>
                </div>
            </ul>
           
          </div>
        </div>
    </nav>
    <!-- Fin Barra de Navegacion -->

    <div class="ContPpal">
    <h1 class="usuario">Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h1>
        <h1>Bienvenido a Tus Clases de Guitarra</h1>
        <!-- Carrusel con BootStrap -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/car1.avif" class="img-fluid d-block  mx-auto w-50" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h3>Guitarra Clasica</h3>
                  <!-- <p id="text">En este curso aprenderas a ejecutar la guitarra clasica</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/car3.jpg" class="img-fluid d-block  mx-auto w-50" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Guitarra Electrica</h3>
                  <!-- <p id="text">Tambien tenemos profesores especializados en guitarra electrica</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/car2.avif" class="img-fluid d-block  mx-auto w-50" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Clases Grupales</h3>
                  <!-- <p id="text">Podras contactarte con otros alumnos para tener clases grupales</p> -->
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Cierre de Carrusel con Boostrap -->

        <p>
            ¿Quieres aprender a tocar la guitarra desde la comodidad de tu hogar? ¡Ahora es posible con nuestras clases de guitarra online! En "Tus Clases de Guitarra", ofrecemos lecciones personalizadas para todos los niveles, desde principiantes hasta avanzados.

            Nuestros instructores son músicos profesionales con años de experiencia en enseñanza y actuación. Te guiarán paso a paso, adaptándose a tu ritmo y estilo musical preferido. Además, podrás acceder a una amplia biblioteca de recursos, incluyendo tutoriales en video, tablaturas, y ejercicios prácticos. 


            
        </p>

        <h3>¿Por qué elegirnos?</h3>

        <ul>
            <li>Flexibilidad: Aprende a tu propio ritmo, con horarios que se adaptan a tu vida.</li>
            <li>Calidad: Clases en vivo y grabadas con la mejor calidad de sonido y video.</li>
            <li>Comunidad: Únete a nuestra comunidad de estudiantes y participa en foros, sesiones grupales y eventos en vivo.</li>

        </ul>
            


       <p> No esperes más para convertirte en el guitarrista que siempre soñaste ser. ¡Regístrate hoy y empieza tu viaje musical con "Tus Clases de Guitarra"!</p>  
        
       
    </div>
</body>
</html>
<!--?php
require 'vistas/header.php';
?>

<h1>esta es una prueba para verifica el login</h1>
<a href="../funciones/cerrarSesionCliente.php">Cerrar sesion</a>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/StyleviewClient.css">
    <link rel="stylesheet" href="../mobile-style.css">
</head>
<body>
    <!--Antiguo navbar
    <nav class="navbar">
        <h1 class="logo">UNI-BANK</h1>
        <ul class="nav-links">
            <li class="active"><a href="index.php"></a>Home</li>
            <li><a href="#"></a>Home</li>
            <li><a href="#"></a>Home</li>
            <li class="ctn"><a href="index.php"></a>Cerrar Sesion</li>
        </ul>
        <img src="../assets/menu-button.png" alt="" class="menu-btn">

    </nav>
-->
    <nav class="navbar">
        <!--<a href="#" class="logo">UNIBANK</a>-->
        <div class="logo">
          <img src="../assets/unibank.png" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Cerrar Sesion</a></li>
            </ul>
        </div>
        <img src="../assets/menu-button.png" alt="menu hamburger" class="menu-hamburger">
    </nav>
    <header>
        <div class="header-content">
            <h2>!Bienvenido usuario!</h2>
            <div class="line"></div>
            <h1>Eres el mejor</h1>
            <!--Boton<a href="#" class="ctn">random</a>-->
        </div>
    </header>
    
    <!--    Seccion de servicios antiguo
    <section class="events">
        <div class="title">
            <h1>Servicios</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="../assets/pexels-photo-900102.jpeg" alt="">
                <h4></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="ctn">Solicitar</a>
            </div>
            <div class="col">
                <img src="../assets/pexels-photo-900102.jpeg" alt="">
                <h4></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="ctn">Solicitar</a>
            </div>
        </div>
    </section>-->
    <!--Seccion nueva-->
    <div class="container">
      <div class="card">
        <figure>
          <img src="../assets/pexels-photo-900102.jpeg">
        </figure>
        <div class="contenido">
          <h3>Prestamo</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
          <a href="#">Leer mas</a>
        </div>
      </div>
      <div class="card">
        <figure>
          <img src="../assets/pexels-photo-900102.jpeg">
        </figure>
        <div class="contenido">
          <h3>Estado de cuenta</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
          <a href="#">Leer mas</a>
        </div>
      </div>
    </div>
      <!--Comienza el footer-->
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">Acerca de nosotros</h4>
          <p class="text-muted">Somos un equipo de desarrolladores de la carreara de ingenieria de software de la Facultad de ingenieria electromecanica de la UdeC</p>
          <p class="pt-4 text-muted">Copyright ©2022 All rights reserved | made by:
            <span> Equipo 2 Ing de software 3-D</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Contactanos</h4>
          <p class="text-muted">Mantente actualizado</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Siguenos</h4>
          <p class="text-muted">Nuestras redes sociales: </p>
          <div class="column text-light">
            <a href="#"> <i class="fab fa-facebook-f pl-3"></i> </a>
            <a href="#"> <i class="fab fa-instagram pl-3"></i> </a>
            <a href="#"> <i class="fab fa-twitter pl-3"></i> </a>
            <a href="#"> <i class="fab fa-youtube pl-3"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

<!--Antiguo navbar
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>-->
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
</body>
</html>

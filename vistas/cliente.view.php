<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unibank Te da la bienvenida!</title>
    <!--Agregue prueba cards
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    fin-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
      </div>
      <div class="welcome">
        <h1>¡Bienvenido <?php echo strtoupper("$_SESSION[nombre]") ?> !</h1>
      </div>
    </header>

    <div class="menu__side" id="menu_side">

    <a href="index.php">
                <div class="name__page">
                  <i class="fas fa-university"></i>
                  <h4>Unibank</h4>
                </div>             
            </a>

        <div class="options__menu">	

            <a href="index.php" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="./movimientos/transferencia.php">
                <div class="option">
                    <i class="fas fa-exchange"></i>
                    <h4>Transferencias rapidas</h4>
                </div>
            </a>
            
            <a href="./consultas.php">
                <div class="option">
                    <i class="fas fa-piggy-bank"></i>
                    <h4>Consulta</h4>
                </div>
            </a>

            <a href="./funciones/cerrarSesion.php">
                <div class="option">
                    <i class="fas fa-sign-out"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>
        </div>
    </div>

    <main>
    <div class="slider">
      <ul>
        <li><img src="assets/pexels-photo-452738.jpeg" alt="" /></li>
        <li><img src="assets/pexels-photo-636243.jpeg" alt="" /></li>
        <li><img src="assets/pexels-photo-900102.jpeg" alt="" /></li>
        <li><img src="assets/pexels-photo-636243.jpeg" alt="" /></li>
      </ul>
    </div>
   <div class="informacion">
      <h1>¡Te da la bienvenida Unibank!</h1><br>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis perferendis iure eaque repudiandae optio animi fuga facere sequi praesentium, distinctio, nulla adipisci iusto ea! Vel eius deserunt enim facere aspernatur!</p> <br>

      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident adipisci beatae impedit quia, deleniti quasi sequi iusto exercitationem nihil nulla, laboriosam dolore corrupti fuga officiis? Odit a mollitia id magnam amet delectus quia blanditiis reprehenderit explicabo eveniet! Rem voluptatum explicabo ipsum quae, dolorum, laudantium doloribus a, illum saepe sapiente accusantium dicta reiciendis? Amet iure porro voluptatum error fugit odit voluptas?</p>  
    </div>
    <div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./assets/img/junior.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">Acerca de..</span>
        <div class="blog-slider__title">Cuenta Junior</div>
        <div class="blog-slider__text">
            <p>Sin comision hasta los 18 años. </p>
            <p>Sin monto de apertura.</p>
        </div>
        <a href="#" class="blog-slider__button">Conocer</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./assets/img/universitaria.jpeg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">Acerca de..</span>
        <div class="blog-slider__title">Cuenta Universitaria</div>
        <div class="blog-slider__text">
            <p>Acceso a la Banca Digital sin costo.</p>
            <p>Sin comisión hasta los 31 años.</p>
            <p>Acceso a Mis Metas.</p>
        </div>
        <a href="#" class="blog-slider__button">Conocer</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./assets/img/supernomina.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">Acerca de..</span>
        <div class="blog-slider__title">SúperNómina de Unicuenta</div>
        <div class="blog-slider__text">
            <p>Acceso a la Banca Digital sin costo.</p>
            <p>Acceso a Mis Metas y Dinero Creciente.</p>
            <p>Seguros y asistencias sin costos.</p>
        </div>
        <a href="#" class="blog-slider__button">Conocer</a>
      </div>
    </div>
    
  </div>
  <div class="blog-slider__pagination"></div>
    </div>
        <div class="card-list">
        <article class="card">
            <div class="card-image">
               <img src="./assets/img/foto3.jpg" alt="una foto">
           </div>
           <div class="card-header">
               <a>
                Una nueva vida. 
                <p>No dejes pasar esta increible oferta que Unibank tiene para ti.
                </p>  
            </a>
           </div>
           <div class="card-footer">
               <div class="card-meta card-meta--date">
                    <img src="./assets/calendario.svg" alt="calendario">
                    Feb01, 2022
                </div>
           </div>
       </article>    
       <article class="card">
           <div class="card-image">
               <img src="./assets/img/foto2.jpg" alt="una foto">
           </div>
           <div class="card-header">
               <a>
                Estrena auto. 
                <p>Esta navida con tu crédito Unibank estrena un auto nuevo.
                </p>
               </a>
           </div>
           <div class="card-footer">
               <div class="card-meta card-meta--date">
                    <img src="./assets/calendario.svg" alt="calendario">
                    Feb01, 2022
                </div>
           </div>
       </article>
       <article class="card">
           <div class="card-image">
               <img src="./assets/img/vacaciones.jpg" alt="una foto">
           </div>
           <div class="card-header">
               <a>
                Tomate un respiro. 
                <p>Haz trabajado tan duro que te mereces un descanso, unas vacaciones en Europa.
                </p>
               </a>
           </div>
           <div class="card-footer">
               <div class="card-meta card-meta--date">
                    <img src="./assets/calendario.svg" alt="calendario">
                    Feb01, 2022
                </div>
           </div>
       </article>
       <article class="card">
           <div class="card-image">
               <img src="./assets/img/nueva.jpg" alt="una foto">
           </div>
           <div class="card-header">
               <a>
                Una nueva vida. 
                <p>No dejes pasar esta increible oferta que Unibank tiene para ti.
                </p>
               </a>
           </div>
           <div class="card-footer">
               <div class="card-meta card-meta--date">
                    <img src="./assets/calendario.svg" alt="calendario">
                    Feb01, 2022
                </div>
           </div>
       </article>
   </div>
    </main>
    
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="assets/unibank.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos un equipo de desarrolladores de la carreara de ingenieria de software de la Facultad de ingenieria electromecanica de la UdeC</p>
                <p>Equipo 2 Ing de software 3-D</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Ing de Software</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
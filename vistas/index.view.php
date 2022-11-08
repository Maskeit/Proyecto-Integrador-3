
<!--INCIA CABECERA QUE SE ENCUENTRA EN HEADER.PHP-->
<!-- EN INDEX.VIEW ESTA EL require 'vistas/header.php';-->
<!--TERMIINA CABECERA QUE SE ENCUENTRA EN HEADER.PHP-->
<?php
require 'header.php';
?>
<!--Comienza el apartado de presentacion--->
<div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>UNIBANK</h6>
          <h1>TU MEJOR OPCION</h1>
          <p>
            Ofreciendo facilidad y atención a nuestra clientela
          </p>
          <a href="rscCliente/loginCliente.php">
          <button class="btn btn-light px-5 py-2 primary-btn">
            Click Aqui para iniciar sesion
          </button>
          </a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="./assets/frontIcon.png" alt="Book" />
        </div>
      </div>
    </div>
    <!--termina el apartado de presentacion--->
  </header>
  <main>
    <!--Seccion de presentacion-->
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="./assets/pexels-photo-1904769.jpeg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left" id="aboutUs">
              <h1>Sobre UNIBANK</h1>
              <p class="pt-4">
              UNIBANK es uno de los grupos financieros líderes en el país, centrado en la transformación comercial y en la innovación.
              Su negocio está enfocado en la Banca Minorista, con fuerte integración con Banca Mayorista, lo que se suma al impulso de
              los negocios de Banca Privada, Gestión de Activos y Seguros.
              </p>
              <p>
              Tras el importante plan de inversión de los últimos años, el Grupo está preparado para crecer de manera rentable,
              recurrente y sostenible, además de aumentar la base de clientes vinculados y digitales y de mejorar la satisfacción del cliente.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Seccion de presentacion termina-->

    <!--Purchase Whatever You Want-->
    <section class="section-2 container-fluid p-0">
      <div class="cover" id="facts">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Estadisticas de uso</h1>
          <p>
            Numero de usuarios satisfechos y servicios brindados.
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>2345</h1>
            <p>Clientes</p>
          </div>
          <div class="rect">
            <h1>6784</h1>
            <p>Acciones por dia</p>
          </div>
          <div class="rect">
            <h1>1056</h1>
            <p>Transacciones exitosas</p>
          </div>
          <div class="rect">
            <h1>9152</h1>
            <p>Total Projects</p>
          </div>
        </div>
      </div>
      <div class="purchase text-center" id="offer">
        <h1>UNIBANK ofrece:</h1>
        <p>
          Tasas amigables para nuestros clientes:
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Interes en Prestamo</h5>
                </div>
                <p class="card-text">
                  Al realizar prestamos la tasa es de:
                </p>
                <div class="pricing">
                  <h1>¡¡69%!!</h1>
                  <p class="card-text">
                  ¡Sin intereses añadidos!
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Intereses de inversión</h5>
                </div>
                <p class="card-text">
                  Al invertir con nosotros solo recibiera un:
                </p>
                <div class="pricing">
                  <h1>¡¡69%!!</h1>
                  <p class="card-text">
                  ¡Sin intereses añadidos!
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Intereses de prestamos</h5>
                </div>
                <p class="card-text">
                  Al invertir con nosotros solo recibiera un:
                </p>
                <div class="pricing">
                  <h1>¡¡69%!!</h1>
                  <p class="card-text">
                  ¡Sin intereses añadidos!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center" id="us">
        <h1 class="text-dark">Nuestro equipo de desarrollo</h1>
        <p class="text-secondary">Conoce a cada uno de nosotros</p>
      </div>
      <div class="team row "> <!--Cada uno de NOSOTROS-->
        <div class="col-md-4 col-12 text-center"> <!--Miguel-->
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/Yo.png" class="img-fluid border-radius p-4" alt=""><!--CARGAR IMAGEN DE MIGUEL-->
                </div>
                <div class="card-body">
                  <h3 class="card-title">Miguel Alejandre</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Contactame!</a>
                  <p class="text-black-50">Estudiante de programación</p>
                </div>
              </div>
        </div>

        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/mauricio.jpeg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Mauricio Chávez </h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Contactame!</a>
                  <p class="text-black-50">Estudiante de programación</p>                </div>
              </div>
        </div>
        
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/alonso.jpeg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Jesus Alonso </h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Contactame!</a>
                  <p class="text-black-50">Estudiante de programación</p>                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/adolfo.jpeg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Adolfo Ángel </h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Contactame!</a>
                  <p class="text-black-50">Estudiante de programación</p>                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/braulio.jpeg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Braulio Roberto </h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Contactame!</a>
                  <p class="text-black-50">Estudiante de programación</p>                </div>
              </div>
        </div>
      </div>
    </section>
  </main>

  <!--Comienza el footer-->
<?php
require 'footer.php';
?>
  <!--Termina el footer-->

  <!--Links de bootstrap-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="../mainIndex.js"></script>
</body>


</html>
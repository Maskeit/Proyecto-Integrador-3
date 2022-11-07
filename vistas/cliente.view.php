<?php
require 'vistas/headerEspecifico.php';
//SE SUPONE QUE ALONSO CAMBIARA EL DISEÑO DE ESTA VISTA **ELIMINEN ESTE COMENTARIO CUANDO YA ESTE TERMINADO PORFA
?>
    <style>
      .bg > div {
        background:#f2f2f2;
        margin: 10px 0;
        padding:40px;
      }
    </style>
    <!--Purchase Whatever You Want-->
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Unibank te da la bienvenida</h1>
          <p>
            Pensaba hacer esta pagina de incio para el ejecutivo y tenga un control de facil accceso hacia las tablas de sus clientes.
          </p>
        </div>
      </div>
      <div class="purchase text-center">
        <h1>Bienvenido <?php echo strtoupper("$_SESSION[nombre]") ?> </h1> <!--Aqui va el nombre del cliente registrado con una variable supongo que $nombreCliente-->
        <p>
          Realiza Operaciones.
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Consulta</h5>
                </div>
                <p class="card-text">
                  Necesitas revisar tus cuentas?
                </p>
                <div class="pricing">
                  <h2>Consulta</h2>
                  <a href="consultas.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Ver</a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Movimiento 1</h5>
                </div>
                <p class="card-text">
                  Realiza Transferencias rapidas
                </p>
                <div class="pricing">
                  <h2>Transferencias rapidas  </h2> 
                  <a href="./movimientos/movimientos.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Transferir</a>
                </div>
              </div>.
            </div>

            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Validar datos</h5>
                </div>
                <p class="card-text">
                  With supporting text below as a natural lead-in.
                </p>
                <div class="pricing">
                  <h2>VALIDA</h2>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Purchase Now</a>
                </div>
              </div>
            </div>

          </div>
        </div><!--end of cards-->
        <div class="container">
        <div class="row bg">
          <!--apartado de las cards-->
            <div class="card-deck">
              <div class="col">
              <div class="card">
                <img class="card-img-top" src="./assets/img/foto3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Una nueva vida</h5>
                  <p class="card-text">No dejes pasar esta increible oferta que Unibank tiene para ti.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              </div>
            
              <div class="col">
              <div class="card">
                <img class="card-img-top" src="./assets/img/foto4.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Estrena auto</h5>
                  <p class="card-text">Esta navida con tu crédito Unibank estrena un auto nuevo.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              </div>

              <div class="col">
              <div class="card">
                <img class="card-img-top" src="./assets/img/foto1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Tomate un respiro</h5>
                  <p class="card-text">Haz trabajado tan duro que te mereces un descanso.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              </div>

            </div>
          

        </div>
        </div>

      </div>
    </section>
    
<?php
require 'footer.php';
?>

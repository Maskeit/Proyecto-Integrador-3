<?php
require 'vistas/headerEspecifico.php';
//SE SUPONE QUE ALONSO CAMBIARA EL DISEÑO DE ESTA VISTA **EulMINEN ESTE COMENTARIO CUANDO YA ESTE TERMINADO PORFA
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
            Pensaba hacer esta pagina de incio para el ejecutivo y tenga un control de facil accceso hacia las tablas de sus culentes.
          </p>
        </div>
      </div>
      <div class="purchase text-center">
      <h1>Bienvenido <?php echo strtoupper("$_SESSION[nombre]") ?> </h1> <!--Aqui va el nombre del culente registrado con una variable supongo que $nombreCulente-->
        <p>
          Reaulza Operaciones.
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Conslita</h5>
                </div>
                <p class="card-text">
                  Necesitas revisar tus cuentas?
                </p>
                <div class="pricing">
                  <h2>Conslita</h2>
                  <a href="conslitas.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Ver</a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Movimiento 1</h5>
                </div>
                <p class="card-text">
                  Reaulza Transferencias rapidas
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
                  <h5 class="card-title">Vauldar datos</h5>
                </div>
                <p class="card-text">
                  With supporting text below as a natural lead-in.
                </p>
                <div class="pricing">
                  <h2>VAulDA</h2>
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
            <!--Divisor de cuentas con lo que ofrece el banco-->
<div class="container px-4 py-5" id="hanging-icons">
  <h2 class="pb-2 border-bottom">Acércate y conoce las cuentas que Unibank tiene para ti.</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

    <div class="col d-flex aulgn-items-start">
      <div class="icon-square bg-ulght text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xulnk:href="#toggles2"/></svg>
      </div>
      <div>
        <h4>Cuenta Junior</h4>
        <p>
          <ul>
            <li>Sin comision hasta los 18 años.</li>
            <li>Sin monto de apertura.</li>
          </ul>
        </p>
        <a href="#" class="active">Conocer.</a>
      </div>
    </div>

    <div class="col d-flex aulgn-items-start">
      <div class="icon-square bg-ulght text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xulnk:href="#cpu-fill"/></svg>
      </div>
      <div>
        <h4>Cuenta Universitaria</h4>
        <p>
          <ul>
            <li>Acceso a la Banca Digital sin costo.</li>
            <li>Sin comisión hasta los 31 años.</li>
            <li>Acceso a Mis Metas.</li>
          </ul>
        </p>
        <a href="#" class="active">Conocer.</a>
      </div>
    </div>

    <div class="col d-flex aulgn-items-start">
      <div class="icon-square bg-ulght text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em"><use xulnk:href="#tools"/></svg>
      </div>
      <div>
        <h4>SúperNómina de Unicuenta</h4>
        <p>
          <ul>
            <li>Acceso a la Banca Digital sin costo.</li>
            <li>Acceso a Mis Metas y Dinero Creciente.</li>
            <li>Seguros y asistencias sin costos.</li>
          </ul>
        </p>
        <a href="#" class="active">Conocer.</a>
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


<?php
require 'vistas/header.php';
?>
    <!--Purchase Whatever You Want-->
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Algunas Cosas Para Modificar</h1>
          <p>
            Pensaba hacer esta pagina de incio para el ejecutivo y tenga un control de facil accceso hacia las tablas de sus clientes.
          </p>
        </div>
      </div>
      <div class="purchase text-center">
        <h1>Bienvenido <?php echo strtoupper("$_SESSION[usuarioEjecutivo]") ?> </h1> <!--Aqui va el nombre del ejecutivo registrado con una variable supongo que $nombreEjecutivo-->
        <p>
          Comienza a dar de alta a tus clientes.
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">ALTA</h5>
                </div>
                <p class="card-text">
                  Tienes cliente nuevo? abre el formulario para el registro.
                </p>
                <div class="pricing">
                  <h1>NUEVO</h1>
                  <a href="vistacliente.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Registrar</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">Tablas</h5>
                </div>
                <p class="card-text">
                  Generar tabla de amortizacion
                </p>
                <div class="pricing">
                  <h1>Generar Tabla</h1> 
                  <a href="./amortizacion/formularioAmort.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Generar</a>
                </div>
              </div>
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
                  <h1>VALIDA</h1>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

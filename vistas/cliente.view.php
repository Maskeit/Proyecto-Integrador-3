<?php
require 'vistas/header.php';
?>
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
        <h1>Bienvenido <?php echo strtoupper("$_SESSION[codigoCliente]") ?> </h1> <!--Aqui va el nombre del cliente registrado con una variable supongo que $nombreCliente-->
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
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5">Ver</a>
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
        </div>
      </div>
    </section>

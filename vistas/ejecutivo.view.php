<?php
require 'vistas/headerEspecifico.php';
//ALGUIEN ESTA TRABAJANDO EN ESTA VISTA DEL EJECUTIVO? CREO QUE ROBERTO LO ESTABA HACIENDO SI NO ME EQUIVOCO  (si, ando trabajando en ella.)
?>
    <!--Purchase Whatever You Want-->
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
        <h1>Bienvenido <?php echo strtoupper("$_SESSION[usuarioEjecutivo]") ?> </h1> <!--Aqui va el nombre del ejecutivo registrado con una variable supongo que $nombreEjecutivo-->
        <p>
          Comienza a dar de alta a tus clientes. <br> 
          <i style="font-size: 10em;" class="bi bi-card-checklist"></i>
        </p>
        </div>
      </div>
<!--pruebas del card-->

<!--pruebas del card-->  
      <div class="purchase text-center"> <!--Inician cards de funciones--> 
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card card border-success">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">ALTA DE USUARIO</h5>
                </div>
                <p class="card-text">
                  ¿Tienes cliente nuevo? <br> Esta opción abre el formulario para el registro de un nuevo usuario.
                </p>
                <i style="font-size: 10em;" class="bi bi-clipboard-plus-fill"></i>
                <div class="pricing">
                  <a href="vistacliente.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Registrar</a><!--FALTA QUE ANGEL MODIFIQUE LOS CAMPOS REQUERIDOS EN EL CRUD, URGE!!-->
                </div>
              </div>
            </div>
            <div class="card card border-success">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">TABLAS DE PRESTAMO</h5>
                </div>
                <p class="card-text">
                  ¿Necesitan un prestamo? <br>
                  Esta opción genera una tabla de amortización.
                </p>
                <i style="font-size: 10em;" class="bi bi-layout-text-window-reverse"></i>
                <div class="pricing">
                  <a href="./amortizacion/formularioAmort.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Generar</a>
                </div>
              </div>
            </div>
            <div class="card card border-success">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">ESTATUS DE PEDIDO</h5>
                </div>
                <p class="card-text">
                  En este apartado podrás revisar el estado de perfil de un cliente si hace una consulta.
                </p>
                <i style="font-size: 10em;" class="bi bi-terminal-fill"></i>
                <div class="pricing">
                  <a href="./rscEjecutivo/status.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Estados</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
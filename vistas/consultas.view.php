<?php
require 'headerEspecifico.php';

?>
<link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/features.css">
</head>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>

<body>
<div class="container">
  <div class="col">
    <H4 class="mb=5">Cuentas en pesos MXN</H4>

    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              CUENTA NO. 456****76
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>
      </div>
      <!---->  
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            CUENTA NO. 134*****34
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>
      </div>
      <!---->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            CUENTA NO. 123*****56
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <h5 class="container">Saldo actual: <span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>
      </div>
      <!---->

    </div>  
  </div>

  <!--Divisor de cuentas con lo que ofrece el banco-->
  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Acércate y conoce las cuentas que Unibank tiene para ti.</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
          <h4>Cuenta Junior</h4>
          <p>
            <li>
              <ul>Sin comision hasta los 18 años.</ul>
              <ul>Sin monto de apertura.</ul>
            </li>
          </p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
          <h4>Cuenta Universitaria</h4>
          <p>
            <li>
              <ul>Acceso a la Banca Digital sin costo.</ul>
              <ul>Sin comisión hasta los 31 años.</ul>
              <ul>Acceso a Mis Metas.</ul>
            </li>
          </p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        <div>
          <h2>SúperNómina de Unicuenta</h2>
          <p>
            <li>
              <ul>Acceso a la Banca Digital sin costo.</ul>
              <ul>Acceso a Mis Metas y Dinero Creciente.</ul>
              <ul>Seguros y asistencias sin costos.</ul>
            </li>
          </p>
        </div>
      </div>

    </div>
  </div>
  <!--HTML DE LA LOGICA DEL MOVIMIENTO-->
  <!--<h3 class="container">Saldo actual: <span id="saldo">0</span></h3> Aqui va codigo php para traer el saldo dependiendo el cliente-->

</div>

<!--HTML DE LA LOGICA DEL MOVIMIENTO-->
<?php
require 'footer.php';
?>


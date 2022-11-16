<?php
require 'headerEspecifico.php';?>
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
<div class="container" >
  <div class="col">
    <H4 class="mb=5">Cuenta en pesos <?php echo '$' . number_format($_SESSION['saldo'], 2 , '.' , ',' ); ?> MXN</H4><!--Aqui va codigo php para traer el saldo dependiendo la tarjeta del cliente-->

    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            CUENTA UNIVERSITARIA DE DÉBITO.
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">
            <?php if(!$_SESSION['saldoDeb']){
              echo 'No se ha solicitado una tarjeta de debito';
            }else{
            echo '$' . number_format($_SESSION['saldoDeb'], 2 , '.' , ',' );
            }
            ?>
            <?php if(!$_SESSION['BIN']){
              echo '';
            }else{
            echo 'de la tarjeta' . $dato['BIN'];
            }
            ?> <div class="col" name="debito"> <a href="debito.php">
              <?php
              if(!$_SESSION['BIN']){

              }else{
                echo 'Ver movimientos.';
              }
              ?>
            </a></div></span></h5> <!--Se supone que este deberia ser el saldo de la tarjeta debito del cliente pero me muestra $0.00-->
          </div>
        </div>
      </div>
      <!---->  
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              CUENTA UNIVERSITARIA DE CRÉDITO.
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">
          <?php if(!$_SESSION['saldoDeb']){
              echo 'No se ha solicitado una tarjeta de Credito';
            }else{
            echo '$' . number_format($_SESSION['saldoDeb'], 2 , '.' , ',' );
            }
            ?>
            <?php if(!$_SESSION['BIN']){
              echo '';
            }else{
            echo 'de la tarjeta' . $dato['BIN'];
            }
            ?>
            <div class="col"> <a href="#">
            </a></div></span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>
      </div>
      <!---->
    </div>  
  </div>
  <!--Divisor de cuentas con lo que ofrece el banco-->
  <!--HTML DE LA LOGICA DEL MOVIMIENTO-->
  

</div>

<!--HTML DE LA LOGICA DEL MOVIMIENTO-->
<?php
require 'footer.php';
?>


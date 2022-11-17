<?php
use Vtiful\Kernel\Format;
require 'headerEspecifico.php';?>
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
    <H4 class="mb=5">Cuenta en pesos <?php echo '$' . number_format($saldoSuma, 2 , '.' , ',' ); ?> MXN</H4><!--Aqui va codigo php para traer el saldo dependiendo la tarjeta del cliente-->

    <div id="accordion">
      <!-- aqui comienzan las tarjetas de debito -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            CUENTAS UNIVERSITARIAS DE DÉBITO.
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body" name="debito">
          <h5 class="container">Saldos actuales:  <i class="bi bi-wallet"></i> <?php echo '<br>'; ?>  <span id="saldo">
            <?php if(empty($debito)){
              echo 'No se ha solicitado una tarjeta de debito';
            }else{
            foreach($datosDeb as $debito):  
            echo '$' . number_format($debito['saldoDeb'], 2 , '.' , ',' ) .' <--------------------------------------> **** ' . substr($debito['BIN'], 12) . '</br>';
            endforeach;
            }
            ?>
            <div class="col"><a href="debito.php"><?php if(empty($debito)){}else{echo 'Ver movimientos.';}?></a></div></span></h5></div>
        </div>
      </div>
        <!-- aqui comienzan las de credito-->   
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
          <h5 class="container">Saldo actual: <i class="bi bi-wallet"></i> <?php echo '<br>'; ?><span id="saldo">
          <?php if(empty($credito)){
              echo 'No se ha solicitado una tarjeta de debito';
            }else{
            foreach($datosCred as $credito):  
            echo '$' . number_format($credito['saldoCred'], 2 , '.' , ',' ) .' <--------------------------------------> **** ' . substr($credito['BIN'], 12) . '</br>';
            endforeach;
            }
            ?>
            <div class="col"><a href="debito.php"><?php if(empty($credito)){}else{echo 'Ver movimientos.';}?></a></div></span></h5></div>
        </div>
      </div>
      <!---->
    </div>  
  </div>
  <!--Divisor de cuentas con lo que ofrece el banco-->
  <!--HTML DE LA LOGICA DEL MOVIMIENTO-->

  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="assets/img/car1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Que esperas para solicitar tu credito Unibank.</p>
      </div>
      </div>
            
    </div>
  </div>

</div>

<!--HTML DE LA LOGICA DEL MOVIMIENTO-->
<?php
require 'footer.php';
?>


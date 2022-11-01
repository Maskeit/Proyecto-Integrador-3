<?php
require 'headerEspecifico.php';

?>
</head>
 
<body>
<div class="container">
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
    <!--apartado de las cards-->
<div class="containter">
  <div class="card-deck">
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


<!--HTML DE LA LOGICA DEL MOVIMIENTO-->
<h3 class="container">Saldo actual: <span id="saldo">0</span></h3> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
 
	
 <div class="container">
   <b>Deposito</b>
   <input type="checkbox" value="1" onchange="javascript:showContent('deposito',this)" />
   <div id="deposito" class="hide">
     Ingresa el Deposito a Realizar <input type="text" name="valor1">
     <input type="button" value="Enviar" onclick="deposito()">
   </div>
 </div>

 <div class="container">
   <b>Retiro</b>
   <input type="checkbox" value="1" onchange="javascript:showContent('retiro',this)" />
   <div id="error"></div>
   <div id="retiro" class="hide">
     Ingresa el retiro a Realizar <input type="text" name="valor2">
     <input type="button" value="Enviar" onclick="retiro()">
   </div>
 </div>
</div>
<!--HTML DE LA LOGICA DEL MOVIMIENTO-->
<?php
require 'footer.php';
?>


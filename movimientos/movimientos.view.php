<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
    <link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/bootstrap.min.css">

    <style>
      .row > div{
        background:#f2f2f2;
        margin: 10px 0;
        padding:40px;
      }
    </style>
</head>
<body>
<!--carousel-->
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>
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

<!--Comportamiento de JavaScript-->


<script src="../assets/bootstrap/Btrap5/jss/bootstrap.bundle.min.js"></script>
</body>
</html>
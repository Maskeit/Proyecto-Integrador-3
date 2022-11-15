<?php require '../vistas/headerEspecifico.php' ?> 

<body>
<!--label--> 
<!--carousel-->
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <h5 class="container">Saldo actual: <span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>

   <b>Deposito</b>
   <input type="checkbox" value="1" onchange="javascript:showContent('deposito',this)" />
   <div id="deposito" class="hide">
     <label for="">Ingrese la cuenta a la que quiere depositar</label>
     <select name="" id="">
      <option value="">cuenta propia</option>
      <input type="text" name ="noCta" placeholder="noCta">
     </select>
     <label for="">Ingrese la cantidad a depositar</label>
     <input type="text" name="valor1" placeholder="cantidad">

     <input type="button" value="Enviar" onclick="deposito()">
   </div>

   <b>Retiro</b>
   <input type="checkbox" value="1" onchange="javascript:showContent('retiro',this)" />
   <div id="error"></div>
   <div id="retiro" class="hide">
     Ingresa el retiro a Realizar <input type="text" name="valor2">
     <input type="button" value="Enviar" onclick="retiro()">
   </div>

<!--Comportamiento de JavaScript-->


<script src="../assets/bootstrap/Btrap5/jss/bootstrap.bundle.min.js"></script>
</body>
</html>
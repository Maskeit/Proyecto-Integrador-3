<?php require '../vistas/headerEspecifico.php' ?> 
<link rel="stylesheet" href="../css/movimientos.css">
<body>
<!--label--> 
    <!--origen--> 
    <form action="#" method="post">
      <h1>Reliazar un Movimiento</h1>
      <label for="">CUENTA ORIGEN (mis cuentas): </label>
      <select name="cuentas" id="">
        <option value="Arroz">cuenta debito</option>
        <option value="Leche">cuenta ahorros</option>
      </select>
      <!--destino--> 
      <label for="">CUENTAS DESTINO: </label>
      <select name="cuentas" id="">
        <option value="Arroz">cuenta Adolfo</option>
        <option value="Leche">cuenta Daniel</option>
        <option value="Azúcar">cuenta Miguel</option>
        <option value="Yogurt">cuenta Yolanda</option>
      </select>
      <label for="">Concepto </label>
      <input type="text" name="conepto">
      <label for="">Monto: </label>
      <input type="text" name="monto">
      <label for="">Seleccione banco: </label>
      <select name="banco" id="">
        <option value="unibank">UNIBANK</option>
        <option value="bbva">BBVA</option>
        <option value="santander">SANTANDER</option>
      </select>
      <input type="submit" value="Depositar">
    </form>
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
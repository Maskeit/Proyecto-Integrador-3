<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../css/movimientos.css">
    

    <title>Movimientos</title>
</head>
<body>


<!--
<div class="container">
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Cuenta Origen</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Seleccione una cuenta</option>
    <option value="1">One</option>
    <option value="2">Two</option>
  </select>
</div>

<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02">Cuenta Destino</label>
</div>

    <label for="basic-url" class="form-label">Your vanity URL</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
      <span class="input-group-text">@</span>
      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
    </div>

    <div class="input-group">
      <span class="input-group-text">Concepto:</span>
      <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
</div>


-->

<form action="comprobante.php" method="post"> <?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
      <h1>Realizar un Movimiento</h1>
      <label for="">CUENTA ORIGEN (mis cuentas): </label>
      <select name="ctaOrigen" id="">
        <option value="debito">cuenta debito</option>
        <option value="ahorros">cuenta ahorros</option>
      </select>
      <!--destino--> 
      <label for="">CUENTAS DESTINO: </label>
      <select name="ctaDestino" id="">
        <option value="adolfo">cuenta Adolfo</option>
        <option value="daniel">cuenta Daniel</option>
        <option value="miguel">cuenta Miguel</option>
        <option value="yolanda">cuenta Yolanda</option>
      </select>
      <label for="">Concepto </label>
        <input type="text" name="concepto">
      <label for="">Monto: </label>
        <input type="text" name="monto">
      <label for="">Seleccione banco: </label>
      <select name="banco" id="">
        <option value="unibank">UNIBANK</option>
        <option value="bbva">BBVA</option>
        <option value="santander">SANTANDER</option>
      </select>
    <input type="submit" value="Depositar">
    <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; //imprime el error que haya ocurrido?>
					</ul>
				</div>
			<?php endif; ?>
      <p class="input"><a class="btn" href="../cliente.php">Regresar</a></p>
</form>

<!--
  <div class="container">
        <?php /*
          echo "<p> $ctaOrigen</p>"; 
          echo "<p> $ctaDestino </p>"; 
          echo "<p> $concepto </p>" ;
          echo "<p> $monto </p>" ;
          */
        ?>  
  </div>
-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
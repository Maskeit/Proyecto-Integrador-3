<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>UNIBANK</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./Style.css" />

  <link rel="stylesheet" href="./mobile-style.css">

  <link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../css/estilosLogReg.css">
  <link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/features.css">
  <!--Miguel-->
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <!--finmiguel-->
</head>
<body>
  
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="../index.php">
          <i class="bi bi-cash-coin fa-2x mx-3"></i>Unibank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item" >
            
             <a class="nav-link" href="../funciones/cerrarSesion.php">
                <?php if(isset($_SESSION['adminUser'])){
                    echo "CERRAR SESION"; //se va mostrar cerrar sesion si es que el ejecutivo tiene una sesion iniciada
                    } elseif (isset($_SESSION['usuarioEjecutivo'])) {
                    echo "CERRAR SESION";
                    } elseif (isset($_SESSION['codigoCliente'])) {
                    echo "CERRAR SESION";
                    }
                    else {
                         echo ""; //sino no muestra nada  
                    }
                  ?>

              </a>
              </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    

    <title>Movimientos</title>
</head>
<body>
<div class="container" style="width:700px ;">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <h1>Transferencia a otra cuenta</h1>

  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Cuenta Origen</label>
    <select name="ctaOrigen" class="form-select" id="inputGroupSelect01">
      <option selected>Tus cuentas</option>
      <option value="<?php echo $_SESSION['codigoCliente'];?>"><?php echo $_SESSION['codigoCliente'];?>: <?php echo '$' . number_format($_SESSION['saldo'], 2 , '.' , ',' ) ?> </option> <!--Aqui mostramos en forma de "lista" las cuentas que tenga el usuario con la cantidad de dinero que tenga ene sa tarjeta, !!!en realidad tiene que se un selector de tarjetas, no de cuentas-->
    </select>
  </div>

  <div class="input-group mb-3">
    <select name="ctaDestino" class="form-select" id="inputGroupSelect02">
      <option selected>Cuenta destino</option>
        <?php foreach($list as $item): ?>

          <option value="<?php $item['codigoCliente']; ?>"><?php echo $item['nombre']; ?></option><!--Aqui tenemos que hacer una consulta para traer a todos los clientes que tengamos registrados y mostrarlos con este cilo foreach-->
        
        <?php endforeach; ?>
    </select>
    <label class="input-group-text" for="inputGroupSelect02">Cuenta Destino</label>
  </div>

      <div class="input-group">
        <span class="input-group-text">Concepto:</span>
        <input type="text" class="form-control" name="concepto">
      </div>
      <br>
      <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" name="monto" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
      </div>

    <div class="input-group mb-3">
    <select name="banco" class="form-select" id="inputGroupSelect02">
      <option value="unibank">UNIBANK</option>
      <option value="bbva">BBVA</option>
      <option value="santander">SANTANDER</option>
    </select>
    <label class="input-group-text" for="inputGroupSelect02">Seleccione Banco</label>
    </div>
    <button type="button" class="btn btn-outline-secondary"><a style="text-decoration: none;" href="../cliente.php">Regresar</a></button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Ver resumen</button>
    <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; //imprime el error que haya ocurrido?>
					</ul>
				</div>
			<?php endif; ?>

      <!-- Modal para mostrar el estado de la Transferencia antes de enviar se supone, (hay un error que aun no soluciono)-->
      <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Transferencia En proceso</h5> <!--deberia decir Transferencia realizada cuando ya se haya enviado bien-->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php 
                echo "Desde cuenta de $nombre <p> NoCta: $codigoCliente</p>"; //parecen errores pero es que no se han cargado los datos por no definirlos, pero funciona cuando ya guardamos algo en el formuluario
                echo "A la cuenta <p>  No: $ctaDestino </p>"; 
                echo "Referencia: ******8693";
                echo "<p> Concepto:  $concepto </p>" ;
                echo "Monto: <p>  $$monto </p>" ;
              ?>
            </div>
            <div class="modal-footer">
              <button type="submit" value="Depositar" class="btn btn-outline-success">Completar</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
<!-- Modal -->
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/modal.js"></script>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>UNIBANK</title>
  <!--
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./Style.css" />

  <link rel="stylesheet" href="mobile-style.css">

  <link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
   <link rel="stylesheet" href="../css/estilos.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/bootstrap/Btrap5/css/features.css">
  <!--Miguel-->
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <!--finmiguel-->
</head>
<body id="body">
    
    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
      </div>
      <!--<div class="welcome">
        <h1>¡Bienvenido <?php echo strtoupper("$_SESSION[nombre]") ?> !</h1>
      </div>-->
    </header>

    <div class="menu__side" id="menu_side">

            <a href="../index.php">
                <div class="name__page">
                  <i class="fas fa-university"></i>
                  <h4>Unibank</h4>
                </div>             
            </a>
        

        <div class="options__menu">	

            <a href="../cliente.php">
                <div class="option">
                <i class="bi bi-person-circle"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="transferencia.php">
                <div class="option">
                    <i class="fas fa-exchange"></i>
                    <h4>Transferencias rapidas</h4>
                </div>
            </a>
            
            <a href="../consultas.php" class="selected">
                <div class="option">
                    <i class="fas fa-piggy-bank"></i>
                    <h4>Consulta</h4>
                </div>
            </a>

            <a href="./funciones/cerrarSesion.php">
                <div class="option">
                    <i class="fas fa-sign-out"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>
        </div>
    </div>
</body>
  <!--formulario-->
<div class="container" style="width:700px ;">
<!-- ---------------------------------------------------------------------------------------------->
  <form action="comprobante.php" id="formulario" name="formulario" method="post">
    <h1>Transferencia a otras cuentas</h1>

    <div class="input-group mb-3">
      <label name="ctaOrigen" class="input-group-text" for="inputGroupSelect01">Cuenta Origen</label>
      
      <select name="ctaOrigen" class="form-select" id="ctaOrigen"> <!-- tener cuidado con el ctaOrigen -->
        <?php foreach ($datosDeb as $debito):?>
        <option value="<?php echo $debito['BIN'];?>"><?php echo $debito['BIN'];?>: <?php  echo '$' . number_format($debito['saldoDeb'], 2 , '.' , ',' ); ?> </option> <!--Aqui mostramos en forma de "lista" las cuentas que tenga el usuario con la cantidad de dinero que tenga ene sa tarjeta, !!!en realidad tiene que se un selector de tarjetas, no de cuentas-->
        <?php endforeach ?>                    
      </select>

    </div>

    <div class="input-group mb-3">
      <input class="input-group-text" type="text" name="ctaDestino" id="ctaDestino" placeholder="ejem 4245 8956 1542 0012">
      <label name="ctaDestino" class="input-group-text" for="inputGroupSelect02">Cuenta Destino</label>
    </div>

        <div class="input-group">
          <span class="input-group-text">Beneficiario:</span>
          <input type="text" class="form-control" name="beneficiario" id="beneficiario" placeholder="Miguel Alejandre" >
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-text">Concepto:</span>
          <input type="text" class="form-control" name="concepto" id="concepto" placeholder="servicios, prestamos...">
        </div>
        <br>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" name="monto" id="monto" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>

      <div class="input-group mb-3">
      <select name="banco" class="form-select" id="inputGroupSelect02">
        <option value="UNIBANK">UNIBANK</option>
        <option value="BBVA">BBVA</option>
        <option value="SANTANDER">SANTANDER</option>
      </select>
      <label class="input-group-text" for="inputGroupSelect02">Seleccione Banco</label>
      </div>
      <button type="submit" id="btn" name="btn" value="Enviar" class="btn btn-outline-success">Completar</button>
      <a href="../cliente.php" class="btn btn-secondary">Regresar</a>

  </form>

</div>
<script src="transferencia.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="../script.js"></script>
<?php
//require '../vistas/footer.php';
?>

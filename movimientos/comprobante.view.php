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
            
             <a class="nav-link" href="../funciones/cerrarSesion.php">CERRAR SESION</a>
              </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
</head>
<body>

<style>
    .container{
        width: 90%;
        max-width: 500px;
        margin: auto;
        margin-top: 20px;
    }
   </style>

<div class="container">
<h2>Comprobante de envío</h2>
<div class="alert alert-success" role="alert">
<?php 
    echo '<br> Transferencia enviada </ br>';
    echo '<br> IMPORTE $'.$monto.' </ br>';
    echo '<br> CUENTA ORIGEN '. $codigoCliente.' </ br>';
    echo '<br> CUENTA DESTINO '. $ctaDestino.' </ br>';
    echo '<br> TITULAR '.$beneficiario.' </ br>';
    echo '<br> CONCEPTO '. $concepto .' </ br>';
    echo '<br> FECHA Y HORA DE OPERACIÓN '.$date .' </ br>';
    echo '<br> BANCO '.$banco.' </ br>';
?>
<a href="../cliente.php">Regresar</a>
</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
</body>
</html>
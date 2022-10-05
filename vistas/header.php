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

  <!--Miguel-->
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <!--finmiguel-->
</head>
<body>
  
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
          <i class="bi bi-cash-coin fa-2x mx-3"></i>Unibank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <!--CUENTAS-->
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">INGRESAR</a>
                <div class="dropdown-content">
                  <a href="cliente.php">Cliente</a> <!--Aqui mover la ubicacion y cambiarla por cliente.php haciendo un isset-->
                  <a href="ejecutivo.php">Ejecutivo</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#offer">OFFER
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#facts">STATS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#us">EQUIPO</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./funciones/cerrarSesionEjecutivo.php">
                <?php if(isset($_SESSION['usuarioEjecutivo'|| 'codigoCliente'])){
                    echo "CERRAR SESION"; //se va mostrar cerrar sesion si es que el ejecutivo tiene una sesion iniciada
                    } else {
                         echo "ABOUT US"; //sino pues muetra otro texto   
                    }?>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

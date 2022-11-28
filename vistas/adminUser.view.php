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
  <style>
    table{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 100px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
</head>
<body>
 
<!--INICIO HEADER -->
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="./index.php">
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
              <a class="nav-link" href="./index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item" >
             <a class="nav-link" href="./funciones/cerrarSesion.php">
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
<!-- FIN HEADER -->


  <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="content text-center">
        <h1>Panel de control del Administrador </h1>
        <p>
          Realize diversas operaciones para gestionar el funcionamiento de Unibank <br> 
          <i style="font-size: 6em;" class="bi bi-person-badge-fill"></i>
          <br>
        </p>
        </div>
      </div>
<div id="tituloAdmin">Funciones</div>
      <div class="purchase text-center">
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card card border-success">
              <div class="card-body">
                <div class="title">
                  <h5 style="color: black;" class="card-title">Alta / Consulta de Ejecutivos</h5>
                </div>
                <p class="card-text">
                  Es capaz de ver todos los ejecutivos que trabajan en Unibank o para dar de alta a nuevos ejecutivos<br>
                </p>
                <i style="font-size: 10em; color: black;" class="bi bi-clipboard-plus-fill"></i>
                
              </div>
            </div>
            
            <div class="card card border-success">
              <div class="card-body">
                <div class="title">
                  <h5 style="color: black;" class="card-title">Validación de préstamos</h5>
                </div>
                <p class="card-text">
                  Podrá validar los prestamos solicitados por los clientes
                </p>
                <i style="font-size: 10em; color: black;" class="bi bi-cash-coin"></i>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $conexion=mysqli_connect('localhost','root','','unibank');
    ?>

<!-- AQUI INICIAN LAS TABLAS DE EJECUTIVOS Y PRESTAMOS -->
	<!--<div class="contenedor">
        <div class="row">
            <h1>Tabla de Ejecutivos</h1>
            <div >
                <div class="botoncito">
                    <button id="btn_cargar_usuarios" class="btn activado">Cargar lista de Ejecutivos</button>
                </div>
            </div>
            <div >
                <div class="botoncito">
                    <a href="./rscEjecutivo/registroEjecutivo.php" class="btn btn-primary active" aria-current="page">Registrar Ejecutivo</a>
                </div>
            </div>
        </div>
			<br>
		<main>
			<div class="error_box" id="error_box">
				<p>Se ha producido un error.</p>
			</div>
			<table id="tabla" class="tabla">
				<tr>
					<th>ID</th>
					<th>Ejecutivo</th>
					<th>Sucursal</th>
				</tr>
			</table>
			<div class="loader" id="loader"></div>
		</main>
	</div>
	<script src="../js/ajax2.js"></script> -->
  <h1>Tabla de Validación de Prestamos</h1>
  <table class="table table-striped table-hover">
  <div class="botoncito">
    <a href="./rscEjecutivo/registroEjecutivo.view.php" class="btn btn-primary active" aria-current="page">Registrar Ejecutivo</a>
  </div><br>
  <thead>
    <tr>
      <th scope="col">ID del Ejecutivo</th>
      <th scope="col">Usuario del ejecutivo</th>
      <th scope="col">Sucursal</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM ejecutivos";
  $result=mysqli_query($conexion,$sql);

  while($mostrar=mysqli_fetch_array($result)){

  ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $mostrar['idEjecutivo'] ?></th>
      <td><?php echo $mostrar['usuarioEjecutivo'] ?></td>
      <td><?php echo $mostrar['sucursal'] ?></td>
    </tr>
  <?php
  }
  ?>
  </table>

  <!-- //////////////////////////////////////////////////////////////////////////////// --> 
<?php 
$conexion=mysqli_connect('localhost','root','','unibank');
?>
  <h1>Tabla de Validación de Prestamos</h1><br>
  <form method="POST" action="./amortizacion/respuestasPrestamos/aceptar.php">
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero de cuenta</th>
      <th scope="col">Monto pedido</th>
      <th scope="col">Plazo de pago(meses)</th>
      <th scope="col">Estado</th>
      <th scope="ccol">Validación</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM prestamos WHERE status='Pendiente'"; //NO SE NOS OLVIDE PONER WHERE STATUS PENDIENTE, no lo tiene porque quiero probar
  $result=mysqli_query($conexion,$sql);

  while($mostrar=mysqli_fetch_array($result)){

  ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $mostrar['id'] ?></th>
      <td><?php echo $mostrar['NoCli'] ?></td>
      <td><?php echo $mostrar['dinero'] ?></td>
      <td><?php echo $mostrar['meses'] ?></td>
      <td><?php echo $mostrar['status'] ?></td>
      <td><a class="btn btn-success" href="./amortizacion/respuestasPrestamos/aceptar.php?id=<?=$mostrar['id']?>" role="button">Aceptar</a>
      <a class="btn btn-danger" href="./amortizacion/respuestasPrestamos/denegar.php?id=<?=$mostrar['id']?>" role="button">Denegar</a></td><!-- No quiten el texto -->
    </tr>
  <?php
  }
  ?>
  </table>
</form>
<?php
require './vistas/footer.php';
?>
</body>
</html>
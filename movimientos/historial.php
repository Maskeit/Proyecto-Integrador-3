<?php session_start();
require '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];

$consulta = "SELECT * FROM comprobante WHERE codigoClienteOr = $codigoCliente or codigoClienteDes = $codigoCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['idComprobante'];
    $dato['codigoClienteOr'];
    $dato['origenDeb'];
    $dato['codigoClienteDes'];
    $dato['destinoDeb'];
    $dato['beneficiario'];
	$dato['concepto'];
    $dato['monto'];
    $dato['banco'];
    $dato['fecha'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Unibank</title>
    <!--Agregue prueba cards
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    fin-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/ejecutivosTabla.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
        <a href="index.php">
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

            <a href="../funciones/cerrarSesion.php">
                <div class="option">
                    <i class="fas fa-sign-out"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>
        </div>
    </div>

	<div class="">
		<header>
			<h1>Historial de movimientos</h1>
			
		</header>
		<main>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">Origen</th>
					<th scope="col">Destino</th>
					<th scope="col">Beneficiario</th>
					<th scope="col">Concepto</th>
					<th scope="col">Monto</th>
					<th scope="col">Banco</th>
					<th scope="col">Fecha</th>
				</tr>
			</thead>

			<tbody>
				
				<?php foreach($datos as $dato){?>
				<tr>
					<td><?php echo $dato['idComprobante'] ?></td>
					<td><?php echo $dato['codigoClienteOr'] //origenDeb, codigoClienteOr ?></td> 
					<td><?php echo $dato['destinoDeb'] //destinoDeb, codigoClienteDes?></td>
					<td><?php echo $dato['beneficiario'] ?></td>
					<td><?php echo $dato['concepto'] ?></td>
					<td><?php echo $dato['monto'] ?></td>
					<td><?php echo $dato['banco'] ?></td>
					<td><?php echo $dato['fecha'] ?></td>
				</tr>
				<?php }?>
				
			</tbody>
		</table>
		</main>
	</div>
	<div class="container-btn">
        <a href="transferencia.php" class="btn btn-success">Realizar un momiento</a>
        <a href="../consultas.php" class="btn btn-outline-secondary">Volver</a>
    </div>
	<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../assets/unibank.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos un equipo de desarrolladores de la carreara de ingenieria de software de la Facultad de ingenieria electromecanica de la UdeC</p>
                <p>Equipo 2 Ing de software 3-D</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Ing de Software</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>
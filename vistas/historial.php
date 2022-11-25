<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla de usuarios con AJAX</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/ejecutivosTabla.css">
</head>
<body>
	<div class="contenedor">
		<header>
			<h1>Tabla de Usuarios</h1>
			<div>
				<button id="btn_cargar_usuarios" class="btn active">Cargar Usuarios</button>
			</div>
		</header>
		<main>
			
			<table id="tabla" class="tabla">
				<tr>
					<th>IDcomprobante</th>
					<th>OrigenDeb</th>
					<th>DestinoDeb</th>
					<th>Beneficiario</th>
					<th>Concepto</th>
					<th>monto</th>
					<th>Banco</th>
					<th>Fecha</th>
				</tr>
			</table>
			<div class="loader" id="loader"></div>
		</main>
	</div>
	<script src="js/historialAjax.js"></script>
</body>
</html>
<?php
require '../vistas/header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Amortización</title>
</head>
<body>
	<form action="tablaAmort.php" method="POST">

	<h2 class="fw-bolder text-center font-monospace text-black">Nuestros prestamos solo tienen un 5% de comisión anual!</h3>

		<!-- Cuadro de texto -->
		<div style="background-color: rgba(100, 150, 300, 0.2);" class="p-3 border-top border-start border-end border-dark d-flex justify-content-center" style="max-width: 95%;">
			<b>
			¿Cuanto dinero desea pedir?
			<input type="number" name="dinero" placeholder="$$$$">
			</b>
			<b>
			¿En cuantos meses pagará?
			<input type="number" name="meses" placeholder="Ej. 12 meses">
			</b>
			<b>
			Introduzca su contraseña:
			<input type="password" name="passeje" placeholder="Ej. 1234">
			</b>
		</div>
		<div style="background-color: rgba(100, 150, 300, 0.2); " class="mb-4 p-3 border-bottom border-start border-end border-dark d-flex justify-content-center" style="max-width: 95%;">
			<select name="transtype">
				<option value="9" selected disabled> Tipo de transferencia</option>
				<option value="1">Efectivo</option>
				<option value="2">Transferencia</option>
			</select>
			<input class="mx-2" type="submit" value="Subir">
		</div>
	</form>
</body>
</html>
<?php
require '../vistas/headerEspecifico.php';

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
			<b class="p-3">
			Numero de cuenta(cliente):
			<input type="number" class="form-control" name="NoCli" placeholder="Ej. 20181033" required>
			</b>
			<b class="p-3">
			¿Cuanto dinero desea pedir?
			<input type="number" class="form-control" name="dinero" placeholder="$$$$" required>
			</b>
			<b class="p-3">
			¿En cuantos meses pagará?
			<input type="number" class="form-control" name="meses" placeholder="Ej. 12 meses" required>
			</b>
			<b class="p-3">
			Introduzca su contraseña(Ejecutivo):
			<input type="password" class="form-control" name="passeje" placeholder="Ej. 1234" required>
			</b>
		</div>
		<div style="background-color: rgba(100, 150, 300, 0.2); " class="mb-4 p-3 border-bottom border-start border-end border-dark d-flex justify-content-center" style="max-width: 95%;">
			<select name="transtype">
				<option value="9" selected disabled> Tipo de transferencia</option>
				<option value="1">Efectivo</option>
				<option value="2">Transferencia</option>
			</select>
			<input class="mx-2" type="submit" value="Generar tabla">
		</div>
	</form>
</body>
</html>
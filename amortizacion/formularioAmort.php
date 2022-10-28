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

	<h2 class="fw-bolder text-center font-monospace text-white">Nuestros prestamos solo tienen un 5% de comisión anual!</h3>

	<div class="d-flex justify-content-center">
		<div style="background-color: rgba(100, 150, 300, 0.2); " class="mb-4 p-3 border border-dark d-flex justify-content-center rounded-4" style="max-width: 95%;">
			<b>
			¿Cuanto dinero desea pedir?
			<input class="mx-2"type="numbers" name="dinero" placeholder="$$$$"><br>
			</b>
			<b>
			¿En cuantos meses pagará?
			<input class="mx-2" type="numbers" name="meses" placeholder="Ej. 12 meses"><br>
			</b>
			<input class="mx-2" type="submit" value="Subir">
		</div>
	</div>
	</form>
</body>
</html>
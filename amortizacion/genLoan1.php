<?php
require '../vistas/headerEjecutivoPres.php';
$conexion=mysqli_connect('localhost','root','','unibank');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Amortización</title>
</head>
<body>
	<form action="../recibir.php" method="POST">
	<h2 class="fw-bolder text-center font-monospace text-black">Ingrese datos del cliente para pedir prestamo</h2>
	<h5 class="fw-bolder text-center font-monospace text-black">Nuestros prestamos solo tienen un 5% de comisión anual!</h5>

		<!-- Cuadro de texto -->
		<div style="background-color: rgba(100, 150, 300, 0.2);" class="p-3 border-top border-start border-end border-dark d-flex justify-content-center" style="max-width: 95%;">
			<b class="p-3">
			Numero de cuenta(cliente):
			<input type="number" class="form-control" name="NoCli" placeholder="Ej. 220001" required>
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
			<input type="password" class="form-control" name="passeje" placeholder="Ej. 12345" required>
			</b>
		</div>
		<div style="background-color: rgba(100, 150, 300, 0.2); " class="mb-4 p-3 border-bottom border-start border-end border-dark d-flex justify-content-center" style="max-width: 95%;">
			<select name="transtype">
				<option value="9" selected disabled> Tipo de transferencia</option>
				<option value="1">Transferencia</option>
			</select>
			<input class="mx-2" type="submit" value="Pedir prestamo">
		</div>
	</form>



    <h2 class="fw-bolder text-center font-monospace text-black">Pagar prestamos aceptados</h2>
	<form method="POST" action="./amortizacion/respuestasPrestamos/aceptar.php">
	<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Numero de cuenta</th>
      <th scope="col">Monto pedido</th>
      <th scope="col">Plazo de pago(meses)</th>
      <th scope="col">Estado</th>
	  <th sope="col">Acción</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM prestamos WHERE status='Aceptado'";
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
	  <td><a class="btn btn-warning" href="../amortizacion/pagoprestamo.php?id=<?=$mostrar['id']?>" role="button">Pagar</a>
    </tr>
  <?php
  }
  ?>
  </table>
  </form>
  <?php
require '../vistas/footer.php';
?>
</body>
</html>
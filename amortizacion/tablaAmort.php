<?php 
require 'formularioAmort.php';
//comprobamos si han sido enviados los datos
if($_SERVER['REQUEST_METHOD'] == 'POST'){//agrego una condicional
$meses = $_POST['meses']; //Aquí llegan los meses desde el formulario.
$auxMeses = $meses;
$porcentaje = 0.05; //Aquí esta a cambiar, es el interes que queramos poner
$prestamo = $_POST['dinero']; //Aquí llega el dinero desde el formuario
$totalPago =  0;
$totalInteres = 0;
$totalAmort = 0;
$pagoMensual = $pagoMensual = round(($prestamo * $porcentaje)/(1-(pow((1+$porcentaje),-$meses))),2); //calculo chistoso
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<!-- CSS bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 </head>

 <body>

 	<table class="table mt-3">
 		
 		<thead>
 			<th scope="col">Plazo</th>
 			<th scope="col">Pago mensual</th>
 			<th scope="col">Interes</th>
 			<th scope="col">Amortización</th>
 			<th scope="col">Resto a pagar</th>
 		</thead>
 		<tbody>
 			<tr> <!-- primer renglon -->
 				<td>0</td>
 				<td>-</td>
 				<td>-</td>
 				<td>-</td>
 				<td>$<?=$prestamo?></td>
 			</tr>
 			<?php for($i = 1; $i <= $auxMeses; $i++){ ?>
 			<tr>
 				<td><?php echo $i?></td>

 				<td><?php echo $pagoMensual; $totalPago+=$pagoMensual?></td>

 				<td><?php $interes = $prestamo * $porcentaje; echo $interes; $totalInteres+=$interes?></td>

 				<td><?php $amortizacion = $pagoMensual - $interes; echo $amortizacion; $totalAmort+=$amortizacion?></td>

 				<td> <?php $prestamo = $prestamo - $amortizacion; if($prestamo>1){echo $prestamo;}else {echo "0";}?> </td>
 			</tr>
 			<?php $meses--; }?>
 			<tr>
 				<td>Total</td>
 				<td>$<?php $totalPago //agregue los php y quite el '=' ?></td> 
 				<td>$<?php $totalInteres?></td>
 				<td>$<?php round($totalAmort)?></td>
 				<td>-</td>
 			</tr>
 		</tbody>
 	</table>

<a class="btn btn-primary" href="formularioAmort.php" >Regresar</a>

 </body>
 </html>
<?php
require '../vistas/header.php';
$conexion=mysqli_connect('localhost','root','','unibank');
?>

<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estatus de pedido</title>
  <!-- CSS bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 </head>

<body>
  <!-- INICIA TABLA -->
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero de cuenta</th>
      <th scope="col">Monto pedido</th>
      <th scope="col">Plazo de pago(meses)</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM prestamos";
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
    </tr>
  <?php
  }
  ?>
  </table>


</body>
<?php
require './vistas/headerEspecifico.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Amortización</title>
</head>
<body>
<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";

$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

//recuperar las variables
$NoCli=$_POST['NoCli'];
$dinero=$_POST['dinero'];
$meses=$_POST['meses'];
$status="Pendiente";
//hacemos la sentencia de sql
$sql="INSERT INTO prestamos (NoCli, dinero, meses, status) VALUES('$NoCli','$dinero','$meses','$status')";
$ejecutar=mysqli_query($con,$sql);


if(!$ejecutar){
 echo"Hubo Algun Error ".$con->error;
}else{
    echo '<script language="javascript">
        alert("El prestamo se ha solicitado correctamente!.");    
        window.location.href="estatusPedido/estatusPedido.php";
    </script>';
    /*
    echo"Su prestamo ha sido solicitado correctamente! <br>";
    echo"El estado de su prestamo paso a: ".$status."<br>";
    echo"<a href='ejecutivo.php'>Volver</a>";
    */
}
?>
</body>
</html>
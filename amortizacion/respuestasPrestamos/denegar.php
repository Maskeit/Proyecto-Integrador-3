<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";

$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

//recuperar las variables

//hacemos la sentencia de sql
//$sql="INSERT INTO prestamos VALUES('$NoCli','$dinero','$meses','$status')";
$sql="UPDATE prestamos SET status='Denegado'";

$ejecutar=mysqli_query($con,$sql);


if(!$ejecutar){
 echo"Hubo Algun Error";
}else{
    echo"El prestamo se ha rechazado correctamente! <br>";
    echo"<a href='../../adminUser.php'>Volver</a>";
}
?>
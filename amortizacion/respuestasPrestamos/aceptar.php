<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";

$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");


//hacemos la sentencia de sql
$sql="UPDATE prestamos SET status='Aceptado'";
$ejecutar=mysqli_query($con,$sql);

if(!$ejecutar){
 echo"Hubo Algun Error";
}else{
    echo"El prestamo se ha aceptado correctamente!, Se ha añadido su dinero a su cuenta <br>";
    echo"<a href='../../adminUser.php'>Volver</a>";
}
?>
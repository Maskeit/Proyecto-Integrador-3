<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

$id = $_GET['id'];
//Sentencia de sql
$sql="UPDATE prestamos SET status='Denegado' WHERE id = '$id'";
$ejecutar=mysqli_query($con,$sql);
//saldo = dinero en la cuenta, dinero = Dinero del prestamo
//$query="SELECT dinero FROM prestamos";

if(!$ejecutar){
 echo"Hubo Algun Error, no se pudo rechazar el prestamo correctamente";
 echo"<a href='../../adminUser.php'>Volver</a>";
}else{
    echo'<script language="javascript">
    alert("El prestamo se ha denegado correctamente!");    
    window.location.href="../../adminUser.php";
</script>';
}
?>
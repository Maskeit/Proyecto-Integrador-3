<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aceptación de prestamo</title>
</head>
<body>
<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

$id = $_GET['id'];

//Sentencia de sql
$sql="UPDATE prestamos SET status='Aceptado' WHERE id = '$id'";
$ejecutar=mysqli_query($con,$sql);
//saldo = dinero en la cuenta, dinero = Dinero del prestamo
//$query="SELECT dinero FROM prestamos";



if(!$ejecutar){
 echo"Hubo Algun Error, no se pudo aceptar correctamente el prestamo";
 echo"<a href='../../adminUser.php'>Volver</a>";
}else{
   echo '<script language="javascript">
        alert("El prestamo se ha aceptado correctamente!, Un usuario ejecutivo continuara con el proceso.");    
        window.location.href="../../adminUser.php";
    </script>';
    //echo" El prestamo se ha aceptado correctamente!, Un usuario ejecutivo continuara con el proceso <br>";
    //Crear nueva variable, sumar saldo + dinero

    /*$obtencion = "SELECT NoCli, dinero FROM prestamos WHERE id = '$id'";
    $resultado = $con->query($obtencion);
    $prestamo = $resultado->fetch_assoc();

    $ncliente = $prestamo['NoCli'];
    $dineroPres = $prestamo['dinero'];

    $obtencion2 = "SELECT saldo FROM cliente WHERE codigoCliente = '$ncliente'";
    $resultado2 = $con->query($obtencion2);
    $saldo = $resultado2->fetch_assoc();

    $dineroCl = $saldo['saldo'];

    $newDinero = $dineroCl + $dineroPres;
    echo "El nuevo saldo es: ".$newDinero;

    $sql="UPDATE cliente SET saldo=$newDinero WHERE id='$id'" ;
    if($sql)
    {
        echo " El prestamo fue exitoso! \n";
        echo"<a href='../../adminUser.php'>Volver</a>";
    }
    else{
        echo "Hubo un error al actualzar sus datos! ";
    }*/
}
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetAlert.js"></script>

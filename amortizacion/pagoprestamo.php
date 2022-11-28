<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="unibank";
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

$id = $_GET['id'];

//Sentencia de sql
$sql="UPDATE prestamos SET status='Pagado' WHERE id = '$id'";
$ejecutar=mysqli_query($con,$sql);
//saldo = dinero en la cuenta, dinero = Dinero del prestamo
//$query="SELECT dinero FROM prestamos";



if(!$ejecutar){
 echo"No se pudo procesar el pago";
}else{
    echo '<script language="javascript">
        alert("El prestamo se ha transferido correctamente!,Se ha añadido la bonificacion a la cuenta");    
        window.location.href="./genLoan1.php";
    </script>';
    // echo" El prestamo se ha aceptado correctamente!, Se ha añadido su dinero a su cuenta de debito <br>";
    //Crear nueva variable, sumar saldo + dinero

    $obtencion = "SELECT NoCli, dinero FROM prestamos WHERE id = '$id'";
    $resultado = $con->query($obtencion);
    $prestamo = $resultado->fetch_assoc();

    $ncliente = $prestamo['NoCli'];
    $dineroPres = $prestamo['dinero'];

    $obtencion2 = "SELECT saldoDeb FROM debito WHERE codigoCliente = '$ncliente'";
    $resultado2 = $con->query($obtencion2);
    $saldo = $resultado2->fetch_assoc();

    $dineroCl = $saldo['saldoDeb'];

    $newDinero = $dineroCl + $dineroPres;
    echo "El nuevo saldo de su tarjeta es: ".$newDinero;

    $sql="UPDATE debito SET saldoDeb=$newDinero WHERE id='$id'" ;
    if($sql)
    {
        echo " El prestamo fue exitoso! \n";
        echo"<a href='./genLoan1.php'>Volver</a>";
    }
    else{
        echo "Hubo un error al actualzar sus datos! ";
    }
}
?>
<?php session_start();
require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


if(isset($_SESSION['codigoCliente'])){
    require 'vistas/cliente.view.php';
} else {
    header('Location: rscCliente/loginCliente.php');
    die();
}

/* consulta para obtener el nombre
$nombreCliente = "SELECT nombre FROM cliente where codigoCliente = :codigoCliente";
$resultado = mysqli_query($conexion, $nombreCliente);
    $row=mysqli_fetch_assoc($resultado);
*/
//require 'vistas/cliente.view.php';
?> 

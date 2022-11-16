<?php session_start();
require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
require 'funciones/funciones.php';

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
$saldo = $_SESSION['saldo'];


$consulta = "SELECT * FROM debito WHERE codigoCliente = $codigoCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['saldoDeb'];
    $dato['BIN'];    
}



/*datos de la tarjeta del cliente
$debitoSaldo = $_SESSION['saldoDeb']; 
$debitoBIN = $_SESSION['BIN'];*/

if(isset($_SESSION['codigoCliente'])){
    require 'vistas/consultas.view.php';
} else {
    header('Location: index.php');
    die();
}



?>
<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
//$saldo =  $_SESSION['saldo'];

//consulta para obtener todo de la tabla cliente
$consulta = "SELECT * FROM cliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);


//consutla para las tarjetas de debito
$consulta = "SELECT * FROM debito";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['saldoDeb'];
}

//consulta para traer datos de la tabla debito
$consulta = "SELECT * FROM debito WHERE codigoCliente = $codigoCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosDeb=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datosDeb as $debito){
    $debito['idTarjeta'];
    $debito['codigoCliente'];
    $debito['BIN'];
    $debito['saldoDeb'];
}

//definiendo valores para enviar al servidor
$debito = ['saldoDeb'];
$ctaOrigen = ['codigoCliente'];
$ctaDestino = ['ctaDestino'];
$beneficiario = ['beneficiario'];
$concepto = ['concepto'];
$monto = ['monto'];
$banco = ['banco'];

/*
$consultaUpdate = "UPDATE saldo SET saldoDeb = saldoDeb + monto WHERE ctaDestino = ctaDestino";
$resultado = $conexion->prepare($consultaUpdate);
$resultado->execute();
$resUpdate=$resultado->fetchAll(PDO::FETCH_ASSOC);
*/

require 'transferencia.view.php';
?>
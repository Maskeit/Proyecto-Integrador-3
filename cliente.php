<?php session_start();

/*
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$statement = $conexion->prepare('SELECT * FROM alta WHERE codigoCliente = :codigoCliente AND codigoCliente = :codigoCliente');
$statement->execute(array(
        ':codigoCliente' => $codigoCliente,
       
    ));
*/


if(isset($_SESSION['codigoCliente'])){
    require 'vistas/cliente.view.php';
} else {
    header('Location: rscCliente/loginCliente.php');
    die();
}

//require 'vistas/cliente.view.php';
?> 

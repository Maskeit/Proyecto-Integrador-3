<?php session_start();
require 'bd/conexion.php';
//include ("bd/conexion.php");
$objeto = new Conexion();
$conexion = $objeto->Conectar();
require 'funciones/funciones.php';

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
$saldo = $_SESSION['saldo'];


if(isset($_SESSION['codigoCliente'])){
    require 'vistas/consultas.view.php';
} else {
    header('Location: index.php');
    die();
}
?>
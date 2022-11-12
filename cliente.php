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

?> 

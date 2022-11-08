<?php session_start();

require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
require 'funciones/funciones.php';

$cc_cliente = cc_cliente($_POST['codigoCliente']);
/*
if (empty($cc_cliente)){
    header ('location: ./index.php');
}
*/
$saldo = obtener_saldo_por_cc($conexion, $cc_cliente);

print_r($saldo);
$saldo = $saldo[0];

require 'vistas/consultas.view.php';
?>
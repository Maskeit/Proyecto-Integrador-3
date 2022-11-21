<?php session_start();
$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

$ctaOrigen =  $_POST['ctaOrigen'];
$ctaDestino = $_POST['ctaDestino'];
$beneficiario = filter_var( $_POST['beneficiario'], FILTER_SANITIZE_STRING);
$concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
$monto = $_POST['monto'];
$banco = $_POST['banco'];


require 'comprobante.view.php';
?>
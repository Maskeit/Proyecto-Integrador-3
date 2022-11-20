<?php session_start();
$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

$ctaOrigen =  $_POST['ctaOrigen'];
$ctaDestino = $_POST['ctaDestino'];
$beneficiario = filter_var( $_POST['beneficiario'], FILTER_SANITIZE_STRING);
$concepto = $_POST['concepto'];
$monto = $_POST['monto'];
$banco = $_POST['banco'];
  
$errores = '';
if (empty($concepto) or empty($monto)) {
    $errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
}  
require 'comprobante.view.php';
?>
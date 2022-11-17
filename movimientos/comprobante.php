<?php session_start();
$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
$saldo = $_SESSION['saldo'];
  
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
        $monto = filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT,);
        $ctaOrigen = $_POST['ctaOrigen'];
        $ctaDestino = $_POST['ctaDestino'];
        $banco = $_POST['banco'];
        
        $errores = '';
        if (empty($concepto) or empty($monto)) {
            $errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
        }   
    }
require 'comprobante.view.php';
?>
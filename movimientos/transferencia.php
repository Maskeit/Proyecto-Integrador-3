<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//comprobamos que los datos esten correctos

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
    $monto = filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT,);
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];
    
    $errores = '';
    if (empty($concepto) or empty($monto)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
	} else {
        header ('Location: comprobante.php');
    }

}

require 'transferencia.view.php';
?>
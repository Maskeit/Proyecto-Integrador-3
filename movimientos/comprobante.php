<?php session_start();

/*
    $concepto = $_POST['concepto'];
    $monto = $_POST['monto'];
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];
*/    
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

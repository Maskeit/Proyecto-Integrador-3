<?php session_start();
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

$ctaOrigen =  $_POST['ctaOrigen'];
$ctaDestino = $_POST['ctaDestino'];
$beneficiario = filter_var( $_POST['beneficiario'], FILTER_SANITIZE_STRING);
$concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
$monto = $_POST['monto'];
$banco = $_POST['banco'];

if(empty($ctaDestino) or empty($beneficiario) or empty($concepto) or empty($monto)){
    $errores .= '<li>Por favor rellene bien los campos anteriores</li>';
} else if($errores= ''){
    $consultaInsert = $conexion->prepare('INSERT INTO comprobante (idComprobante, origenDeb, destionDeb, beneficiario, concepto, monto, banco, fecha) VALUES (null, :origenDeb, :destinoDeb, :beneficiario, :concepto, :monto, :banco)');
    $consultaInsert->execute(array(':origenDeb' => $ctaOrigen,
                                   ':destinoDeb' => $ctaDestino, 
                                   ':beneficiario' =>$beneficiario, 
                                   ':concepto' => $concepto, 
                                   ':monto' =>$monto, 
                                   ':banco'=> $banco));
}


/*
$consultaUpdate = "UPDATE saldo SET saldoDeb = saldoDeb + monto WHERE ctaDestino = ctaDestino";
$resultado = $conexion->prepare($consultaUpdate);
$resultado->execute();
$resUpdate=$resultado->fetchAll(PDO::FETCH_ASSOC);
*/

require 'comprobante.view.php';
?>
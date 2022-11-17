<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
//$saldo =  $_SESSION['saldo'];

//consulta para obtener todo de la tabla cliente
$consulta = "SELECT * FROM cliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);


//consutla para las tarjetas de debito
$consulta = "SELECT * FROM debito";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['saldoDeb'];
}

//consulta para traer datos de la tabla debito
$consulta = "SELECT * FROM debito WHERE codigoCliente = $codigoCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosDeb=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datosDeb as $debito){
    $debito['idTarjeta'];
    $debito['codigoCliente'];
    $debito['BIN'];
    $debito['saldoDeb'];
}



//comprobamos que los datos esten correctos

/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
    $monto = filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT,);
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];
    
    $errores = '';
    if (empty($concepto) or empty($monto)) {

        echo 'Por favor llene todos los campos correctamente';

		//$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
        //$concepto .= 'No se ha escrito ningun concepto';
	}elseif($monto > $dato['saldoDeb']){
        $errores.= '<li>El monto supera el limite disponible</li>';
    } 
} 
*/


require 'transferencia.view.php';
?>
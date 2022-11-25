<?php session_start();

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//$conexion = new mysqli('localhost', 'root', '', 'unibank');

$codigoCliente = ['codigoCliente'];
if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM comprobante WHERE codigoCliente = $codigoCliente");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'idComprobante' => $fila['IDcomprobante'],
			'origenDeb' => $fila['OrigenDeb'],
			'destinoDeb' => $fila['DestinoDeb'],
			'beneficiario' => $fila['Beneficiario'],
			'monto'	=> $fila['Monto'],
            'banco'	=> $fila['Banco'],
            'fecha'	=> $fila['Fecha']
		];
		array_push($respuesta, $usuario);
	}
}
echo json_encode($respuesta);
<?php session_start();

require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
require 'funciones/funciones.php';

/*
$cc_cliente = cc_cliente($_POST['codigoCliente']);
/*
if (empty($cc_cliente)){
    header ('location: ./index.php');
}

$saldo = obtener_saldo_por_cc($conexion, $cc_cliente);

print_r($saldo);
$saldo = $saldo[0];
*/

$sal = $conexion->prepare("SELECT * FROM cliente"); //$sal guarda la consulta
	$sal->setFetchMode(PDO::FETCH_ASSOC);
	$sal->execute();

	while($row = $sal->fetch()){
		$saldo = $row['saldo'];
	}

$deb = $conexion->prepare("SELECT * FROM debito"); //$sal guarda la consulta
	$deb->setFetchMode(PDO::FETCH_ASSOC);
	$deb->execute();

	while($row = $deb->fetch()){
		$debito = $row['saldo'];
	}

$cred = $conexion->prepare("SELECT * FROM credito"); //$sal guarda la consulta
	$cred->setFetchMode(PDO::FETCH_ASSOC);
	$cred->execute();

	while($row = $cred->fetch()){
		$credito = $row['saldo'];
	}
require 'vistas/consultas.view.php';
?>
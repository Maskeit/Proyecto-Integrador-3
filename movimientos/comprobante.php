<?php session_start();
include_once '../bd/conexion.php';
include_once '../funciones/funciones.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//parametros de sesión
$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

//validacion de los parametros de formulario
if(
    (!isset($_POST['ctaOrigen'])) || 
    (!isset($_POST['ctaDestino'])) || 
    (!isset($_POST['beneficiario'])) || 
    (!isset($_POST['concepto'])) || 
    (!isset($_POST['monto'])) || 
    (!isset($_POST['banco']))
){
    echo 'params error';
    return;
}

//parametros del formulario
$ctaOrigen =  $_POST['ctaOrigen']; //este es el numero de tarjeta BIN
$ctaDestino = $_POST['ctaDestino'];
$beneficiario = filter_var( $_POST['beneficiario'], FILTER_SANITIZE_STRING);
$concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
$monto = $_POST['monto'];
$banco = $_POST['banco'];


//validamos existencia de cuenta origen
$consulta = "SELECT * FROM debito WHERE codigoCliente = $codigoCliente AND BIN = '$ctaOrigen'";
$resultado = $conexion -> prepare($consulta);
$resultado -> execute();
$datosDeb = $resultado -> fetchAll(PDO::FETCH_ASSOC);

$orBin = '';//BIn from database = BIN ORIGEN
$saldoDeb = '';
$idTarjeta = '';
foreach($datosDeb as $debito){
    $idTarjeta = $debito['idTarjeta'];
    $saldoDeb = $debito['saldoDeb'];
    $orBin = $debito['BIN'];//BIn from database
}
if(
    ($orBin == '') || 
    ($saldoDeb == '') || 
    ($idTarjeta == '')
){
    echo 'internaL server error';
    return;
}

//validamos existencia de cuenta destino
$consulta = "SELECT * FROM debito WHERE BIN = '$ctaDestino'";
$resultado = $conexion -> prepare($consulta);
$resultado -> execute();
$datosDes = $resultado -> fetchAll(PDO::FETCH_ASSOC);

$desBin = '';//BIn from database = BIN DESTINO
$saldoActual = '';
foreach($datosDes as $debitoDes){
    $desBin = $debitoDes['BIN'];
    $saldoActual = $debitoDes['saldoDeb'];
}
if(
    ($desBin == '') || 
    ($saldoActual == '')
){
    echo 'internal server error';
    return;
}

//validamos que la cuenta origne y destino no sea la misma
if($desBin == $orBin){
    echo 'internal server error';
    return;
}

//validamos el monto permitido
if(
    ($monto > 8000) || 
    ($monto > $saldoDeb)
){
    echo '<li>EL monto no puede superar el limite de tu cuenta ni cantidades mayores a $8000<li>';
    return;
}

//hacemos el cargo a la cuenta origen
$result = $saldoDeb - $monto;//500 - 400 : $result = $100
$cargo = $conexion -> prepare("UPDATE debito SET saldoDeb = '$result' WHERE BIN = '$orBin'");//probar con BIN en lugar de codigo de CLiente
$cargo -> execute();
if(!$cargo){
    echo 'cargo no aplicado...';
    return;
}

//hacemos la bonificación
$result = $monto + $saldoActual;
$bonificacion = $conexion -> prepare("UPDATE debito SET saldoDeb = '$result' WHERE BIN = '$desBin'");
$bonificacion -> execute();
if(!$bonificacion){
    echo 'bonificacion no aplicada, contacte al administrador...';
    return;
}

//insertamos los datos del comprobante
$date = getTime();
$comprobante = "insert into comprobante values(
    0,
    '$orBin',
    '$desBin',
    '$beneficiario',
    '$concepto',
    '$monto',
    '$banco',
    '$date'
)";
$query = $conexion -> prepare($comprobante);
$query -> execute();
if(!$query){
    echo 'internal server error';
    return; 
}

require 'comprobante.view.php';
return;
?>
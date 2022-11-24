<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php session_start();
include_once '../bd/conexion.php';
include_once '../funciones/funciones.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$errores = ''; //aqui guardaremos todos los errores que tengamos y los mostraremos
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
    $errores = 'params error';
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
    echo '<div class="alert alert-success" role="alert">internaL server error</div>';
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
    echo '<div class="alert alert-danger" role="alert">internal server error</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
    return;
}

//validamos que la cuenta origne y destino no sea la misma
if($desBin == $orBin){
    echo'<div class="alert alert-danger" role="alert">internal server error</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
    return; 
}

//validamos el monto permitido
if(
    ($monto > 8000) || 
    ($monto > $saldoDeb)
){ 
    echo '<div class="alert alert-danger" role="alert">El monto no puede superar el limite de tu cuenta ni cantidades mayores a $8000</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
    return;
}

//hacemos el cargo a la cuenta origen
$result = $saldoDeb - $monto;//500 - 400 : $result = $100
$cargo = $conexion -> prepare("UPDATE debito SET saldoDeb = '$result' WHERE BIN = '$orBin'");//probar con BIN en lugar de codigo de CLiente
$cargo -> execute();
if(!$cargo){
    echo '<div class="alert alert-danger" role="alert">cargo no aplicado...</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
    return;
}

//hacemos la bonificación
$result = $monto + $saldoActual;
$bonificacion = $conexion -> prepare("UPDATE debito SET saldoDeb = '$result' WHERE BIN = '$desBin'");
$bonificacion -> execute();
if(!$bonificacion){
    echo '<div class="alert alert-danger" role="alert">Bonificacion no aplicada, contacte al administrador...</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
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
    echo '<div class="alert alert-danger" role="alert">Internal server error</div>';
    echo '<br>';
    echo '<div> <a href="transferencia.php" class="btn btn-secondary">Volver</a> </div>';
    return; 
}

require 'comprobante.view.php';
return;
?>
<?php session_start();
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

//consulta para traer los id de tarjetas de debito
$consulta = "SELECT * FROM debito WHERE codigoCliente = $codigoCliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosDeb=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datosDeb as $debito){
    $debito['idTarjeta'];
    $debito['saldoDeb'];
}
//traemos la tarjeta
$idTarjeta = $debito['idTarjeta'];
$ctaOrigen =  $_POST['ctaOrigen'];
$ctaDestino = $_POST['ctaDestino'];
$beneficiario = filter_var( $_POST['beneficiario'], FILTER_SANITIZE_STRING);
$concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
$monto = $_POST['monto'];
$banco = $_POST['banco'];


$errores = '';
//pendiente el saldoDeb
$consultaUpdate1 = $conexion->prepare("UPDATE debito SET saldoDeb = saldoDeb - :monto WHERE idTarjeta = :idTarjeta  or BIN = :BIN;");//probar con BIN en lugar de codigo de CLiente
$resultado = $consultaUpdate1->execute([':monto'=>$monto, ':idTarjeta'=>$idTarjeta, ':codigoCliente'=>$codigoCliente]);

if($monto>$saldoDeb || $monto>=8000){
    $errores .= '<li>EL monto no puede superar el limite de tu cuenta ni cantidades mayores a $8000<li>';
}
if($resultado=== TRUE){
    echo "Cambios guardados";
}
else{
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
} 


$consultaUpdate2 = $conexion->prepare("UPDATE debito SET saldoDeb = saldoDeb + :monto WHERE BIN = :ctaDestino;");
$resultado2 = $consultaUpdate2->execute([':monto'=>$monto, ':ctaDestino'=>$ctaDestino]);
if($resultado2=== TRUE){
    echo "Cambios guardados";
}
else{
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
} 



if(empty($ctaDestino) or empty($beneficiario) or empty($concepto) or empty($monto)){
    $errores .= '<li>Por favor rellene bien los campos anteriores</li>';
} else if($errores= ''){
    $consultaInsert = $conexion->prepare('INSERT INTO comprobante (idComprobante, origenDeb, destionDeb, beneficiario, concepto, monto, banco, fecha) VALUES (null, :origenDeb, :destinoDeb, :beneficiario, :concepto, :monto, :banco)');
    $consultaInsert->execute(array(
        ':origenDeb' => $ctaOrigen,
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
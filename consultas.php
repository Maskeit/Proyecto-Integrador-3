<?php session_start();
require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
require 'funciones/funciones.php';
/**
 * 1. consutlar la base de datos
 * 2. traer los datos de la bd
 * 3. buscar el codigo de cliente mediante un where 
 * e igualar a la variable $codigoCliente ya que esta
 * es la que tiene una sesion iniciada.
 */
$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];

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

$saldoSuma = 0; //y las otras variables que se sumen
foreach ($datosDeb as $debito){
    $saldoSuma = $saldoSuma+$debito['saldoDeb'];
}
//consulta para traer datos de la tabla credito
$consulta2 = "SELECT * FROM credito WHERE codigoCliente = $codigoCliente";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$datosCred=$resultado2->fetchAll(PDO::FETCH_ASSOC);

foreach($datosCred as $credito){
    $credito['idTarjeta'];
    $credito['codigoCliente'];
    $credito['BIN'];
    $credito['saldoCred'];
}



if(isset($_SESSION['codigoCliente'])){
    require 'vistas/consultas.view.php';
} else {
    header('Location: index.php');
    die();
}



?>
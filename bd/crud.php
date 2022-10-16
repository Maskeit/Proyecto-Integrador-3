<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellidoPaterno = (isset($_POST['apellidoPaterno'])) ? $_POST['apellidoPaterno'] : '';
$apellidoMaterno = (isset($_POST['apellidoMaterno'])) ? $_POST['apellidoMaterno'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$municipio = (isset($_POST['municipio'])) ? $_POST['municipio'] : '';
$calle = (isset($_POST['calle'])) ? $_POST['calle'] : '';
$colonia = (isset($_POST['colonia'])) ? $_POST['colonia'] : '';
$codigoPostal = (isset($_POST['codigoPostal'])) ? $_POST['codigoPostal'] : '';
$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
$curp = (isset($_POST['curp'])) ? $_POST['curp'] : '';
$fechaNacimiento = (isset($_POST['fechaNacimiento'])) ? $_POST['fechaNacimiento'] : '';
$ocupacion = (isset($_POST['ocupacion'])) ? $_POST['ocupacion'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idAlta = (isset($_POST['idAlta'])) ? $_POST['idAlta'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO alta (nombre, apellidoPaterno, apellidoMaterno, estado, municipio, calle, colonia, codigoPostal, sexo, curp, fechaNacimiento, ocupacion) VALUES('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$estado', '$municipio', '$calle', '$colonia', '$codigoPostal', '$sexo', '$curp', '$fechaNacimiento', '$ocupacion') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM alta ORDER BY idAlta DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE alta SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', estado='$estado', municipio='$municipio', calle='$calle', colonia='$colonia', codigoPostal='$codigoPostal', sexo='$sexo', curp='$curp', fechaNacimiento='$fechaNacimiento', ocupacion='$ocupacion'  WHERE idAlta='$idAlta' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM alta WHERE idAlta='$idAlta' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM alta WHERE idAlta='$idAlta' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM alta";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
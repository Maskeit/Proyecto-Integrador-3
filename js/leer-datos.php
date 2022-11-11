<?php
/*
require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
*/
error_reporting(0);

header('Content-type: application/json; charset=utf-8');
$conexion = new mysqli('localhost', 'root', '', 'unibank');

if($conexion->connect_errno){
    $respuesta = [
        'error' => true
    ];
} else{
    $conexion->set_charset("utf8");
    $statement = $conexion->prepare("SELECT * FROM ejecutivos");
    $statement->execute();
    $resultados = $statement->get_result();

    $respuesta = [];
    
    while($fila = $resultados->fetch_assoc()){
        $ejecutivo = [
            'idEjecutivo'     => $fila['idEjecutivo'],
            'usuarioEjecutivo' => $fila['usuarioEjecutivo'],
            'sucursal' => $fila['sucursal']
         ];
         array_push($respuesta, $ejecutivo);
    }
}

echo json_encode($respuesta);

?>
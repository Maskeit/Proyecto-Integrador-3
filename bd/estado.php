<?php
    include_once '../bd/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $origenDeb = (isset($_POST['origenDeb'])) ? $_POST['origenDeb'] : '';
    $destinoDeb = (isset($_POST['destinoDeb'])) ? $_POST['destinoDeb'] : '';
    $beneficiario = (isset($_POST['beneficiario'])) ? $_POST['beneficiario'] : '';
    $concepto = (isset($_POST['concepto'])) ? $_POST['concepto'] : '';
    $monto = (isset($_POST['monto'])) ? $_POST['monto'] : '';
    $inputGroupSelect02 = (isset($_POST['inputGroupSelect02'])) ? $_POST['inputGroupSelect02'] : '';
    $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
   
    $idComprobante = (isset($_POST['idComprobante'])) ? $_POST['idComprobante'] : '';


    switch($opcion){
        case 1:
            $consulta = "INSERT INTO comprobante (origenDeb, destinoDeb, beneficiario, concepto, monto, inputGroupSelect02, fecha) VALUES('$origenDeb','$destinoDeb', '$beneficiario', '$concepto', '$monto', '$inputGroupSelect02', '$fecha') ";			
            $resultado = $conexion->prepare($consulta);
            $resultado->execute(); 
            
            $consulta = "SELECT * FROM comprobante ORDER BY idComprobante DESC LIMIT 1";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
            break;    
        case 2:        
            $consulta = "UPDATE comprobante SET origenDeb='$origenDeb' destinoDeb='$destinoDeb', beneficiario='$beneficiario', concepto='$concepto', monto='$monto', inputGroupSelect02='$inputGroupSelect02', fecha='$fecha'  WHERE idComprobante='$idComprobante' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            
            $consulta = "SELECT * FROM comprobante WHERE idComprobante='$idComprobante' ";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 3:        
            $consulta = "DELETE FROM comprobante WHERE idComprobante='$idComprobante' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();                           
            break;
        case 4:    
            $consulta = "SELECT * FROM comprobante";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
    }

    print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
    $conexion=null;


?>
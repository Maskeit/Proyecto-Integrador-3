<?php session_start();

require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

?> 

 
<?php
require 'vistas/consultas.view.php';
?>
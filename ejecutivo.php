<?php session_start();

if(isset($_SESSION['usuarioEjecutivo'])){
    require 'vistas/ejecutivo.view.php';
} else {
    header('Location: rscEjecutivo/loginEjecutivo.php');
    die();
}

?> 

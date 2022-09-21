<?php session_start();

if(isset($_SESSION['usuarioEjecutivo'])){
    require 'vistas/ejecutivo.view.php';
} else {
    header('Location: loginEjecutivo.php');
    die();
}

?> 

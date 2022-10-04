<?php session_start();

if(isset($_SESSION['usuarioCliente'])){
    require 'vistas/cliente.view.php';
} else {
    header('Location: loginCliente.php');
    die();
}

?> 

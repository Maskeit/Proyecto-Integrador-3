<?php session_start();

if(isset($_SESSION['codigoCliente'])){
    require 'vistas/debito.view.php';
} else {
    header('Location: index.php');
    die();
}

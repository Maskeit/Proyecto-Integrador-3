<?php session_start();

    $concepto = $_POST['concepto'];
    $monto = $_POST['monto'];
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];


require 'comprobante.view.php';

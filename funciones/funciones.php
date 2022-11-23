<?php 

//Method to get the server time
function getTime(){
    date_default_timezone_set("America/Mexico_City");
    $year = date('Y-m-d', time());
    $hour = date('H:i:s', time());
    return $year.' '.$hour;//example -> 2021-01-20 21:01:33
}

#FUNCIONES PARA INICIOS Y CIERRES DE SESION
function comprobar_sesion_ejecutivo(){
    if(isset($_SESSION['usuarioEjecutivo'])){
        header('Location: ../index.php');
        die();
    }
}

function comprobar_sesion_cliente(){
    if(isset($_SESSION['codigoCliente'])){
        header('Location: ../index.php');
        die();
    }
}

//funcion para primero entrar como administrador EN PRUEBAS
function comprobar_sesion_administrador(){
    if(isset($_SESSION['adminUser'])){
        header('Location: ../index.php');
    } else{
        header('Location: adminUser.php');;
    }
}

//funcion de prueba para un boton de cerrar sesion sin un archivo extra
function cerrar_sesion_ejecutivo(){
    session_destroy();
$_SESSION = array();

header('Location: ../index.php');
die();

}

//funcion para cerrar la sesion del cliente
function cerrar_sesion_cliente(){
    session_destroy();
$_SESSION = array();

header('Location: ../index.php');
die();

}


function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}
#FUNCION PARA CONECTARNOS A LA BASE DE DATOS
/*
function conectar_base_datos(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=unibank', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}
*/
//esta funcion se utiliza en la paginacion de movimientos que tenga la consulta 
//de saldos en el perfil del cliente
function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_movimiento($movimiento_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $movimiento_por_pagina - $movimiento_por_pagina: 0 ;  
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM movimientos LIMIT $inicio, $movimiento_por_pagina"); //falta hacer una tabla con los movimientos creados
    $sentencia->execute();
    return $sentencia->fetchAll();
}


?>
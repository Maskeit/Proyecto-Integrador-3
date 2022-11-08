<?php 


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
        header('Location: adminUser.php');
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

#FUNCION PARA CONECTARNOS A LA BASE DE DATOS// update: se usa el objeto de la clase en bd/conexion.php
function conectar_base_datos(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}



?>
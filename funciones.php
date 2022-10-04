<?php 

function comprobar_sesion_ejecutivo(){
    if(isset($_SESSION['usuarioEjecutivo'])){
        header('Location: index.php');
        die();
    }
}

function comprobar_sesion_cliente(){
    if(isset($_SESSION['usuarioCliente'])){
        header('Location: index.php');
        die();
    }
}

//funcion para primero entrar como administrador EN PRUEBAS
function comprobar_sesion_administrador(){
    if(isset($_SESSION['adminUser'])){
        header('Location: index.php');
    } else{
        header('Location: adminUser.php');;
    }
}

//funcion de prueba para un boton de cerrar sesion sin un archivo extra
function cerrar_sesion_ejecutivo(){
    session_destroy();
$_SESSION = array();

header('Location: index.php');
die();

}

?>
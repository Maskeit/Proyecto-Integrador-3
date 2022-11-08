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
function cc_cliente($cc){
    return (int)limpiarDatos ($cc);
}
function obtener_saldo_por_cc($conexion, $cc_cliente){
    $resultado = $conexion->query("SELECT * FROM cliente WHERE codigoCliente = $cc_cliente LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

?>
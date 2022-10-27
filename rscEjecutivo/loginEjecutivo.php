<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
require '../funciones/funciones.php';
comprobar_sesion_ejecutivo();
// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //comprobamos si los datos se han enviado
	$usuarioEjecutivo = filter_var(strtolower($_POST['usuarioEjecutivo']), FILTER_SANITIZE_STRING);
	$sucursal = $_POST['sucursal'];
	$password = $_POST['password'];
	$password = hash('sha512', $password);

//conexion()
												//tabla de la db    //el usuario ingresado              //contrasena ingresada coincida con la tabla
	$statement = $conexion->prepare('SELECT * FROM ejecutivos WHERE usuarioEjecutivo = :usuarioEjecutivo AND sucursal = :sucursal AND pass = :password');
	$statement->execute(array(
			':usuarioEjecutivo' => $usuarioEjecutivo, //placeholder usuarioEjecutivo
			':sucursal' => $sucursal, //placeholder de Sucursal
			':password' => $password //placeholder password
		));

	$resultado = $statement->fetch(); //fetch devuelve el resultado
	if ($resultado !== false) {
		$_SESSION['usuarioEjecutivo'] = $usuarioEjecutivo;
		header('Location: ../ejecutivo.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'loginEjecutivo.view.php';

?>
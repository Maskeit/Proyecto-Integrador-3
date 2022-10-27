<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['codigoCliente'])) {
	header('Location: ../index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$codigoCliente = filter_var(strtolower($_POST['codigoCliente']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);


	$statement = $conexion->prepare('SELECT * FROM cuentas WHERE codigoCliente = :codigoCliente AND pass = :password');
	$statement->execute(array(
			':codigoCliente' => $codigoCliente,
			':password' => $password
		));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['codigoCliente'] = $codigoCliente;
		header('Location: ../cliente.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'loginCliente.view.php';

?>
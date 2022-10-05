<?php session_start();
// Comprobamos si el cliente ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
require '../funciones/funciones.php';
comprobar_sesion_cliente();
// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //comprobamos si los datos se han enviado
	$codigoCliente = filter_var(strtolower($_POST['codigoCliente']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	// Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
												//tabla de la db    //el usuario ingresado              //contrasena ingresada coincida con la tabla
	$statement = $conexion->prepare('SELECT * FROM cuentas WHERE codigoCliente = :codigoCliente AND pass = :password');
	$statement->execute(array(
			':codigoCliente' => $codigoCliente, //placeholder codigoCliente
			
			':password' => $password //placeholder password
		));

	$resultado = $statement->fetch(); //fetch devuelve el resultado
	if ($resultado !== false) {
		$_SESSION['codigoCliente'] = $codigoCliente;
		header('Location: ./cliente.php');

		echo "datos correctos";
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'loginCliente.view.php';

?>
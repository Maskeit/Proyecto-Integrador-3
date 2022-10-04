<?php session_start();
//comprobamos si el cliente ya tiene una sesion iniciada
#si ya tiene una sesion redirigimos al perfil de cliente
require '../funciones.php';
comprobar_sesion_cliente();
// comprobamos si ya han sido enviados los datos

if($_SERVER['REQUEST_METHOD'] == 'POST'){ //comprobar si los datos se han enviado
    $codigoCliente = filter_var(strtolower($_POST['codigoCliente']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    // Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	                                            //tabla de la db    //el usuario ingresado   //contrasena ingresada coincida con la tabla
    $statement = $conexion->prepare('SELECT * FROM cuentas WHERE codigoCliente = :codigoCliente AND pass = :password');
    $statement->execute(array(
            ':codigoCliente' => $codigoCliente, //placeholder codigoCliente
            ':password' => $password //placeholder password
    ));

    $resultado = $statement->fetch(); //fetch devuelve el resultado
	if ($resultado !== false) {
		$_SESSION['codigoCliente'] = $codigoCliente;
		header('Location: cliente.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}




require 'loginCliente.view.php';

?>
<?php session_start();

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //comprobamos si los datos se han enviado
	$adminUser = filter_var(strtolower($_POST['adminUser']), FILTER_SANITIZE_STRING);
	$adminPass = $_POST['adminPass'];
	//$adminPass = hash('sha512', $adminPass); creo que no la puedo comprobar en el logi porque no esta hasheada

	// Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
												//tabla de la db    //el usuario ingresado              //contrasena ingresada coincida con la tabla
	$statement = $conexion->prepare('SELECT * FROM administrador WHERE adminUser = :adminUser AND adminPass = :adminPass');
	$statement->execute(array(
			':adminUser' => $adminUser,//placeholder adminUser
			':adminPass' => $adminPass //placeholder password
		));

	$resultado = $statement->fetch(); //fetch devuelve el resultado
	if ($resultado !== false) {
		$_SESSION['adminUser'] = $adminUser;
		header('Location: ../adminUser.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}


require 'loginAdmin.view.php';



?>
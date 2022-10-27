<?php session_start();

//En esta carpeta estan archivos que no se estan utilizando y probablemente se descarten al final
require '../funciones/funciones.php';
# Si ya se tiene permisos de administrador,se puede acceder al registro de ejecutivos
//comprobar_sesion_ejecutivo();//usuarioAdministrador

// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
	$usuarioEjecutivo = filter_var(strtolower($_POST['usuarioEjecutivo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

// // Tambien podemos limpiar mediante las funciones
// 	# El problema es que si lo hacemos de esta forma no estamos eliminando caracteres especiales, solo los transformamos.
	
// 	// La funcion htmlspecialchars() convierte caracteres especiales en entidades HTML, (&, "", '', <, >)
// 	$usuario = htmlspecialchars($_POST['usuario']);
// 	// La funcion trim() elimina espacio en blanco al inicio y final de la cadena de texo
// 	$usuario = trim($usuario);
// 	// stripslashes() quita las barras de un string con comillas escapadas, los \ los convierte en \'
// 	$usuario = stripslashes($usuario);

	$errores = '';

	// Comprobamos que ninguno de los campos este vacio.
	if (empty($usuarioEjecutivo) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
	} else {

		// Comprobamos que el usuario no exista ya.
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM ejecutivos WHERE usuarioEjecutivo = :usuarioEjecutivo LIMIT 1');//tabla ejecutivos 
		$statement->execute(array(':usuarioEjecutivo' => $usuarioEjecutivo));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();

		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		// Hasheamos nuestra contraseña para protegerla un poco.
		# OJO: La seguridad es un tema muy complejo, aqui solo estamos haciendo un hash de la contraseña,
		# pero esto no asegura por completo la informacion encriptada.
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		// Comprobamos que las contraseñas sean iguales.
		if ($password != $password2) {
			$errores.= '<li>Las contraseñas no coinciden</li>';
		}
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO ejecutivos (id, usuarioEjecutivo, pass) VALUES (null, :usuarioEjecutivo, :pass)');
		$statement->execute(array(
				':usuarioEjecutivo' => $usuarioEjecutivo,
				':pass' => $password
			));
		//	echo "Hola mundo";
		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: ../rscEjecutivo/loginEjecutivo.php');
	}


}

require 'registroEjecutivo.view.php';
?>
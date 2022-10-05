<?php session_start();
//logica del registro para clientes
if(isset($_SESSION['codigoCLiente'])){
    header('Location: ./index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $codigoCliente = filter_var(strtolower($_POST['codigoCliente']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    

    $errores = '';
    // Comprobamos que ninguno de los campos este vacio.
	if (empty($codigoCliente) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
	} else {

		// Comprobamos que el usuario no exista ya.
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=uni-bank', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM cuentas WHERE codigoCliente = :codigoCliente LIMIT 1');//tabla cuentas 
		$statement->execute(array(':codigoCliente' => $codigoCliente));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();

		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			$errores .= '<li>Este cliente ya está registrado</li>';
		}

		// Hasheamos nuestra contraseña para protegerla un poco.
		# OJO: La seguridad es un tema muy complejo, aqui solo estamos haciendo un hash de la contraseña,
		# pero esto no asegura por completo la informacion encriptada.
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
        //echo "$codigoCliente . $password . $password2";

        
            // Comprobamos que las contraseñas sean iguales.
            if ($password != $password2) {
                $errores.= '<li>Las contraseñas no coinciden</li>';
            }
        }

        // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
        if ($errores == '') {
            $statement = $conexion->prepare('INSERT INTO cuentas (idCta, codigoCliente, pass) VALUES (null, :codigoCliente, :pass)');
            $statement->execute(array(
                    ':codigoCliente' => $codigoCliente,
                    ':pass' => $password
                ));
            	//echo "Hola mundo";
            // Despues de registrar al usuario redirigimos para que inicie sesion.
            header('Location: loginCliente.php');
            
	}

}

require 'regisCliente.view.php';


?>
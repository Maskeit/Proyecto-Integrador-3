<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/StyleLogClient.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../assets/wave.png">
	<div class="container">
		<div class="img">
			<img src="../assets/bg.svg">
		</div>
		<div class="login-content">


			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name = "login">
				<img src="../assets/avatar.svg">
				<h2 class="title">Inicia Sesion</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Código de Cliente/Nº Tarjeta/Nº Cuenta</h5>
           		   		<input type="text" name="codigoCliente" class="input">
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>                   
            	</div>


            	<a href="#">¿Has olvidado tu contraseña?</a>
            	<input type="submit" class="btn" value="Iniciar Sesion" onclick="login.submit()">
				<p class="input"><a href="regisCliente.php">¿No tienes cuenta? Registrate</a></p>
				<p class="input"><a id="RegresarBtn" href="../index.php">Regresar</a></p>

			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; //imprime el error que haya ocurrido?>
					</ul>
				</div>
			<?php endif; ?>

            </form>

        </div>
    </div>
    <script type="text/javascript" src="../mainLoginClient.js"></script>
</body>
</html>
<?php require '../vistas/headerEspecifico.php';
?>

<body>
	<div class="contenedor">
		<h1 class="titulo">Administrador</h1>
		
		<hr class="border">

		<form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="adminUser" placeholder="Admin">
			</div>


			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="adminPass" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<!--Comentario para agregar un commit simple-->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

			<p class="texto-registrate">
				<a href="../index.php">Regresar. </a>
			</p>
	</div>
</body>
</html>
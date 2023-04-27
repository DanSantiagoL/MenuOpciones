<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
	<title>Bienvenido</title>
</head>
<body>
	<h1>Bienvenido</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre"><br><br>
		<label for="apellido">Apellido:</label>
		<input type="text" id="apellido" name="apellido"><br><br>
		<input type="submit" name="submit" value="Bienvenido">
	</form>
	<?php
	if(isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

		echo "<p>¡Hola $nombre $apellido!</p>";
	}
	?>
	<a href="index.php">volver</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
	<title>Resta de dos números</title>
</head>
<body>
	<h1>Resta de dos números</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">Primer número:</label>
		<input type="number" id="num1" name="num1"><br><br>
		<label for="num2">Segundo número:</label>
		<input type="number" id="num2" name="num2"><br><br>
		<input type="submit" name="submit" value="Restar">
	</form>
	<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$resultado = $num1 - $num2;
		echo "<p>La resta de $num1 y $num2 es igual a $resultado.</p>";
	}
	?>
	<a href="index.php">volver</a>
</body>
</html>

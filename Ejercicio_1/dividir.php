<!DOCTYPE html>
<html>
<head>
	<title>Division de dos números</title>
</head>
<body>
	<h1>Division de dos números</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">Primer número:</label>
		<input type="number" id="num1" name="num1"><br><br>
		<label for="num2">Segundo número:</label>
		<input type="number" id="num2" name="num2"><br><br>
		<input type="submit" name="submit" value="Dividir">
	</form>
	<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$resultado = $num1 / $num2;
		echo "<p>La division de $num1 y $num2 es igual a $resultado.</p>";
	}
	?>
	<a href="index.php">volver</a>
</body>
</html>
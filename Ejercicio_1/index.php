<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilo.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<h1>Menú de opciones</h1>
<form action="procesar.php" method="post">
    <label for="operacion">Seleccione una opción:</label>
    <select id="operacion" name="operacion">
        <option value="nombre">Ingrese su nombre</option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <input type="submit" value="Enviar">
</form>


</body>
</html>
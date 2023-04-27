<?php
if ($_POST['operacion'] == 'nombre') {
    header('Location: ingresar_nombre.php');
    exit;
} elseif ($_POST['operacion'] == 'suma') {
    header('Location: sumar.php');
    exit;
} elseif ($_POST['operacion'] == 'resta') {
    header('Location: restar.php');
    exit;
} elseif ($_POST['operacion'] == 'multiplicacion') {
    header('Location: multiplicar.php');
    exit;
} elseif ($_POST['operacion'] == 'division') {
    header('Location: dividir.php');
    exit;
}
?>
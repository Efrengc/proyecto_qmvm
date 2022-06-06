<?php
include 'formulario.php';

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$intereses = $_POST['intereses'];

$insertar = "INSERT INTO registros(nombre, genero, telefono, contraseña, intereses)
VALUES ('$nombre', '$genero', '$telefono', '$contraseña', '$intereses')";
$resultado = mysqli_query ($conexion, $insertar);

if (!$resultado){
    echo"error";
}else
{
    echo'Usuario registrado';
}
mysqli_close($conexion);
?>


<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "proyecto2024");

$consulta = "SELECT rol FROM personas WHERE ci='$usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['rol'] == 'Docente') { // Docente
    header("Location: ../CPanel/docentes.php");
} elseif ($filas['rol'] == 'Estudiante') { // Estudiante
    header("Location: ../CPanel/alumno.php");
} else {
    header("Location: login.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>

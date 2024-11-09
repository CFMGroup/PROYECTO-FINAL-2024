<?php
session_start(); // Inicia la sesión

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "proyecto2024");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$CI = $_POST['CI'];
$ID_Sala = $_POST['ID_Sala'];
$N_Maquina = $_POST['N_Maquina'];
$Monitor = $_POST['Monitor'] ?? 'Funcional';
$Teclado = $_POST['Teclado'] ?? 'Funcional';
$Mouse = $_POST['Mouse'] ?? 'Funcional';
$Torre = $_POST['Torre'] ?? 'Funcional';

// Consulta para insertar datos en la tabla Reporta
$sql = "INSERT INTO Reporta (ID_Incidencia, ID_Sala, CI, N_Maquina, Monitor, Teclado, Mouse, Torre) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
if ($stmt) {
    $ID_Incidencia = null;
    $stmt->bind_param("iiisssss", $ID_Incidencia, $ID_Sala, $CI, $N_Maquina, $Monitor, $Teclado, $Mouse, $Torre);
    
    if ($stmt->execute()) {
        $_SESSION['mensaje'] = "Reporte enviado correctamente.";
    } else {
        $_SESSION['mensaje'] = "Error al enviar el reporte: " . $stmt->error;
    }
    $stmt->close();
} else {
    $_SESSION['mensaje'] = "Error en la preparación de la consulta: " . $conexion->error;
}

$conexion->close();

// Redirige de vuelta al formulario
header("Location: alumno_r.php");
exit();
?>

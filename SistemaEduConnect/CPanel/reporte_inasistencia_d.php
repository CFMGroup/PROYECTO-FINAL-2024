<?php
session_start(); // Iniciar sesión

$conexion = new mysqli("localhost", "root", "", "proyecto2024");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibe datos del formulario
$ci = $_POST['CI'];
$fecha_inicio = $_POST['Fecha_Inicio'];
$fecha_fin = $_POST['Fecha_Fin'];
$motivo = $_POST['Motivo'] ?: 'Sin Motivo'; // Valor por defecto si el campo está vacío

// Preparar inserción en Inasistencia_Docente
$stmt_inasistencia = $conexion->prepare("INSERT INTO Inasistencia_Docente (Fecha_Inicio, Fecha_Fin, Motivo) VALUES (?, ?, ?)");
$stmt_inasistencia->bind_param("sss", $fecha_inicio, $fecha_fin, $motivo);

if ($stmt_inasistencia->execute()) {
    $id_inasistencia = $conexion->insert_id; // Obtener el ID generado en Inasistencia_Docente

    // Preparar inserción en Notifica
    $stmt_notifica = $conexion->prepare("INSERT INTO Notifica (ID_Inasistencia, CI, Fecha, Motivo) VALUES (?, ?, ?, ?)");
    $fecha_notificacion = date("Y-m-d"); // Fecha actual
    $stmt_notifica->bind_param("iiss", $id_inasistencia, $ci, $fecha_notificacion, $motivo);

    if ($stmt_notifica->execute()) {
        $_SESSION['mensaje'] = "Inasistencia reportada exitosamente."; // Guardar mensaje en la sesión
    } else {
        $_SESSION['mensaje'] = "Error al registrar notificación: " . $stmt_notifica->error;
    }
    $stmt_notifica->close();
} else {
    $_SESSION['mensaje'] = "Error al registrar inasistencia: " . $stmt_inasistencia->error;
}

$stmt_inasistencia->close();
$conexion->close();

// Redirigir de vuelta al formulario para mostrar el mensaje
header("Location: docentes_Ina.php");
exit();
?>

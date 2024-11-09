<?php
session_start(); // Iniciar sesión

$conexion = new mysqli("localhost", "root", "", "proyecto2024");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$ID_Sala = $_POST['ID_Sala'];
$Fecha = $_POST['Fecha'];
$Hora = $_POST['Hora'] ?? 'Funcional'; // Valor por defecto si está vacío
$Descripcion = $_POST['Descripcion'] ?? 'Funcional';

// Consulta para insertar datos en la tabla incidencia_sala
$sql = "INSERT INTO incidencia_sala (ID_Sala, Fecha, Hora, Descripcion) VALUES (?, ?, ?, ?)";

// Prepara la consulta
$stmt = $conexion->prepare($sql);
if ($stmt) {
    $stmt->bind_param("isss", $ID_Sala, $Fecha, $Hora, $Descripcion);
    
    // Ejecuta la consulta
    if ($stmt->execute()) {
        $_SESSION['mensaje'] = "Reporte enviado correctamente."; // Guardar mensaje de éxito en la sesión
    } else {
        $_SESSION['mensaje'] = "Error al enviar el reporte: " . $stmt->error;
    }
    $stmt->close();
} else {
    $_SESSION['mensaje'] = "Error en la preparación de la consulta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();

// Redirigir de vuelta al formulario para mostrar el mensaje
header("Location: docentes_pla.php"); // Cambia a la página donde está el formulario
exit();
?>

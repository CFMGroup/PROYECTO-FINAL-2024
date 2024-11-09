<?php
$conexion = new mysqli("localhost", "root", "", "proyecto2024");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$busqueda = $_GET['busqueda'];
$sql = "SELECT fecha_inicio, fecha_fin, Motivo 
        FROM Inasistencia_Docente 
        WHERE Motivo LIKE '%$busqueda%' 
        ORDER BY id DESC 
        LIMIT 1";
$resultado = $conexion->query($sql);

$datos = array();
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }
}

echo json_encode($datos);
$conexion->close();
?>

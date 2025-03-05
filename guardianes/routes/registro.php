<?php
// Configuración de la base de datos
$servidor = 'http://127.0.0.1:8000'; // Cambia esto si tu base de datos está en otro servidor
$usuario = 'root'; // Cambia esto por tu usuario de MySQL
$contrasena = ''; // Cambia esto por tu contraseña de MySQL
$nombre_base_datos = 'ciberguardianes';

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $nombre_base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$correo_electronico = $_POST['correo_electronico'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Preparar la consulta
$stmt = $conn->prepare("CALL insertar_usuario(?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre_usuario, $correo_electronico, $contrasena, $fecha_nacimiento);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
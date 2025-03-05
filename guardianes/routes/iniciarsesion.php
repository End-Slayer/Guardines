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
$correo_electronico = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];

// Preparar la consulta
$stmt = $conn->prepare("SELECT contrasena FROM usuarios WHERE correo_electronico = ?");
$stmt->bind_param("s", $correo_electronico);

// Ejecutar la consulta
$stmt->execute();
$stmt->store_result();

// Verificar si el correo electrónico existe
if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verificar la contraseña
    if (password_verify($contrasena, $hashed_password)) {
        // Iniciar sesión
        session_start();
        $_SESSION['correo_electronico'] = $correo_electronico; // Guardar el correo en la sesión
        echo "Inicio de sesión exitoso. Bienvenido!";
        // Redirigir a la página de bienvenida o dashboard
        header("Location: bienvenida.php");
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El correo electrónico no está registrado.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
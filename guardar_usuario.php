<?php

$conn=mysqli_connect($servername = "localhost", $username = "root", $password = "",  $dbname = "mh")or die(
    "error de conexion");

    
  
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }



// Obtener los datos del formulario de registro
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si el usuario ya existe en la base de datos
$query = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
$resultado = $conn->query($query);

if ($resultado->num_rows > 0) {
    // El usuario ya existe, mostrar un mensaje de error o redireccionar al formulario de registro nuevamente
    echo 'El nombre de usuario ya está en uso.';
} else {
    // Insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, usuario, contrasena, rol) VALUES ('$nombre', '$usuario', '$contrasena', 'usuario')";
    if ($conn->query($query) === TRUE) {
        echo 'Usuario registrado exitosamente. Ahora puedes iniciar sesión.';
    } else {
        echo 'Error al registrar el usuario: ' . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
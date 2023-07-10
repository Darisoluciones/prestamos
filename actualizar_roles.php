
    
<?php
// Establecer la conexión a la base de datos
include('conexion.php');


// Conexión a la base de datos
include('nvar.html');

// Obtener los datos del formulario
$Usuario = $_POST['usuario'];
$nuevoRol = $_POST['nuevo_rol'];

// Verificar si el usuario existe en la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario = '$Usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Actualizar el rol del usuario
    $sql = "UPDATE usuarios SET roles = '$nuevoRol' WHERE usuario = '$Usuario'";
    if ($conn->query($sql) === TRUE) {
        echo "El rol se actualizó correctamente.";
    } else {
        echo "Error al actualizar el rol: " . $conn->error;
    }
} else {
    echo "El usuario '$Usuario' no existe.";
}

$conn->close();
?>

    <?php 
	include('scriptt.html');

        ?>
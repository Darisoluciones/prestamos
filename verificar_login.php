
<?php
    // Conexión a la base de datos
    include('conexion.php');
    
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar el usuario y la contraseña
$query = "SELECT rol FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conn, $query);

// Verificar si se encontró un usuario válido
if (mysqli_num_rows($resultado) == 1) {
    // Obtener el rol del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $rol = $fila['rol'];

    // Establecer la sesión del usuario
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $rol;

    if ($rol == 'admin') {
        header('Location: halo.php');
    } else if ($rol == 'usuario') {
        header('Location: halo2.php');
    } else if ($rol == 'boss') {
        header('Location: boss.php');
    }

} else {
    // Usuario o contraseña inválidos, redirigir al formulario de inicio de sesión
    header('Location: index.php');
}
$conn->close();
?>
    <?php 
	include('scriptt.html');

        ?>



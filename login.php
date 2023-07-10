<?php  
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario']) || !isset($_SESSION['rol'])) {
    header('Location: login.php');
    exit();
}


// Obtener el rol del usuario
$rol = $_SESSION['rol'];

// Verificar el rol y mostrar el contenido correspondiente
if ($rol == 'admin') {
    echo 'Bienvenido, administrador!';
    // Aquí puedes mostrar el contenido exclusivo para el rol de administrador
} else if ($rol == 'usuario') {
    echo 'Bienvenido, usuario!';
    // Aquí puedes mostrar el contenido exclusivo para el rol de usuario
} else {
    echo 'Bienvenido!';
    // Aquí puedes mostrar el contenido para otros roles
}
$conn->close();
?>


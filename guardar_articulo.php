<?php
      // Conexión a la base de datos
    include('conexion.php');?>
        <?php
      // Conexión a la base de datos
    include('nvar.html');?>
<?php
// Obtener los valores del formulario
$nombre_articulo = $_POST['nombre_articulo'];
$descrip_articulo = $_POST['descrip_articulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cantidad_dispo = $_POST['cantidad_dispo'];
$estado_articulo = $_POST['estado_articulo'];
$dispo = $_POST['dispo'];
$otros_detalles = $_POST['otros_detalles'];


// Insertar los datos en la tabla 'artículos'
$sql = "INSERT INTO artículos (nombre_articulo, descrip_articulo, marca, modelo, cantidad_dispo, estado_articulo, dispo,  otros_detalles)
        VALUES ('$nombre_articulo', '$descrip_articulo', '$marca', '$modelo', '$cantidad_dispo', '$estado_articulo', '$dispo', '$otros_detalles')";


if ($conn->query($sql) === TRUE) {
    echo "Registro de artículo exitoso.";
    sleep(3); // Esperar 3 segundos
    header("Location: alta.php");
    exit();
} else {
    echo "Error al registrar el artículo: " . $conn->error;
}






include('scriptt.html');

    ?>



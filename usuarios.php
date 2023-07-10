
<?php
      // Conexiones 
    include('conexion.php');?>
    <?php  include('cabecera.html');?>
    <?php include('nvar.html');?>
    <?php
// Procesar la actualización si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $rol = $_POST["rol"];

    // Actualizar el registro
    $sql = "UPDATE usuarios SET nombre='$nombre', usuario='$usuario', contrasena='$contrasena', rol='$rol' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        // Redireccionar para evitar la duplicación del envío del formulario
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}

// Consultar los usuarios registrados
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestor de Usuarios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Gestor de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["usuario"] . "</td>";
                echo "<td>" . $row["contrasena"] . "</td>";
                echo "<td>" . $row["rol"] . "</td>";
                echo "<td><a href='?edit=" . $row["id"] . "'>Editar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron usuarios registrados.</td></tr>";
        }
        ?>
    </table>

    <?php
    // Verificar si se seleccionó un usuario para editar
    if (isset($_GET["edit"])) {
        $edit_id = $_GET["edit"];

        // Obtener los datos del usuario seleccionado
        $edit_sql = "SELECT * FROM usuarios WHERE id='$edit_id'";
        $edit_result = $conn->query($edit_sql);
        $edit_row = $edit_result->fetch_assoc();
        ?>
        <h2>Editar Usuario</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="hidden" name="id" value="<?php echo $edit_row["id"]; ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $edit_row["nombre"]; ?>"><br><br>
            <label>Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $edit_row["usuario"]; ?>"><br><br>
            <label>Contraseña:</label>
            <input type="password" name="contrasena" value="<?php echo $edit_row["contrasena"]; ?>"><br><br>
            <label>Rol:</label>
            <input type="text" name="rol" value="<?php echo $edit_row["rol"]; ?>"><br><br>
            <input type="submit" value="Actualizar">
        </form>
    <?php } ?>

</body>
</html>
<?php 
	include('scriptt.html');

        ?>


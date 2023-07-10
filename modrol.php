
<?php
      // Conexión a la base de datos
    include('cabecera.html');?>
    
    <?php
      // Conexión a la base de datos
    include('nvar.html');?>
    
        <h1>Modificar Roles</h1>
        <?php
      // Conexión a la base de datos
    include('conexion.php');

        // Obtener los usuarios y sus roles actuales
        $sql = "SELECT nombre_usuario, rol FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead><tr><th>Nombre de Usuario</th><th>Rol Actual</th></tr></thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['nombre_usuario'] . '</td>';
                echo '<td>' . $row['rol'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No se encontraron usuarios registrados.";
        }

        $conn->close();
        ?>
        <form action="actualizar_roles.php" method="POST">
            <div class="mb-3">
                <label for="nombre_usuario">Nombre de usuario:</label>
                <input type="text" class="form-control" name="nombre_usuario" required>
            </div>
            <div class="mb-3">
                <label for="nuevo_rol">Nuevo rol:</label>
                <input type="text" class="form-control" name="nuevo_rol" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Rol</button>
        </form>
    </div>
    <?php 
	include('scriptt.html');

        ?>


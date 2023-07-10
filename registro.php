
<?php
      // Conexión a la base de datos
    include('cabecera.html');?>

  
    <div class="container">
    <h2>Formato de Registro</h2> 
        <form action="guardar_usuario.php" method="POST">

            <label for="nombre"  class="form-signin w-100 m-auto" >Nombre:</label>
            <input type="text" class="form-control" id="floatingInput" name="nombre" required><br>

            <label for="usuario"  class="form-signin w-100 m-auto" >Nombre de usuario:</label>
            <input type="text" class="form-control" id="floatingInput" name="usuario" required><br>
            
            <label for="contrasena"  class="form-signin w-100 m-auto" >Contraseña:</label>
            <input type="password" class="form-control" id="floatingInput"  name="contrasena" required><br>
            <?php
            if (isset($_GET['error'])) {
                echo '<p class="text-danger">Contraseña incorrecta. Vuelve a intentarlo.</p>';
            }
            ?>
            <br>
            <button type="submit" class="btn btn-success">Registrarse</button>
        </form>
    </div>

    <?php 
	include('scriptt.html');

        ?>
      <?php 
          //  <label class="form-signin w-100 m-auto" for="nombre_usuario" >Nombre de usuario:</label>
           // <input type="text" class="form-control" id="floatingInput" name="nombre_usuario" required><br>
          //  <label type="password" class="form-control" id="floatingPassword" for="contrasena" >Contraseña:</label>
         //   <input class="text-center" type="password" name="contrasena" required><br>  ?>

















<?php
      // Conexión a la base de datos
    include('cabecera.html');  ?>
 

  <div class="container">
  <h2>Bienvenido</h2>  
    <form action="verificar_login.php" method="POST">
	<div class="row ">
    <label for="usuario" class="form-signin w-100 m-auto">Nombre de usuario:</label>
    <input type="text" class="form-control" id="floatingInput" name="usuario" required>
    <br>
    <label for="contrasena" class="form-signin w-100 m-auto">Contraseña:</label>
    <input type="password" class="form-control" id="floatingInput" name="contrasena" required >
    <br>
    <button type="submit"class="btn btn-success" id="floatingInput" >Acceder</button>
    </form>
    <br>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input">
    <small>Recuerdame</small>
    </label>
    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>

    </div>
    <?php 
	include('scriptt.html');

        ?>
      









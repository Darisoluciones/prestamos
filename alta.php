
<?php
      // Conexión a la base de datos
    include('cabecera.html');?>
            <?php
      // Conexión a la base de datos
    include('nvar.html');?>
<body>
    <div class="container">
        <h1>Registro de Mercancía Electrónica</h1>
        <form method="POST" action="guardar_articulo.php">
            <div class="form-group">
                <label for="nombre_articulo">Nombre del Artículo:</label>
                <input type="text" class="form-control" id="nombre_articulo" name="nombre_articulo" required>
            </div>
            <div class="form-group">
                <label for="descrip_articulo">Descripción del Artículo:</label>
                <textarea class="form-control" id="descrip_articulo" name="descrip_articulo" required></textarea>
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="cantidad_dispo">Cantidad Disponible:</label>
                <input type="number" class="form-control" id="cantidad_dispo" name="cantidad_dispo" required>
            </div>
            <div class="form-group">
                <label for="estado_articulo">Estado del Artículo:</label>
                <select class="form-control" id="estado_articulo" name="estado_articulo" required>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                    <option value="Reacondicionado">Reacondicionado</option>
                </select>
                <div class="form-group">
                <label for="dispo">Disponible:</label>
                <input type="text" class="form-control" id="dispo" name="dispo" required>
            </div>
            </div>
            <div class="form-group">
                <label for="otros_detalles">Otros Detalles:</label>
                <textarea class="form-control" id="otros_detalles" name="otros_detalles"></textarea>
            </div>
            <form method="POST" action="guardar_articulo.php" enctype="multipart/form-data">
<br>
    <button type="submit" class="btn btn-primary">Guardar</button>



        </form>
    </div>

    <?php 
	include('scriptt.html');

        ?>
</body>
</html>

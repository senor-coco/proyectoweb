<?php require_once('vista/layout/header.php'); ?>
<h1>Lista de Servicios</h1>
<a href="index.php?p=nuevoServicio">Registrar Servicio</a>
<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($servicios as $servicio): ?>
                <tr>
                    <td><?php echo $servicio['id']; ?></td>
                    <td><?php echo $servicio['nombre']; ?></td>
                    <td><?php echo $servicio['descripcion']; ?></td>
                    <td><?php echo $servicio['precio']; ?></td>
                    <td>
                        <a href='index.php?a=editarServicio&id=<?php echo $servicio['id']; ?>'>ACTUALIZAR</a> 
                        <a href='index.php?a=eliminarServicio&id=<?php echo $servicio['id']; ?>'>ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>      
        </tbody>
    </table>
</div>
<?php require_once('vista/layout/footer.php'); ?>
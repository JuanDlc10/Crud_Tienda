<table class="table table-hover table-bordered">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php while ($ver = mysqli_fetch_array($result)) { ?>
            <tr>
                <td> <?php echo $ver['id']; ?> </td>
                <td> <?php echo $ver['nombre']; ?> </td>
                <td> <?php echo $ver['marca']; ?> </td>
                <td> <?php echo $ver['precio']; ?> </td>
                <td>
                    <form action="./editar.php" method="post">
                        <input type="text" name="id" value="<?php echo $ver['id']; ?>" hidden>
                        <button class="btn btn-warning">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="./servidor/eliminar.php" method="post">
                        <input type="text" name="id" value="<?php echo $ver['id']; ?>" hidden>
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
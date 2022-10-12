<?php
    include "./servidor/conexion.php";
    $conexion = conexion();
    $idPersona = $_POST['id'];
    $sql = "SELECT * FROM t_hardware where id = '$idPersona'";
    $result = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_array($result);
?>
<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="text-center mt-4">Editar producto</h1>
            <form action="./servidor/actualizar.php" method="post">
                <input type="text" name="id" value="<?php echo $datos['id'];?>" hidden>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre"  placeholder="nombre" class="form-control" require value="<?php echo $datos['nombre'] ?>" >
                <label for="marca">Marca</label>
                <input type="text" name="marca"  id="marca" placeholder="marca" class="form-control" require value="<?php echo $datos['marca'] ?>" >
                <label for="precio">Precio</label>
                <input type="text" name="precio"  id="precio" placeholder="precio" class="form-control" require value="<?php echo $datos['precio'] ?>" >
                <br>
                <button class="btn btn-success ">Actualizar</button>
                <a href="./index.php" class="btn btn-info">
                    Regresar
                </a>
            </form>
        </div>
    </div>
</div>
<?php include "./footer.php"; ?>
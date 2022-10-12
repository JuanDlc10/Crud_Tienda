<?php
    include './servidor/conexion.php';
    $conexion = conexion();
    //Solo es un string con formato de sql
    $sql = 'SELECT * FROM t_hardware';
    //ejecutar el string con la conexion a bd
    $result = mysqli_query($conexion,$sql);
?>
    <?php include "./header.php" ?>
        <div class="container">
            <div class="row">
                <div class="col">
                <h1>Tienda GOOD</h1>
                    <?php include "./insertar.php"; ?>
                    <br>
                    <?php include "./tabla.php"; ?>
                </div>
            </div>
        </div>
    <?php include "./footer.php" ?>
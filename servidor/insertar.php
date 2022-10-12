<?php 
    include './conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $sql = "INSERT INTO t_hardware (
                        nombre,
                        marca,
                        precio) 
        VALUES ('$nombre',
                '$marca',
                '$precio')";
    //Ejecutamos el sql
    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>
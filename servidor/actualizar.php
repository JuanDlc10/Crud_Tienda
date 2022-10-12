<?php 
    include './conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $idPersona = $_POST['id'];
    $sql = "UPDATE t_hardware SET nombre = '$nombre',
                                    marca = '$marca',
                                    precio = '$precio'
            WHERE id = '$idPersona'";
    //Ejecutamos el sql
    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>
<?php 
    include './conexion.php';
    $conexion = conexion();
    $idPersona = $_POST['id'];
    $sql = "DELETE FROM t_hardware WHERE id = '$idPersona'";
    $result = mysqli_query($conexion,$sql);
    
    if ($result) {
        header('location:../index.php');
    }else{
        echo 'No se pudo eliminar :(';
    }
?>
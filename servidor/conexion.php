<?php
    function conexion(){
        $servidor = 'localhost';
        $usuario = 'root';
        $password = '';
        $bd = 'Tienda';
        $puerto = 3307;
        $conectar = mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $bd,
            $puerto
        );
        return $conectar;
    }
?>
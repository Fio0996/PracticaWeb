<?php 

    function AbrirBaseDatos()
    {
        return mysqli_connect('127.0.0.1:3309', 'root', '', 'practicas13');
    }

    function CerrarBaseDatos($conexion)
    {
        mysqli_close($conexion);
    }

?>
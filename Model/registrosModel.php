<?php include_once 'baseDatosModel.php';
/*
    function Registro($nombre,$monto,$tipoEjercicio)
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL Registro('$nombre','$monto','$tipoEjercicio')";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);
        return $respuesta;
    }
*/

////Esta es para consultar los productos  
    function ObtenerDatos()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ObtenerDatos()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

    ////Esta es para consultar las compras pendientespara el select de registro 
    function ConsultarComprasBD()
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL ConsultarCompras()";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);
        return $respuesta;
    }

?>
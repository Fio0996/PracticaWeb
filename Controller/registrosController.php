<?php include_once '../Model/registrosModel.php'; 
//Es solo poner los nombres correctos ya el if y else estan para lo que pide el enunciado
/*
    if (isset($_POST["btnRegistro"])) {
        $nombre = $_POST["nombre"];
        $monto = $_POST["monto"];
        $tipoEjercicio = $_POST["tipoEjercicio"];
    
        $respuesta = Registro($nombre, $monto, $tipoEjercicio);
    
        if ($respuesta === true) {
            header("location: ../View/consulta.php");
        } else {
            $_POST["msj"] = "Su abono no se ha completado correctamente. Intente de nuevo!!";
        }
    }*/


//Esta es para consultar los productos   
    function ConsultarDatos()
{
    $respuesta = ObtenerDatos();

    if($respuesta->num_rows > 0) {
        while ($row = mysqli_fetch_array($respuesta)) {
            echo "<tr>";
            echo "<td>" . $row["ID_Compra"] . "</td>";
            echo "<td>" . $row["Precio"] . "</td>";
            echo "<td>" . $row["Saldo"] . "</td>";
            echo "<td>" . $row["Descripcion"] . "</td>";
            echo "<td>" . $row["Estado"] . "</td>";
            echo "</tr>";
        }
    }
}

?>
<?php include_once '../Model/registrosModel.php'; 

    if(isset($_POST["btnRegistro"]))
    {
        $IdCompra = $_POST["compra"];
        $Monto = $_POST["abono"];
        
        $respuesta = Registro($IdCompra,$Monto);

        if ($respuesta === true) {
            header("location: ../View/consulta.php");
        } else {
            $_POST["msj"] = "Su abono no se ha completado correctamente. Intente de nuevo!!";
        }

    }


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

    // para el select que muestre solo las compras pendientes
    function ConsultarCompras()
    {
        $respuesta = ConsultarComprasBD();
        echo "<option value='' disabled selected> Seleccione </option>";
        
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<option value=" . $row["ID_Compra"] . ">" . $row["Descripcion"] . "</option>";
            }
        }

    }

?>
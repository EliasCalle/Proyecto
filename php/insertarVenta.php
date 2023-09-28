<?php
$Fecha = $_POST['Fecha'];
$Cantidad=$_POST['Cantidad'];
$Monto_total = $_POST['Monto_total'];
$Descuento = $_POST['Descuento'];
$Id_producto  = $_POST['Id_producto'];
$Id_cliente  = $_POST['Id_cliente'];

$mysqli_link = mysqli_connect("localhost", "root", "", "proyecto");

if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}


$insert_query = "INSERT INTO `ventas`(`Fecha`,`Cantidad`,`Monto_total`,`Descuento`,`Id_producto`, `Id_cliente`) 
                 VALUES ('".mysqli_real_escape_string($mysqli_link, $Fecha)."','".mysqli_real_escape_string($mysqli_link, $Cantidad)."','".mysqli_real_escape_string($mysqli_link, $Monto_total)."','".mysqli_real_escape_string($mysqli_link, $Descuento)."','".mysqli_real_escape_string($mysqli_link, $Id_producto)."','".mysqli_real_escape_string($mysqli_link, $Id_cliente)."')";


if (mysqli_query($mysqli_link, $insert_query)) {
    
    $update_query = "UPDATE `producto` SET `stock` = `stock` - 1 WHERE `ID` = '".mysqli_real_escape_string($mysqli_link, $Id_producto)."'";

    if (mysqli_query($mysqli_link, $update_query)) {
        echo 'Los datos se han insertado y el stock se ha actualizado correctamente.';
    } else {
        echo 'Error al actualizar el stock: ' . mysqli_error($mysqli_link);
    }
} else {
    echo 'Error al insertar datos: ' . mysqli_error($mysqli_link);
}


mysqli_close($mysqli_link);
?>
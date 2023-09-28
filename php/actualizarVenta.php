<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "proyecto");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$update_query = "UPDATE `ventas` SET `Fecha` = '" . mysqli_real_escape_string($mysqli_link, 'elias') . "' WHERE `Nombre` = 'jose'";
// run the update query
if (mysqli_query($mysqli_link, $update_query)) {
    echo 'Record updated successfully.';
}
// close the db connection
mysqli_close($mysqli_link);
?>
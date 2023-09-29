<?php
$Nombre = $_POST['Nombre'];
$Contraseña = $_POST['Contraseña'];

$mysqli_link = mysqli_connect("localhost", "root", "", "proyecto");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$sql = "SELECT * FROM cliente WHERE Nombre = '$Nombre' AND Contraseña = '$Contraseña'";
$resultado = mysqli_query($mysqli_link, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
     //Inicio de sesión exitoso
     header("Location: ./index/index.html");
} else {
    // Credenciales inválidas
    echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña.";
}

mysqli_close($mysqli_link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <style>
        body {
            background-color: #d8f8e1;
            font-family: Arial, sans-serif;
        }

        .proveedor {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            background-color:#fcb7af;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .proveedor h2 {
            margin-bottom: 5px;
            color: #333;
        }

        .proveedor p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <?php
    $mysqli_link = mysqli_connect("localhost", "root", "", "proyecto");
    if (mysqli_connect_errno()) {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
    $select_query = "SELECT * FROM categoria LIMIT 10";
    $result = mysqli_query($mysqli_link, $select_query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<div class="proveedor">';
        echo '<h2>Categorias</h2>';
        echo '<p>Nombre: ' . $row['Nombre'] . '</p>';
        echo '<p>Descripcion: ' . $row['Descripcion'] . '</p>';
        echo '</div>';
    }

    // close the db connection
    mysqli_close($mysqli_link);
    ?>
</body>
</html>
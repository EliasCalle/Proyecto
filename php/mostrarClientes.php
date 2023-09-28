<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index/assets/css/templatemo.css">
    <link rel="stylesheet" href="../index/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../index/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../index/assets/css/bootstrap.min.css">
   
   
    
    <title>Listado de Proveedores</title>
    <style>
        body {
          
            font-family: Arial, sans-serif;
        }

       

        .proveedor h2 {
            margin-bottom: 5px;
            color: #333;
        }

        .proveedor p {
            margin: 0;
            color: #666;
        }
        .ventas-container {
    display: flex;
    flex-wrap: wrap;
}

.proveedor {
    width: calc(33.33% - 20px); /* Establece el ancho de cada sección */
    margin: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 8px;
    background-color: #c5e0dc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                
                
                <div>
                    <a class="text-light" href="" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Tienda
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index/index.html">Inicio</a>
                        </li>
                        
                         <li class="nav-item">
                        <a class="nav-link" id="clientesLink" href="#">Clientes <i class="bi bi-chevron-down"></i></a>
                        <div id="clientesDropdown" class="list-unstyled collapse">
                            <div class="col">
                                <a href="../php/mostrarClientes.php">Lista de Clientes</a>
                            </div>
                            <div class="col">
                            <div class="col">
                                <a href="../html/InsertarCliente.html">Insertar Cliente</a>
                            </div>
                            <div class="col">
                                <a href="../html/borrarCli.html">Borrar Cliente</a>
                        
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ProductosLink" href="#">Productos <i class="bi bi-chevron-down"></i></a>
                        <div id="ProductosDropdown" class="list-unstyled collapse">
                            <div class="col">
                                <a href="../php/mostrarPro.php">Lista de Productos</a>
                            </div>
                            <div class="col">
                            <div class="col">
                                <a href="../html/InsertarPro.html">Insertar Producto</a>
                            </div>
                            <div class="col">
                                <a href="../html/borrarPro.html">Borrar Producto</a>
                        
                        </div>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ventasLink" href="#">Ventas <i class="bi bi-chevron-down"></i></a>
                    <div id="ventasDropdown" class="list-unstyled collapse">
                        <div class="col">
                            <a href="../php/mostrarVentas.php">Lista de Ventas</a>
                        </div>
                        <div class="col">
                        <div class="col">
                            <a href="../html/insertarVenta.html">Insertar Venta</a>
                        </div>
                        <div class="col">
                            <a href="../html/borrar.Venta.html">Borrar Venta</a>
                    
                    </div>
                </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contacto</a>
                        </li>
                    </ul>
                </div>
               
            </div>

        </div>
    </nav>
    <script>
    document.getElementById('clientesLink').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('clientesDropdown').classList.toggle('show');
        document.querySelector('#clientesLink i').classList.toggle('bi-chevron-up');
    });
</script>
<script>
    document.getElementById('ProductosLink').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('ProductosDropdown').classList.toggle('show');
        document.querySelector('#ProductosLink i').classList.toggle('bi-chevron-up');
    });
</script>
<script>
    document.getElementById('ventasLink').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('ventasDropdown').classList.toggle('show');
        document.querySelector('#ventasLink i').classList.toggle('bi-chevron-up');
    });
</script>
    <?php
    $mysqli_link = mysqli_connect("localhost", "root", "", "proyecto");
    if (mysqli_connect_errno()) {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
    $select_query = "SELECT * FROM cliente LIMIT 10";
    $result = mysqli_query($mysqli_link, $select_query);
    echo '<div class="ventas-container">'; 


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<div class="proveedor">';
        echo '<h2>Cliente</h2>';
        echo '<p>Nombre: ' . $row['Nombre'] . '</p>';
        echo '<p>Telefono: ' . $row['Telefono'] . '</p>';
        echo '<p>Direccion: ' . $row['Direccion'] . '</p>';
        echo '</div>';
    }
    echo '</div>'; 
   
    mysqli_close($mysqli_link);
    ?>
</body>
</html>
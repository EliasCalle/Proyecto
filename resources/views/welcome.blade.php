<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Estilos personalizados para fuentes -->
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.6;
      color: #333;
    }

    nav .nav-link {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-weight: bold;
      color: #555;
    }

    .container {
      margin-top: 20px;
    }

    /* Cambio de color para los enlaces */
    a {
      color: #ffff;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #0056b3;
    }

    /* Estilos para el encabezado de la página */
    header {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 18px;
      color: #777;
    }
    header img {
      max-width: 450px; 
      height: auto; 
      display: block; 
      margin: 0 auto;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>


 

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('restaurantes')}}">Restaurantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('platos')}}">Platos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('clientes') }}">Clientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('emails') }}">Emails</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Cerrar Secion</a>
        </li><br><br>


    </ul>
    
    
</nav>

  <main class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <br><br>
        @yield('content')
      </div>
      <div class="col-md-2"></div>
    </div>
  </main>

  <!-- Scripts -->
  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered successfully:', registration);
        })
        .catch(error => {
          console.log('Error registering Service Worker:', error);
        });
    }
  </script>

  <!-- Bootstrap JavaScript (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>

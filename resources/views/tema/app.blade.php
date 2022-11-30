<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body class="bg-ligh">
    <div class="container shadow bg-white">
       <div class="row">
        <div class="col-sm-12">
            <h1>
                PRACTICA 5
            </h1>
        </div>
        <div class="col-sm-12">
            <a href="{{route('tarea.create')}}" class="btn btn-link">Crear Nueva Tarea</a>
            <a href="{{route ('tarea.index')}}" class="btn btn-link">Listar Tareas</a>
        </div>
        <div class="col-sm-12">
            @yield('contenido')
        </div>
       </div>
    </div>
</body>
</html>
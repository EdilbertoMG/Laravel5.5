<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <hr>
    @if (! empty($usuarios))
        
    <ul>
    @foreach ($usuarios as $usuario)

        <li>{{ $usuario }}</li>

    @endforeach
    </ul>
    @else 
    <p>No hay usuarios registrados.</p>
    @endif
</body>
</html>
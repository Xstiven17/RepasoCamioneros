<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camionero</title>
</head>
<body>

    <h1>{{ $camioneros->nombre }}</h1>
    <p><strong>DNI:</strong> {{ $camioneros->dni }}</p>
    <p><strong>Poblacion:</strong> {{ $camioneros->poblacion }}</p>
    <p><strong>Nombre:</strong> {{ $camioneros->nombre }}</p>
    <p><strong>Telefono:</strong> {{ $camioneros->telefono }}</p>
    <p><strong>direccion:</strong> {{ $camioneros->direccion }}</p>
    <p><strong>Salario:</strong> {{ $camioneros->salario }}</p>

    <a href="{{ route('camiones17.edit', $camioneros->id) }}">Editar</a>
    <a href="{{ route('camiones17.index') }}">Volver</a>

</body>
</html>

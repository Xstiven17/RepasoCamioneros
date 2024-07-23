<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Camionero</title>
</head>
<body>
    <h1>Añadir Camionero</h1>

    <form action="{{ route('camiones17.store') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
        <br>
        <label for="poblacion">Poblacion:</label>
        <input type="text" id="poblacion" name="poblacion" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br>
        <label for="salario">Salario:</label>
        <input type="text" id="salario" name="salario" required>
        <br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('camiones17.index') }}">Volver</a>

</body>
</html>
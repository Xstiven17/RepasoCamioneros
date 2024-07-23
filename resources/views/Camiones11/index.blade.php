<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Principal</title>
</head>
<body>

    <h1>Camioneros</h1>
    <a href="{{ route('camiones17.create') }}">Añadir Camionero</a>
    <ul>
        @foreach ($camioneros as $camionero)
            <li>
                <a href="{{ route('camiones17.show', $camionero->id) }}">{{ $camionero->nombre }}</a>
                <a href="{{ route('camiones17.edit', $camionero->id) }}">Editar</a>
                <form action="{{ route('camiones17.destroy', $camionero->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>

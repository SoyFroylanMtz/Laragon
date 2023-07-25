<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>Vista creada desde el controlador</h1>
    <p><a href="{{route('gamesCreate')}}">Nuevo Videojuego</a></p>
    <h2>Listado de juegos</h2>

    <table>
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @forelse ($games as $game)
                <tr>
                    <th>{{ $game->id }}</th>
                    <th><a href="{{route('viewGame',$game->id)}}">{{ $game->name }}</a></th>
                    <th>{{ $game->category_id }}</th>
                    <th>{{ $game->created_at }}</th>
                    <th>
                        @if ($game->active)
                            <span style="color: green">Activo<span>
                        @else
                            <span style="color: red">Inactivo<span>
                        @endif
                    </th>
                    <th>
                        <a href="{{route('deleteGame',$game->id)}}">Eliminar</a>
                    </th>
                </tr>

            @empty
                <tr>
                    <th>Sin Videojuegos</th>
                    
                </tr>

            @endforelse
            
        </tbody>
    </table>

</body>
</html>
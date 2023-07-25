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
    <h1>Formulario de creacion ed videojuegos</h1>
    <p><a href=" {{ route('games') }} ">Listar Todo los Video Juegos</a></p>
    <form action="{{ route('createVideogame') }}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre del videojuego" name="name">
        @error('name_game')
        {{ $message }}
        @enderror 
        <select name="category_id" id="">
            @foreach($categorias as $categoria)
            <option value=" {{ $categoria->id }}"  > {{ $categoria->name }}</option>
            @endforeach
            <option value="accion"> Accion</option>
        </select>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>
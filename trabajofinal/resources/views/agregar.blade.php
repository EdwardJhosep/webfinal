<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Combo</title>
    <style>
        /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Estilos para la tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Estilos para las imágenes en la tabla */
table img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
}

/* Estilos para los botones de acción */
table .actions a {
    text-decoration: none;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
}

table .actions a:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Agregar Combo</h1>

    <!-- Formulario para agregar combos -->
    <form method="POST" action="{{ route('agregar.combo') }}" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Título del Combo:</label>
        <input type="text" name="titulo" required><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" required><br>

        <label for="dias">Días:</label>
        <input type="number" name="dias" required><br>

        <label for="incluye">Incluye:</label>
        <textarea name="incluye" required></textarea><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen"><br>

        <button type="submit">Agregar Combo</button>
    </form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar Sesión</button>
</form>




<h1>Listado de Combos</h1>

<!-- Tabla para mostrar los combos -->
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Días</th> <!-- Agregamos la columna Días -->
            <th>Incluye</th> <!-- Agregamos la columna Incluye -->
            <th>Imagen</th> <!-- Agregamos la columna Imagen -->
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Itera a través de los combos obtenidos desde el controlador -->
        @foreach($combos as $combo)
        <tr>
            <td>{{ $combo->titulo }}</td>
            <td>{{ $combo->descripcion }}</td>
            <td>{{ $combo->precio }}</td>
            <td>{{ $combo->dias }}</td> <!-- Mostramos los días -->
            <td>{{ $combo->incluye }}</td> <!-- Mostramos lo que incluye -->
            <td>
                @if($combo->imagen)
                <img src="{{ asset('storage/imagenes_combo/' . basename($combo->imagen)) }}" class="card-img-top" alt="{{ $combo->titulo }}">
                @else
                    No hay imagen
                @endif
            </td> <!-- Mostramos la imagen o un mensaje si no hay imagen -->
            <td>
                <a href="{{ route('editar.combo', ['id' => $combo->id]) }}">Editar</a> |
                <a href="{{ route('eliminar.combo', ['id' => $combo->id]) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>

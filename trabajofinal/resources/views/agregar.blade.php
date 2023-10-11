<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Combo</title>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    color: #007bff;
    font-size: 28px;
    margin-bottom: 20px;
}

form {
    margin: 0 auto;
    max-width: 400px; /* Establece el ancho máximo del formulario */
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"],
textarea,
input[type="number"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Estilos para la tabla de listado de combos */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e0e0e0;
}

/* Estilos para las imágenes en la tabla */
table img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
}

/* Estilos para los botones de acción en la tabla */
table .actions a {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 5px;
}

table .actions a:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
<div class="container">
        <h1 class="text-center text-primary">Agregar Combo</h1>

        <!-- Formulario para agregar combos -->
        <form method="POST" action="{{ route('agregar.combo') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Título del Combo:</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion" required></textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio" required>
            </div>

            <div class="form-group">
                <label for="dias">Días:</label>
                <input type="number" class="form-control" name="dias" required>
            </div>

            <div class="form-group">
                <label for="incluye">Incluye:</label>
                <textarea class="form-control" name="incluye" required></textarea>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Agregar Combo</button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-secondary">Cerrar Sesión</button>
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <h1 class="text-center text-primary">Listado de Combos</h1>

        <!-- Tabla para mostrar los combos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Días</th>
                    <th>Incluye</th>
                    <th>Imagen</th>
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
                    <td>{{ $combo->dias }}</td>
                    <td>{{ $combo->incluye }}</td>
                    <td>
                        @if($combo->imagen)
                        <img src="{{ asset('storage/imagenes_combo/' . basename($combo->imagen)) }}" class="img-fluid" alt="{{ $combo->titulo }}">
                        @else
                        No hay imagen
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('eliminar.combo', ['id' => $combo->id]) }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

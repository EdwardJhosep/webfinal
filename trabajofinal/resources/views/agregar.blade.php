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

</body>
</html>

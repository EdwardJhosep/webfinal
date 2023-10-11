<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Combo</title>
</head>
<body>
    <h1>Editar Combo</h1>

    <!-- Formulario para editar el combo -->
    <form method="POST" action="{{ route('actualizar.combo', ['id' => $combo->id]) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT') <!-- Usar el método PUT para actualizar -->

        <label for="titulo">Título del Combo:</label>
        <input type="text" name="titulo" value="{{ $combo->titulo }}" required><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $combo->descripcion }}</textarea><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ $combo->precio }}" required><br>

        <label for="dias">Días:</label>
        <input type="number" name="dias" value="{{ $combo->dias }}" required><br>

        <label for="incluye">Incluye:</label>
        <textarea name="incluye" required>{{ $combo->incluye }}</textarea><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen"><br>

        <button type="submit">Actualizar Combo</button>
    </form>

    <a href="{{ route('agregar.combo.form') }}">Volver al listado de combos</a>
</body>
</html>

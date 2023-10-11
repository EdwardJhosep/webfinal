<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIST</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/008/942/408/original/ejr-logo-ejr-letter-ejr-letter-logo-design-initials-ejr-logo-linked-with-circle-and-uppercase-monogram-logo-ejr-typography-for-technology-business-and-real-estate-brand-vector.jpg" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Incluye Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Incluye jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">

    <style>
/* Estilos para el contenedor de la fila */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Estilos para cada tarjeta (col-md-4) */
.card {
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 0 10px 20px;
    width: 60%; /* Reducir el ancho para hacer las tarjetas más pequeñas */
    background-color: #f8f8f8;
    position: relative;
}

/* Estilos para la imagen dentro de la tarjeta */
.card img {
    max-width: 100%;
    height: auto;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

/* Estilos para el cuerpo de la tarjeta (card-body) */
.card-body {
    padding: 33px;
    text-align: left;
}

/* Estilos para el título */
.card-title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    color: #333;
}

/* Estilos para el texto descriptivo */
.card-text {
    font-size: 14px;
    margin-top: 10px;
    color: #777;
}

/* Estilos para la sección de precio y días */
.precio-dias {
    font-size: 16px;
    color: #ff6600;
    position: absolute;
    top: 10px; /* Ajusta la posición vertical del precio */
    left: 10px; /* Ajusta la posición horizontal del precio */
    background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente para el precio */
    padding: 5px 10px; /* Espaciado interno para el precio */
    color: #ff0000; /* Cambia el color del precio a rojo */
}

/* Estilos para el contenedor principal */
.container1 {
    max-width: 500px; /* Establece el ancho máximo del formulario */
    margin: 0 auto; /* Centra el formulario horizontalmente */
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Estilos para el título */
h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
}

/* Estilos para etiquetas de formulario y campos de entrada */
.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    color: #333;
}

input.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Estilos para mensajes de error */
.invalid-feedback {
    color: #ff0000;
}

/* Estilos para el botón de envío */
button.btn-primary {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Estilos para el mensaje de éxito */
.alert.alert-success {
    margin-top: 20px;
    padding: 10px;
    background-color: #5cb85c;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-align: center;
}


</style>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Logo de la institución -->
            <a class="navbar-brand" href="#">
                <img src="https://www.perutourhuaraz.com/images/logo.png" alt="Logo de la Institución" class="logo">
            </a>
            <!-- Textos en movimiento después del logo -->
            <a class="nav-link moving-text" href="#" id="noticiasDropdown">
                <img src="img/texto.PNG" alt="">
                <span id="changingText">Descubre el mundo y vive aventuras</span>
            </a>
            <script>
                // Lista de textos para cambiar
                const textos = [
                    "Descubre el mundo y vive aventuras",
                    "Explora lugares asombrosos",
                    "Viaja con seguridad y comodidad",
                    "Tu próxima aventura te espera"
                ];

                // Elemento de texto
                const changingText = document.getElementById("changingText");

                // Índice de texto actual
                let currentIndex = 0;

                // Función para cambiar el texto
                function cambiarTexto() {
                    changingText.textContent = textos[currentIndex];
                    currentIndex = (currentIndex + 1) % textos.length;
                }

                // Cambiar el texto inicial
                cambiarTexto();

                // Cambiar el texto cada 3 segundos (3000 milisegundos)
                setInterval(cambiarTexto, 3000);
            </script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ver">Ver resreva</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reservar">Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            </ul>
        </div>
    </div>



            <!-- Iconos en el lado derecho -->
            <div class="navbar-icons ml-auto">
                <a class="navbar-icon" href="https://www.facebook.com/I.E.P.ISAAC.NEWTON?mibextid=ZbWKwL">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a class="navbar-icon" href="https://wa.me/51905468247" target="_blank">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a class="navbar-icon" href="https://www.youtube.com/@institucioneducativaisaacn7723">
                    <i class="fab fa-youtube fa-2x"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="whatsapp-button">
        <a href="https://wa.me/5121567261" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp" class="whatsapp-icon">
        </a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <!-- Dentro del cuerpo de tu vista reservar.blade.php -->

   <h1>Combos Disponibles</h1>

<div class="row">
    @foreach($combos as $combo)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/imagenes_combo/' . basename($combo->imagen)) }}" alt="{{ $combo->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $combo->titulo }}</h5>
                    <p class="card-text">{{ $combo->descripcion }}</p>
                    <div class="precio-dias">
                        Precio: ${{ $combo->precio }}<br>
                        Días: {{ $combo->dias }}<br>
                        Incluye: <br>
                        {{ $combo->incluye }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



<div class="container1">
    <h1>Formulario de Reserva</h1>
    <form method="POST" action="{{ route('reservas.store') }}">
        @csrf
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control" required>
            @if ($errors->has('dni'))
                <div class="invalid-feedback">
                    {{ $errors->first('dni') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="nombre">NOMBRE:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">
                    {{ $errors->first('nombre') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="form-control" required>
            @if ($errors->has('telefono'))
                <div class="invalid-feedback">
                    {{ $errors->first('telefono') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="n_personas">Número de Personas:</label>
            <input type="text" id="n_personas" name="n_personas" class="form-control" required>
            @if ($errors->has('n_personas'))
                <div class="invalid-feedback">
                    {{ $errors->first('n_personas') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="niños">Niños:</label>
            <input type="text" id="niños" name="niños" class="form-control" required>
            @if ($errors->has('niños'))
                <div class="invalid-feedback">
                    {{ $errors->first('niños') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="incluye">Incluye:</label>
            <input type="text" id="incluye" name="incluye" class="form-control" required>
            @if ($errors->has('incluye'))
                <div class="invalid-feedback">
                    {{ $errors->first('incluye') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
            @if ($errors->has('fecha'))
                <div class="invalid-feedback">
                    {{ $errors->first('fecha') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="combo">Combo:</label>
            <input type="text" id="combo" name="combo" class="form-control" required>
            @if ($errors->has('combo'))
                <div class="invalid-feedback">
                    {{ $errors->first('combo') }}
                </div>
            @endif
        </div>
       
        <div>
            <button type="submit" class="btn btn-primary">Guardar Reserva</button>
        </div>
    </form>
</div>



@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

</body>

</html>
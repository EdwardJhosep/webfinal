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
        /* Establece un ancho y alto fijo para todas las imágenes de combos */
        .card-img-top {
            width: 340px;
            /* Cambia esto al ancho deseado en píxeles */
            height: 200px;
            /* Mantén la proporción de aspecto original */
        }
        /* Estilos para el contenedor de las imágenes en movimiento */
/* Estilos para el contenedor de las imágenes en movimiento */
.moving-images {
    display: flex;
    justify-content: space-between; /* Espacio entre las imágenes */
    animation: moveImages 5s linear infinite; /* Animación de movimiento */
}

/* Estilos para las imágenes */
.moving-image {
    width: 500px; /* Ancho fijo para todas las imágenes */
    height: 600px; /* Altura fija para todas las imágenes */
    object-fit: cover; /* Ajustar la imagen al tamaño del contenedor */
}

/* Establece un ancho máximo y alto máximo para las imágenes del carrusel */
.carousel-inner img {
    max-width: 1930px; /* Establece el ancho máximo deseado */
    max-height: 780px; /* Establece la altura máxima deseada */
    width: auto; /* Ajusta automáticamente el ancho en función del alto máximo */
    height: auto; /* Ajusta automáticamente el alto en función del ancho máximo */
}

/* Animación de movimiento */
@keyframes moveImages {
    0% {
        transform: translateX(0); /* Inicio */
    }
    25% {
        transform: translateX(20px); /* Movimiento hacia la derecha */
    }
    50% {
        transform: translateX(0); /* Regreso al centro */
    }
    75% {
        transform: translateX(-20px); /* Movimiento hacia la izquierda */
    }
    100% {
        transform: translateX(0); /* Regreso al centro */
    }
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
    <div class="container mt-5">
        <div class="row">
            <!-- Primer cuadro -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen1.jpg" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Título 1</h5>
                        <p class="card-text">Descripción del primer elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

          
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 2</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

         
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen3.jpg" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Título 3</h5>
                        <p class="card-text">Descripción del tercer elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 4</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 5</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 6</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 7</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 8</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 9</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 10</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 11</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagen2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Título 12</h5>
                        <p class="card-text">Descripción del segundo elemento.</p>
                        <div class="precio-dias">
                            Precio: $150<br>
                            Días: 1 <br>
                            Incluye: <br>
                            1. Estadía<br>
                            2. Comida
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="container">
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
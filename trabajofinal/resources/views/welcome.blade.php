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

.imagen-de-fondo {
    position: relative; /* Establece la posición relativa en el contenedor */
}

.imagen-de-fondo img {
    width: 100%; /* Ancho al 100% del contenedor */
    height: auto; /* Altura automática para mantener la proporción de la imagen */
}

.texto-superpuesto {
    position: absolute;
    top: 50%; /* Alinea verticalmente en el centro del contenedor */
    left: 50%; /* Alinea horizontalmente en el centro del contenedor */
    transform: translate(-50%, -50%); /* Centra el contenido */
    background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
    width: 101%; /* Ancho al 100% del contenedor */
    height: 100%; /* Altura al 100% del contenedor */
    padding: 15%; /* Espacio alrededor del texto */
    color: white; /* Color del texto */
}

.texto-superpuesto h1 {
    font-size: 55px; /* Tamaño de fuente */
    color: #fff; /* Color de texto (blanco en este caso) */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
    font-weight: bold; /* Negrita */
    font-family: 'Arial', sans-serif; /* Fuente del texto */
    text-transform: uppercase; /* Convertir texto a mayúsculas */
    line-height: 300px; /* Centrar verticalmente el texto */
    text-align: right; /* Alinear el texto a la derecha */
    margin-right: +370px; /* Desplazar el texto hacia la derecha utilizando margen negativo */
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
                <span id="changingText">Descubre el mundo </span>
            </a>
            <script>
                // Lista de textos para cambiar
                const textos = [
                    "Descubre el mundo",
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
                    <a class="nav-link" href="/ver">Ver</a>
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

    <div class="d-block d-md-none"><br><br><br><br><br><br><br></div> <!-- Agrega un espacio en blanco solo en dispositivos móviles -->

<div class="imagen-de-fondo">
    <img src="{{ asset('img/111.jpg') }}" alt="Imagen de fondo">
    <div class="texto-superpuesto">
        <h1>HUANUCO</h1>




















































    </div>
</div>

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


</body>

</html>
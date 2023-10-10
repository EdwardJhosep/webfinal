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

        /* Estilos para el contenedor del mapa */
        #map-container {
            width: 100%;
            max-width: 800px; /* Ancho máximo para mantenerlo responsivo */
            height: 600px;
            margin: 0 auto; /* Centra el mapa horizontalmente */
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        /* Estilos para el botón de abrir y cerrar el mapa */
        #toggle-map-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #toggle-map-button:hover {
            background-color: #0056b3;
        }
        .contact-info {
    display: flex;
    justify-content: space-between;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.contact-item {
    text-align: center;
}

.contact-item i {
    font-size: 24px;
    margin-bottom: 10px;
}

.contact-item p {
    font-size: 16px;
    margin: 0;
}

.contact-item a {
    color: #007bff;
    text-decoration: none;
}

.contact-item a:hover {
    text-decoration: underline;
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
    <div class="contact-info">
    <div class="contact-item">
        <i class="fas fa-envelope"></i>
        <p>Correo Electrónico: <a href="mailto:info@example.com">info@example.com</a></p>
    </div>
    <div class="contact-item">
        <i class="fas fa-phone"></i>
        <p>Número de Teléfono: <a href="tel:+123456789">+123456789</a></p>
    </div>
    <div class="contact-item">
        <i class="fas fa-map-marker"></i>
        <p>Dirección: 123 Calle Principal, Ciudad, País</p>
    </div>
</div>

<br>
    <div id="map-container">
        <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.104039423829!2d-76.24071232484117!3d-9.92529280603711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c31cfd9a54f7%3A0x6ebf80d4c3d959b3!2sParque%20AMARILIS!5e0!3m2!1ses-419!2spe!4v1696942917345!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

   
</body>

</html>
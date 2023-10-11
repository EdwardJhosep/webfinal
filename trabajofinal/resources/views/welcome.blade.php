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
    max-width: 1800px; /* Establece el ancho máximo deseado */
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
    width: 100%; /* Ancho al 100% del contenedor */
    height: 100%; /* Altura al 100% del contenedor */
    padding: 15%; /* Espacio alrededor del texto */
    color: white; /* Color del texto */
}

.texto-superpuesto h1 {
    font-size: 55px; /* Tamaño de fuente para h1 */
    color: #fff; /* Color de texto (blanco en este caso) */
    text-shadow: 3px 3px 5px rgba(255, 0, 0, 0.5); /* Sombra de texto roja */
    font-weight: bold; /* Negrita */
    font-family: 'Arial', sans-serif; /* Fuente del texto */
    text-transform: uppercase; /* Convertir texto a mayúsculas */
    text-align: center; /* Alinear el texto al centro horizontalmente */
    animation: fadeIn 2s ease-in-out; /* Efecto de aparición */
}

.texto-superpuesto h2 {
    font-size: 36px; /* Tamaño de fuente para h2 (más pequeño que h1) */
    color: #fff; /* Color de texto (blanco en este caso) */
    text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5); /* Sombra de texto roja */
    font-weight: bold; /* Negrita */
    font-family: 'Arial', sans-serif; /* Fuente del texto */
    text-transform: uppercase; /* Convertir texto a mayúsculas */
    text-align: center; /* Alinear el texto al centro horizontalmente */
    animation: fadeIn 2s ease-in-out; /* Efecto de aparición */
    margin-top: -100px; /* Ajusta la separación vertical */
}

/* Media query para dispositivos móviles */
@media (max-width: 767px) {
    .texto-superpuesto h1 {
        line-height: 1; /* Elimina el espacio adicional en la línea */
    }
}

/* Media query para dispositivos de escritorio */
@media (min-width: 768px) {
    .texto-superpuesto h1 {
        /* Estilos específicos para dispositivos de escritorio */
        line-height: 300px; /* Centrar verticalmente el texto en dispositivos de escritorio */
        text-align: right; /* Alinear el texto a la derecha en dispositivos de escritorio */
        margin-right: 370px; /* Desplazar el texto hacia la derecha en dispositivos de escritorio */
    }
}


@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
/* Estilos para el encabezado h1 */
h1 {
    font-size: 36px; /* Tamaño de fuente */
    color: #333; /* Color de texto (puedes cambiar el color a tu gusto) */
    font-weight: bold; /* Negrita */
    text-align: center; /* Alinear el texto al centro */
    margin-top: 20px; /* Margen superior */
}

/* Estilos para el subtítulo h3 */
h3 {
    font-size: 24px; /* Tamaño de fuente */
    color: #666; /* Color de texto (puedes cambiar el color a tu gusto) */
    text-align: center; /* Alinear el texto al centro */
    margin-top: 10px; /* Margen superior */
}
<style>
    .card {
        position: relative; /* Permite posicionar elementos hijos con respecto a este elemento */
    }

    .precio-dias {
        position: absolute; /* Posiciona el elemento de manera absoluta con respecto al contenedor */
        top: 10px; /* Ajusta la distancia desde la parte superior */
        right: 10px; /* Ajusta la distancia desde la parte derecha */
        background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
        color: white; /* Color del texto */
        padding: 5px 10px; /* Espacio interno para el texto */
        font-weight: bold; /* Negrita */
    }

    .precio-dias {
        position: absolute;
        top: 10px; /* Ajusta la posición desde la parte superior */
        right: 10px; /* Ajusta la posición desde la derecha */
        background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
        color: white; /* Color del texto */
        padding: 10px; /* Espacio alrededor del texto */
        border-radius: 5px; /* Bordes redondeados */
        font-size: 14px; /* Tamaño de fuente */
    }

    .precio-dias br {
        margin-top: 5px; /* Espacio entre líneas */
    }

    .card {
        position: relative; /* Establece la posición relativa para que .precio-dias funcione */
    }

    .card-title {
        font-weight: bold; /* Texto en negrita */
        margin-top: 15px; /* Espacio entre el título y el párrafo */
    }

    .card-text {
        line-height: 1.5; /* Espaciado entre líneas del párrafo */
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

    <div class="d-block d-md-none"><br><br><br><br><br><br><br></div> <!-- Agrega un espacio en blanco solo en dispositivos móviles -->

<div class="imagen-de-fondo">
    <img src="{{ asset('img/111.jpg') }}" alt="Imagen de fondo">
    <div class="texto-superpuesto">
        <h1>HUANUCO </h1>
        <h2>peru-tours</h2>

    </div>
</div>
<br>
<br>

<h1>DESCUBRE NUESTROS HERMOSOS LUGARES </h1>
<H3>elige la mejor promocion para ti</H3>

<!-- Agrega este código debajo del contenido actual en tu archivo HTML -->
<div class="container mt-5">
    <div class="row">
        <!-- Primer contenedor -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="https://elcomercio.pe/resizer/5OucjvtgYInW33X2CzeErM6GZ7o=/980x528/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/3HBJO5WSORE4VMR3YTY6MPQTJY.jpg" class="card-img-top" alt="Imagen 1">

                <div class="precio-dias">Precio: $100<br>Días: 1 <br> Incluye: <br>1.estadia<br>2.comida</div>
                <div class="card-body">
                    <h5 class="card-title">La Bella Durmiente</h5>
                    <p class="card-text">Ubicado el Suroeste de la ciudad de Tingo María, “La Bella Durmiente” es una cadena montañosa cubierta por un manto verde de frondosa vegetación llamada Puma Ringri (orejas de puma) que en conjunto forman la silueta de una hermosa mujer dormida eternamente por cuya base discurren los ríos Huallaga y Monzón.</p>
                </div>
            </div>
        </div>

        <!-- Segundo contenedor -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="https://www.peru.travel/Contenido/Atractivo/Imagen/es/23/1.2/Principal/cordillera-huayhuash.jpg" class="card-img-top" alt="Imagen 1">

                <div class="precio-dias">Precio: $250<br>Días: 2 <br> Incluye: <br>1.estadia<br>2.comida</div>
                <div class="card-body">
                    <h5 class="card-title">Cordillera Huayhuash</h5>
                    <p class="card-text">La cordillera Huayhuash, ​ es una cordillera en los Andes del Perú. Corre de norte a sur, la zona principal que posee unas veinte cumbres se desarrolla en una extensión de aproximadamente 30 km, con una cadena montañosa secundaria de cumbres de menor altura hacia el oeste que posee unos 15 km de largo.</p>
                </div>
            </div>
        </div>

        <!-- Tercer contenedor -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="https://www.bitacorarevista.com/web/wp-content/uploads/AGUAS-SULFOROSAS-2.jpg" class="card-img-top" alt="Imagen 1">

                <div class="precio-dias">Precio: $150<br>Días: 1 <br> Incluye: <br>1.estadia<br>2.comida</div>
                <div class="card-body">
                    <h5 class="card-title">Aguas Sulfurosas de Jacintillo</h5>
                    <p class="card-text">Las aguas sulfurosas de Jacintillo, es una piscina medicinal debajo del cerro llamado Cotomono, el cual posee bastante azufre, de allí el motivo del nombre, esta fuente medicinal cuenta con una dimensión de 30 metros aproximados, tiene una forma semicircular que nace bajo el cerro, Se le atribuyen propiedades curativas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="whatsapp-button">
        <a href="https://wa.me/5121567261" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp" class="whatsapp-icon">
        </a>
    </div>
</body>
</html>
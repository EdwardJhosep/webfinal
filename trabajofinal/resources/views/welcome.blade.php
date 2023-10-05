<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIST</title>
    <link rel="icon" href="img/logo.jpg.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <style>     
         /* Reset de estilos para eliminar los márgenes y rellenos predeterminados */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Estilo para el fondo del cuerpo de la página */
body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

/* Estilo para la barra de navegación */
.navbar {
    background-color: #333;
}

/* Estilo para el logotipo de la institución en la barra de navegación */
.navbar-brand .logo {
    max-width: 100px; /* Ajusta el tamaño del logo según tus necesidades */
}

/* Estilo para el texto en movimiento */
#changingText {
    font-size: 24px;
    color: #fff;
}

/* Estilo para los íconos de redes sociales en la barra de navegación */
.navbar-icon {
    color: #fff;
    margin-right: 15px;
}

/* Estilo para los enlaces de navegación */
.navbar-nav .nav-link {
    color: #fff;
}

/* Estilo para los enlaces de navegación cuando están activos o al pasar el mouse sobre ellos */
.navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
    color: #f8b400;
}

/* Estilo para el botón de hamburguesa en dispositivos móviles */
.navbar-toggler-icon {
    background-color: #fff;
}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">


        <div class="container">
<!-- Logo de la institución -->
<a class="navbar-brand" href="#">
    <img src="https://www.citytours.com/wp-content/uploads/2021/06/Email-Logo.jpg" alt="Logo de la Institución" class="logo">
</a>
<!-- Textos en movimiento después del logo -->
<a class="nav-link moving-text" href="#" id="noticiasDropdown">
    <img src="img/texto.PNG" alt="">
    <span id="changingText">Viaja y vive </span>
</a>
<script>
    const changingText = document.getElementById("changingText");
    const texts = ["Viaja y descubre el PERU", "Inicia el año 2024 con un viaje", "Que esperas¡solicita ahora!"];
    let index = 0;

    function changeText() {
        changingText.textContent = texts[index];
        index = (index + 1) % texts.length;
    }

    setInterval(changeText, 5000); // Cambia el texto cada 2 segundos
</script>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">   
                <li class="nav-item">
                <li class="nav-item">
                <li class="nav-item">
    <a class="nav-link" href="{{ route('inicio') }}">INICIO</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('reservar') }}">RESERVAR</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
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
    <!-- Información adicional antes del pie de página -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="titulo9">Filtrar Logros por Mes</h3>
                <br>
                <button onclick="filtrarPorMes(0)">Mostrar Todas</button>
                <button onclick="filtrarPorMes(1)">Enero</button>
                <button onclick="filtrarPorMes(2)">Febrero</button>
                <button onclick="filtrarPorMes(3)">Marzo</button>
                <button onclick="filtrarPorMes(4)">Abril</button>
                <button onclick="filtrarPorMes(5)">Mayo</button>
                <button onclick="filtrarPorMes(6)">Junio</button>
                <button onclick="filtrarPorMes(7)">Julio</button>
                <button onclick="filtrarPorMes(8)">Agosto</button>
                <button onclick="filtrarPorMes(9)">Setiembre</button>
                <button onclick="filtrarPorMes(10)">Octubre</button>
                <button onclick="filtrarPorMes(11)">Noviembre</button>
                <button onclick="filtrarPorMes(12)">Diciembre</button>
            </div>
        </div>
    </div>


    <div class="container mt-4">
        <div class="row" id="publicaciones">
            <!-- Aquí se mostrarán las publicaciones filtradas -->
        </div>
    </div>
    <!-- JavaScript para filtrar las publicaciones -->
    <script>
        window.onload = function () {
            filtrarPorMes(0); // Muestra todas las publicaciones al cargar la página
        }
        // Supongamos que tienes un array de objetos con las publicaciones y cada objeto tiene una propiedad "fecha".
        const publicaciones = [
        { 
    
            titulo: "El Centro Imperio Inca: Huánuco Pampa.",
            fecha: "2023-09-27-2023-10-30",
            texto: "Más de 3 díasTous en autobús desde <BR> S/ 499.64  por adulto",
            imagen: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/75/4e/c4/caption.jpg?w=500&h=400&s=1"
        },
        
        ];

       // Función para mostrar las publicaciones según el mes seleccionado
    function filtrarPorMes(mes) {
        let publicacionesFiltradas;

        if (mes === 0) {
            // Mostrar todas las publicaciones
            publicacionesFiltradas = publicaciones;
        } else {
            // Filtrar por mes
            publicacionesFiltradas = publicaciones.filter(publicacion => {
                const fecha = new Date(publicacion.fecha);
                return fecha.getMonth() + 1 === mes; // +1 porque getMonth() devuelve valores de 0 a 11
            });
        }

        // Mostrar las publicaciones filtradas en el contenedor
        const publicacionesContainer = document.getElementById("publicaciones");
        publicacionesContainer.innerHTML = ""; // Limpiar el contenedor

publicacionesFiltradas.forEach(publicacion => {
    const publicacionElement = document.createElement("div");
    publicacionElement.classList.add("col-md-4");

    // Agrega la clase para el color azul
    publicacionElement.classList.add("card-azul");

    publicacionElement.innerHTML = `
    <div class="card mb-4 card-azul">
            <img src="${publicacion.imagen}" class="card-img-top" alt="${publicacion.titulo}">
            <div class="card-body">
                <h5 class="card-title">${publicacion.titulo}</h5>
                <p class="card-text">${publicacion.texto}</p>
                <p class="card-text">Fecha de vigencia: ${publicacion.fecha}</p>
            </div>
        </div>
    `;
    publicacionesContainer.appendChild(publicacionElement);
});

        
    }
</script>
</body>
</html>
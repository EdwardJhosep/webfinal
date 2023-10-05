<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIST</title>
    <link rel="icon" href="https://w7.pngwing.com/pngs/333/737/png-transparent-travel-tourism-in-norway-hotel-business-information-sai-gon-blue-logo-silhouette.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">  
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
</body>
</html>
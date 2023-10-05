<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIST</title>
    <link rel="icon" href="https://w7.pngwing.com/pngs/333/737/png-transparent-travel-tourism-in-norway-hotel-business-information-sai-gon-blue-logo-silhouette.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
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
            // Tu script para cambiar el texto aquí
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

<!-- Tu contenido aquí -->

</body>
</html>

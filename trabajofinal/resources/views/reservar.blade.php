<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIST</title>
    <img src="http://localhost/TrabajoFinal/trabajofinal/public/img/LOGO.jpg" alt="Logo de la Institución" class="logo">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
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
<br>
<br>
<br>
<br>
<br>
    <div class="container mt-4">
        <h3 class="text-center">Filtrar Combos Vacacionales por Año</h3>
        <div class="text-center">
            <button onclick="filtrarCombosPorAnio(2023)">2023</button>
            <button onclick="filtrarCombosPorAnio(2024)">2024</button>
            <button onclick="filtrarCombosPorAnio(2025)">2025</button>
            <!-- Agrega botones para los demás años -->
        </div>
        <h3 class="text-center">Meses Disponibles para el Año</h3>
        <div class="text-center" id="mesesDisponibles">
            <!-- Aquí se mostrarán los botones de los meses disponibles -->
        </div>
    </div>
    <!-- Contenedor para mostrar combos vacacionales -->
    <div class="container mt-4">
        <div class="row" id="combos">
            <!-- Aquí se mostrarán los combos filtrados -->
        </div>
    </div>
    <script>
        window.onload = function() {
            filtrarPorMes(0); // Muestra todas las publicaciones al cargar la página
        }
        // Arreglo de combos vacacionales con información que incluye el año y el mes en el que están disponibles
        const combosVacacionales = [
           
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 1,
        imagen: "{{ asset('img/1.jpg') }}",
        lugar: "El Centro Imperio Inca: Huánuco Pampa",
        precio: "$300 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 2",
        año: 2023,
        mes: 2,
        imagen: "{{ asset('img/2.jpg') }}",
        lugar: "Huayhuash Trek y Huanuco Viejo Ruinas Incas",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "4 días"
    },
    {
        nombre: "Combo 3",
        año: 2023,
        mes: 3,
        imagen: "{{ asset('img/3.jpg') }}",
        lugar: "Caminata Cultural Huayhuash - Ciudadela Inca Huanucoviejo",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 4",
        año: 2023,
        mes: 4,
        imagen: "{{ asset('img/4.jpg') }}",
        lugar: "Ciudadela de Hunucoviejo de INCA - Wanucomarka - La Union",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 5",
        año: 2023,
        mes: 5,
        imagen: "{{ asset('img/7.jpg') }}",
        lugar: "Templo de Kotosh o de las Manos Cruzadas",
        precio: "$340 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 6",
        año: 2023,
        mes: 6,
        imagen: "{{ asset('img/5.jpg') }}",
        lugar: "La Bella Durmiente de Tingo María",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 7",
        año: 2023,
        mes: 7,
        imagen: "{{ asset('img/6.jpg') }}",
        lugar: "Cordillera Huayhuash",
        precio: "$360 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 8",
        año: 2023,
        mes: 8,
        imagen: "{{ asset('img/8.jpg') }}",
        lugar: "Casa de la Perricholi",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 9",
        año: 2023,
        mes: 9,
        imagen: "{{ asset('img/9.jpg') }}",
        lugar: "Cueva de las Lechuzas",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 10",
        año: 2023,
        mes: 10,
        imagen: "{{ asset('img/10.jpg') }}",
        lugar: "Catedral de Huánuco",
        precio: "$330 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 11",
        año: 2023,
        mes: 11,
        imagen: "{{ asset('img/12.jpg') }}",
        lugar: "Aguas sulfurosas de Jacintillo",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 12",
        año: 2023,
        mes: 12,
        imagen: "{{ asset('img/13.jpg') }}",
        lugar: "Mayantuyacu",
        precio: "$380 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },

    {
        nombre: "Combo 1",
        año: 2024,
        mes: 1,
        imagen: "{{ asset('img/1.jpg') }}",
        lugar: "El Centro Imperio Inca: Huánuco Pampa",
        precio: "$300 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 2",
        año: 2024,
        mes: 2,
        imagen: "{{ asset('img/2.jpg') }}",
        lugar: "Huayhuash Trek y Huanuco Viejo Ruinas Incas",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "4 días"
    },
    {
        nombre: "Combo 3",
        año: 2024,
        mes: 3,
        imagen: "{{ asset('img/3.jpg') }}",
        lugar: "Caminata Cultural Huayhuash - Ciudadela Inca Huanucoviejo",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 4",
        año: 2024,
        mes: 4,
        imagen: "{{ asset('img/4.jpg') }}",
        lugar: "Ciudadela de Hunucoviejo de INCA - Wanucomarka - La Union",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 5",
        año: 2024,
        mes: 5,
        imagen: "{{ asset('img/7.jpg') }}",
        lugar: "Templo de Kotosh o de las Manos Cruzadas",
        precio: "$340 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 6",
        año: 2024,
        mes: 6,
        imagen: "{{ asset('img/5.jpg') }}",
        lugar: "La Bella Durmiente de Tingo María",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 7",
        año: 2024,
        mes: 7,
        imagen: "{{ asset('img/6.jpg') }}",
        lugar: "Cordillera Huayhuash",
        precio: "$360 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 8",
        año: 2024,
        mes: 8,
        imagen: "{{ asset('img/8.jpg') }}",
        lugar: "Casa de la Perricholi",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 9",
        año: 2024,
        mes: 9,
        imagen: "{{ asset('img/9.jpg') }}",
        lugar: "Cueva de las Lechuzas",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 10",
        año: 2024,
        mes: 10,
        imagen: "{{ asset('img/10.jpg') }}",
        lugar: "Catedral de Huánuco",
        precio: "$330 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 11",
        año: 2024,
        mes: 11,
        imagen: "{{ asset('img/12.jpg') }}",
        lugar: "Aguas sulfurosas de Jacintillo",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 12",
        año: 2024,
        mes: 12,
        imagen: "{{ asset('img/13.jpg') }}",
        lugar: "Mayantuyacu",
        precio: "$380 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 1,
        imagen: "{{ asset('img/1.jpg') }}",
        lugar: "El Centro Imperio Inca: Huánuco Pampa",
        precio: "$300 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 2",
        año: 2025,
        mes: 2,
        imagen: "{{ asset('img/2.jpg') }}",
        lugar: "Huayhuash Trek y Huanuco Viejo Ruinas Incas",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "4 días"
    },
    {
        nombre: "Combo 3",
        año: 2025,
        mes: 3,
        imagen: "{{ asset('img/3.jpg') }}",
        lugar: "Caminata Cultural Huayhuash - Ciudadela Inca Huanucoviejo",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 4",
        año: 2025,
        mes: 4,
        imagen: "{{ asset('img/4.jpg') }}",
        lugar: "Ciudadela de Hunucoviejo de INCA - Wanucomarka - La Union",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 5",
        año: 2025,
        mes: 5,
        imagen: "{{ asset('img/7.jpg') }}",
        lugar: "Templo de Kotosh o de las Manos Cruzadas",
        precio: "$340 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 6",
        año: 2025,
        mes: 6,
        imagen: "{{ asset('img/5.jpg') }}",
        lugar: "La Bella Durmiente de Tingo María",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 7",
        año: 2025,
        mes: 7,
        imagen: "{{ asset('img/6.jpg') }}",
        lugar: "Cordillera Huayhuash",
        precio: "$360 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
    {
        nombre: "Combo 8",
        año: 2025,
        mes: 8,
        imagen: "{{ asset('img/8.jpg') }}",
        lugar: "Casa de la Perricholi",
        precio: "$310 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 9",
        año: 2025,
        mes: 9,
        imagen: "{{ asset('img/9.jpg') }}",
        lugar: "Cueva de las Lechuzas",
        precio: "$320 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 10",
        año: 2025,
        mes: 10,
        imagen: "{{ asset('img/10.jpg') }}",
        lugar: "Catedral de Huánuco",
        precio: "$330 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 11",
        año: 2025,
        mes: 11,
        imagen: "{{ asset('img/12.jpg') }}",
        lugar: "Aguas sulfurosas de Jacintillo",
        precio: "$350 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "2 días"
    },
    {
        nombre: "Combo 12",
        año: 2025,
        mes: 12,
        imagen: "{{ asset('img/13.jpg') }}",
        lugar: "Mayantuyacu",
        precio: "$380 por persona",
        incluye: "Incluye alojamiento, transporte, comidas y visitas guiadas.",
        duracion: "3 días"
    },
        ];

        // Función para filtrar y mostrar combos vacacionales por año
        function filtrarCombosPorAnio(anio) {
            const combosFiltradosPorAnio = combosVacacionales.filter(combo => combo.año === anio);
            mostrarCombos(combosFiltradosPorAnio);

            // Obtener meses únicos disponibles para el año seleccionado
            const mesesDisponibles = obtenerMesesDisponibles(anio);
            mostrarMesesDisponibles(mesesDisponibles);
        }

        // Función para obtener meses únicos disponibles para un año específico
        function obtenerMesesDisponibles(anio) {
            const mesesDisponibles = new Set();
            combosVacacionales.forEach(combo => {
                if (combo.año === anio) {
                    mesesDisponibles.add(combo.mes);
                }
            });
            return Array.from(mesesDisponibles);
        }

        // Función para mostrar los meses disponibles en el contenedor correspondiente
        function mostrarMesesDisponibles(meses) {
            const mesesDisponiblesContainer = document.getElementById("mesesDisponibles");
            mesesDisponiblesContainer.innerHTML = ""; // Limpiar el contenedor

            meses.forEach(mes => {
                const botonMes = document.createElement("button");
                botonMes.textContent = nombreMes(mes);
                botonMes.onclick = () => filtrarCombosPorMes(mes);
                mesesDisponiblesContainer.appendChild(botonMes);
            });
        }

        // Función para filtrar y mostrar combos vacacionales por mes
        function filtrarCombosPorMes(mes) {
            const combosFiltradosPorMes = combosVacacionales.filter(combo => combo.mes === mes);
            mostrarCombos(combosFiltradosPorMes);
        }

        // Función para mostrar los combos vacacionales en el contenedor correspondiente
        function mostrarCombos(combos) {
    const combosContainer = document.getElementById("combos");
    combosContainer.innerHTML = ""; // Limpiar el contenedor

    combos.forEach(combo => {
        const comboElement = document.createElement("div");
        comboElement.classList.add("col-md-4");
        comboElement.classList.add("card-azul");

        comboElement.innerHTML = `
            <div class="card mb-4 card-azul">
                <img src="${combo.imagen}" class="card-img-top" alt="${combo.nombre}">
                <div class="card-body">
                    <h5 class="card-title">${combo.nombre}</h5>
                    <p class="card-text">Año: ${combo.año}</p>
                    <p class="card-text">Mes: ${nombreMes(combo.mes)}</p>
                    <p class="card-text">Lugar: ${combo.lugar}</p>
                    <p class="card-text">Precio: ${combo.precio}</p>
                    <p class="card-text">Duración: ${combo.duracion} días</p>
                    <p class="card-text">Incluye: ${combo.incluye}</p>
                    <!-- Botón para reservar -->
                    <button class="btn btn-primary" onclick="reservarCombo('${combo.nombre}')">Reservar</button>
                    <!-- Agrega otros detalles del combo aquí -->
                </div>
            </div>
        `;

        combosContainer.appendChild(comboElement);
    });
}


        // Función para obtener el nombre del mes según el número (1 para enero, 2 para febrero, etc.)
        function nombreMes(numeroMes) {
            const meses = [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"
            ];
            return meses[numeroMes - 1];
        }

        // Mostrar todos los combos vacacionales al cargar la página
        window.onload = function() {
            mostrarCombos(combosVacacionales);
        }
    </script>

    <!--  scripts de Bootstrap y jQuery al final del cuerpo del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
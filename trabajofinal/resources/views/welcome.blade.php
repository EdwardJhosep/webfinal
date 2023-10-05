
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
        window.onload = function () {
            filtrarPorMes(0); // Muestra todas las publicaciones al cargar la página
        }
// Arreglo de combos vacacionales con información que incluye el año y el mes en el que están disponibles
const combosVacacionales = [
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 1, // Enero
        imagen: "{{ asset('img/1.jpg') }}", // Ruta de la imagen para Combo 1 en enero de 2023
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 2, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 2",
        año: 2023,
        mes: 3, // Marzo
        // Otros detalles del combo
    },
    {
        nombre: "Combo 3",
        año: 2023,
        mes: 4, // Mayo
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 5, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 6, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 7, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 8, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 9, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 10, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 11, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2023,
        mes: 12, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 1, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 2, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 3, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 4, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 5, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 6, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 7, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 8, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 9, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 10, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 11, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2024,
        mes: 12, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 1, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 2, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 3, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 4, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 5, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 6, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 7, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 8, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 9, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 10, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 11, // Enero
        // Otros detalles del combo
    },
    {
        nombre: "Combo 1",
        año: 2025,
        mes: 12, // Enero
        // Otros detalles del combo
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

        // Agrega la clase para el diseño deseado
        comboElement.classList.add("card-azul");

        comboElement.innerHTML = `
    <div class="card mb-4 card-azul">
        <img src="${combo.imagen}" class="card-img-top" alt="${combo.nombre}">
        <div class="card-body">
            <h5 class="card-title">${combo.nombre}</h5>
            <p class="card-text">Año: ${combo.año}</p>
            <p class="card-text">Mes: ${nombreMes(combo.mes)}</p>
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
window.onload = function () {
    mostrarCombos(combosVacacionales);
}
</script>

<!--  scripts de Bootstrap y jQuery al final del cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institución Educativa</title>
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
    
            titulo: "¡𝗖𝗟𝗔𝗦𝗜𝗙𝗜𝗖Ó 𝗔 𝗟𝗔 𝗘𝗧𝗔𝗣𝗔 𝗡𝗔𝗖𝗜𝗢𝗡𝗔𝗟 𝗗𝗘 ATLETISMO! 🏊🏆🥇",
            fecha: "2023-09-27",
            texto: "🥇MEDALLA DE ORO🥇 PARA HUÁNUCO  EN ATLETISMO🏊La Comunidad Educativa Isaac Newton felicita a la estudiante María Esmeralda  Solano Rojas, representante de la región Huánuco quien clasificó a la 𝗘𝗧𝗔𝗣𝗔 𝗡𝗔𝗖𝗜𝗢𝗡𝗔𝗟 𝗗𝗘 ATLETISMO,.",
            imagen: "img/logros/setiembre/1.jpg"
        },
        { 
            titulo: "𝗙𝗘𝗟𝗜𝗖𝗜𝗧𝗔𝗖𝗜𝗢𝗡𝗘𝗦 𝗔𝗯𝗶𝗴𝗮𝗶𝗹 𝗣𝗮𝗽𝗮 𝗚𝗮𝗿𝗮𝘆✨✨",
            fecha: "2023-09-21",
            texto: "Felicitaciones a nuestra estudiante newtoniana 𝗔𝗯𝗶𝗴𝗮𝗶𝗹 𝗣𝗮𝗽𝗮 𝗚𝗮𝗿𝗮𝘆 por haber ocupado el TERCER PUESTO🥉🥉 en la categoría “Adolescentes” del IX Concurso de Oratoria Perú -2023 Etapa Regional.✨✨👏✨✨¡Congratulaciones, 𝗔𝗯𝗶𝗴𝗮𝗶𝗹! Estamos muy orgullosos de ti por haber conquistado al público con la maravillosa voz que te determina..",
            imagen: "img/logros/setiembre/2.jpg"
        },
        { 
            titulo: "𝗙𝗘𝗟𝗜𝗖𝗜𝗧𝗔𝗖𝗜𝗢𝗡𝗘𝗦 𝗔𝗶𝘁𝗮𝗻𝗮 𝗚𝘂𝗮𝗱𝗮𝗹𝘂𝗽𝗲 𝗥𝗮𝗺𝗼𝘀 𝗣𝗮𝗻𝗱𝘂𝗿𝗼 ",
            fecha: "2023-09-19",
            texto: "Queremos Felicitar la destacada participación de nuestra estudiante newtoniana Aitana Guadalupe Ramos Panduro por haber ocupado el 🥇Primer Puesto🥇 en el I Concurso Nacional de Marinera -2023  Categoría Infante.✨🌟La constancia y disciplina logran grandes resultados. 🤩👏🏽.",
            imagen: "img/logros/setiembre/3.jpg"
        },

        { 
            titulo: "👏👏𝗙𝗘𝗟𝗜𝗖𝗜𝗧𝗔𝗖𝗜𝗢𝗡𝗘𝗦 𝗟𝗲𝗼𝗻𝗲𝗹𝗮 𝗥𝗼𝗱𝗿í𝗴𝘂𝗲𝘇 𝗭á𝗿𝗮𝘁𝗲🎊🎉🎉🔷",
            fecha: "2023-09-19",
            texto: "🎉🔷La I.E.P. Isaac Newton felicita a la estudiante 𝗟𝗲𝗼𝗻𝗲𝗹𝗮 𝗥𝗼𝗱𝗿í𝗴𝘂𝗲𝘇 𝗭á𝗿𝗮𝘁𝗲 6º grado de primaria por su participación al Concurso Regional de Pintura denominado Niños Con Valores del Bicentenario, Organizado por  Organización Familia Y Cultura .👏👏🎉🔷Cabe resaltar que, para este certamen de los 200 participantes.",
            imagen: "img/logros/setiembre/4.jpg"
        },

        { 
            titulo: "🎉𝗙𝗘𝗟𝗜𝗖𝗜𝗧𝗔𝗖𝗜𝗢𝗡𝗘𝗦 𝗔𝗺𝗶𝗿 𝗧𝗿𝘂𝗰𝗶𝗼𝘀 𝗩𝗮𝗿𝗴𝗮𝘀",
            fecha: "2023-09-18",
            texto: "🎉Con inmenso orgullo y alegría, queremos expresar nuestro profundo agradecimiento al estudiante Amir Trucios Vargas, por honrar una vez más a nuestro querido Institución Educativa Isaac Newton, por el obtener el Tercer Puesto IX Concurso De Oratoria Perú 2023 Etapa Regional🎉🌟 🎉Es un logró que llena nuestros corazones de emoción y nos impulsa a seguir adelante con pasión y dedicación ¡Vamos por más triunfo!🌟 🌟 .",
            imagen: "img/logros/setiembre/5.jpg"
        },

        { 
            titulo: "🎉 𝗙𝗘𝗟𝗜𝗖𝗜𝗧𝗔𝗖𝗜𝗢𝗡𝗘𝗦 𝗦𝗲𝗿𝗴𝗶𝗼 𝗔𝗻𝗱𝗿é 𝗔𝗹𝗹𝗽𝗮𝘀 𝗟ó𝗽𝗲𝘇 🥳👏",
            fecha: "2023-09-18",
            texto: "🎉 La I.E.P. Isaac Newton felicita al estudiante 𝗦𝗲𝗿𝗴𝗶𝗼 𝗔𝗻𝗱𝗿é 𝗔𝗹𝗹𝗽𝗮𝘀 𝗟ó𝗽𝗲𝘇,  por ocupar el Segundo Puesto🥈🥈en la categoría “Adolescentes” del IX Concurso De Oratoria Perú 2023 Etapa Regional.🌟🥳👏Eres único con tu gran talento que te caracteriza; gracias por poner el nombre de nuestra institución en alto ¡Muchas Felicidades 𝗦𝗲𝗿𝗴𝗶𝗼 ! ¡Vamos por más triunfo!🥈🥈",
            imagen: "img/logros/setiembre/6.jpg"
        },

        { 
            titulo: "FELECITACIONES 𝗙𝗿𝗮𝗻𝗰𝗲𝘀𝗰𝗮 𝗖𝘂𝗲𝗻𝗰𝗮 𝗟𝗲ó𝗻",
            fecha: "2023-09-18",
            texto: "✨🌟✅La I.E.P. Isaac Newton felicita a la estudiante 𝗙𝗿𝗮𝗻𝗰𝗲𝘀𝗰𝗮 𝗖𝘂𝗲𝗻𝗰𝗮 𝗟𝗲ó𝗻 a por ocupar el Primer Puesto en la categoría “Adolescentes” del IX Concurso De Oratoria Perú 2023 Etapa Regional.✨🌟✨🌟Estamos orgulloso del gran talento que tienes; gracias por poner siempre el nombre de nuestra institución en alto ¡Muchas Felicidades 𝗙𝗿𝗮𝗻𝗰𝗲𝘀𝗰𝗮! ¡Vamos por más triunfo!✨🌟",
            imagen: "img/logros/setiembre/7.jpg"
        },

        { 
            titulo: "FELECITACIONES 𝗙𝗮𝗯𝗶𝗮𝗻𝗼 𝗦𝗮𝗹𝗮𝘀 𝗔𝗿𝗮𝗻𝗱𝗮",
            fecha: "2023-09-18",
            texto: "✨🌟✅La I.E.P. Isaac Newton felicita al estudiante 𝗙𝗮𝗯𝗶𝗮𝗻𝗼 𝗦𝗮𝗹𝗮𝘀 𝗔𝗿𝗮𝗻𝗱𝗮 del sexto grado de primaria por ocupar el Primer Puesto en la categoría “Infantil” del IX Concurso De Oratoria Perú 2023 - Etapa Regional.✨🌟✨🌟Estamos orgulloso del gran talento que tienes y por poner siempre en nombre de nuestra institución en alto ¡Muchas Felicidades 𝗙𝗮𝗯𝗶𝗮𝗻𝗼! ¡Vamos por más triunfo!👏👏💪💪.",
            imagen: "img/logros/setiembre/8.jpg"
        },

        { 
            titulo: "Felicitamos a nuestros estudiantes del nivel  secundaria por ocupar  el primer  puesto en la XXXIII ",
            fecha: "2023-09-16",
            texto: "Feria Escolar Nacional de Ciencia y Tecnología, EUREKA - 2023, con el proyecto denominado Producción Capsular de Alimentos Vegetales y Electricidad Verde Bajo Proceso Autofotosínteticos Criticos con una puntuación extraordinario  de 288  en la etapa Ugel .",
            imagen: "img/logros/setiembre/9.jpg"
        },

        {
            titulo: "𝗖𝗔𝗠𝗣𝗘𝗢𝗡𝗔𝗦 𝗥𝗘𝗚𝗜𝗢𝗡𝗔𝗟 𝗘𝗡 𝗩Ó𝗟𝗘𝗬 🎉🏆🥇¡𝐔𝐧 𝐥𝐨𝐠𝐫𝐨 𝐪𝐮𝐞 𝐥𝐥𝐞𝐧𝐚 𝐝𝐞 𝐨𝐫𝐠𝐮𝐥𝐥𝐨 𝐚 𝐭𝐨𝐝𝐨𝐬!¡𝐔𝐧 𝐨𝐫𝐠𝐮𝐥𝐥𝐨 𝗡𝗘𝗪𝗧𝗢𝗡𝗜𝗔𝗡𝗢!",
            fecha: "2023-09-17",
            texto: "🎉🏆🥇ORGULLO NEWTONIANO| Nos hicieron vibrar de emoción en cada partido. Es por ello que la Institución Educativa Isaac Newton liderado por el director, Fisher Justiniano Chavez, la coordinadora pedagógica, Edith Bravo JARA, y David Paucar Salvador.",
            imagen: "img/logros/setiembre/10.jpg"
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
                <p class="card-text">Fecha de publicación: ${publicacion.fecha}</p>
            </div>
        </div>
    `;
    publicacionesContainer.appendChild(publicacionElement);
});

        
    }
</script>
</body>
</html>
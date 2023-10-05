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
<div class="container-yv">
                                        <div class="card border border-4">
                                            <form id="signup-form">
                                                <h2 class="card-title d-flex justify-content-center">Ingresa tus datos personales</h2>
                                                
                                                
                                                    <!--<h3 class="card-title d-flex justify-content-center">Datos de contacto</h3>-->

                                                <!----------------------------Aca empieza otro formato de formulario---------------------------------------->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Nombres</span>
                                                    <input type="text" aria-label="First name" class="form-control" style="height: auto;" placeholder="Primero">
                                                    <input type="text" aria-label="Last name" class="form-control" style="height: auto;" placeholder="Segundo">
                                                  </div>
                                                  <div class="input-group mb-3">
                                                    <span class="input-group-text">Apellidos</span>
                                                    <input type="text" aria-label="First name" class="form-control" style="height: auto;">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                    <span class="input-group-text">Fecha de nacimiento</span>
                                                    <input type="date" name="salida" aria-label="First name" class="form-control" style="height: auto;">
                                                  </div>

                                                  <div class="input-group mb-3">
                                                    <span class="input-group-text">Sexo</span>
                                                    <select name="Sexo" id="sexo" style="height:auto;" class="form-select form-select-sm">
                                                        <option value="Sexo"></option>
                                                        <option value="Sexo">Masculino</option>
                                                        <option value="Sexo">Femenino</option>
                                                    </select>
                                                  </div>
                                        
                                                 


                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Documento</span>
                                                    <input type="text" aria-label="Documento" required placeholder="Numero de documento" class="form-control" style="height: auto;">
                                                </div>


                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Correo</span>
                                                    <input type="text" aria-label="Correo" class="form-control" required placeholder="ejemplo@gmail.com" style="height: auto;">
                                                </div>
                                                
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Confirmar correo</span>
                                                    <input type="text" aria-label="Correo" class="form-control" required placeholder="ejemplo@gmail.com" style="height: auto;">
                                                </div>
                                                  
                                              

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Tel.</span>
                                                    <input type="text" aria-label="Tel" class="form-control" required placeholder="Numero de Telefono" style="height: auto;">
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="d-grid mb-3 gap-2 d-md-flex justify-content-md-end mx-auto">
                                                    <button class="btn btn-dark me-md-2" style="background-color: #6B3C54; width: 100px;" type="button">Aceptar</button>
                                                    <a href=".\index.html"><button class="btn btn-dark" style="background-color: #6B3C54; width: 100px;" type="button">Cancelar</button></a>
                                                  </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </h2>
                    </form>
                    

        </header>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<!--  scripts de Bootstrap y jQuery al final del cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- principal.php -->
<?php
session_start();

// Verificar si se han recibido los datos mediante POST y guardarlos en la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y sanitizar edad
    $edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
    if ($edad === false || $edad <= 0) {
        $_SESSION['error_edad'] = "La edad debe ser un número positivo.";
    } else {
        $_SESSION['edad'] = $edad;
        $_SESSION['interesado'] = isset($_POST['interesado']) ? 'Sí' : 'No';
        unset($_SESSION['error_edad']); // Limpiar error previo
    }
    // Redirigir a la misma página para evitar el reenvío de datos POST
    header("Location: principal.php");
    exit();
}

// Verificar si el usuario es mayor de edad
$edadUsuario = $_SESSION['edad'] ?? null;
$mayorDeEdad = $edadUsuario >= 18;
$interesado = $_SESSION['interesado'] ?? 'No';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MandyEFV Samolo Osita</title>
    <link rel="icon" href="serial-experiments-lain.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="principal.css">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="container mt-5 text-center">
        <a href="http://localhost/Paula_cid_cruz_m2_programacion aplic. web\cuento\cuento.php"
            class="btn btn-link">Cuento</a>
        <a href="http://localhost/Paula_cid_cruz_m2_programacion aplic. web\fibonacci\fibonacci.php"
            class="btn btn-link">Fibonacci</a>
    </div>
    <!-- Menú desplegable -->
    <div class="dropdown mt-3 text-center">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Menú
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="musica.php">Música</a>
            <a class="dropdown-item" href="videojuego.php">Videojuego</a>
            <a class="dropdown-item" href="anime.php">Anime</a>
            <a class="dropdown-item" href="tecnologia.php">Tecnología</a>
        </div>
    </div>
    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1 class="text-center">Explora Música, Anime y Tecnología en MandyEFV Samolo Osita</h1>
        <p class="text-center">
            En este lugar del cyber espacio, encontrarás diversos temas relacionados
            con videojuegos, música, tecnología, anime, tips Neurodivergentes, entre
            otros.
        </p>
    </div>
    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="carrusel/pc.png" class="d-block w-100 rounded-circle" alt="Imagen PC" />
            </div>
            <div class="carousel-item">
                <img src="carrusel/lunis.png" class="d-block w-100 rounded-circle" alt="Imagen Lunis" />
            </div>
            <div class="carousel-item">
                <img src="carrusel/mando.png" class="d-block w-100 rounded" alt="Imagen Mando" />
            </div>
            <div class="carousel-item">
                <img src="carrusel/serena.png" class="d-block w-100 rounded" alt="Imagen Serena" />
            </div>
            <div class="carousel-item">
                <img src="carrusel/noviembre 2024.png" class="d-block w-100 rounded" alt="Imagen Noviembre 2024" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Sección de temas -->
    <section class="bg-custom-1 mt-5">
        <!-- Música -->
        <div id="musica" class="row mb-4 align-items-center">
            <div class="col-md-6">
                <img src="imagenes/hq720.jpg" alt="Música" class="img-fluid d-block w-100 rounded" />
            </div>
            <div class="col-md-6">
                <h2>Música</h2>
                <p class="parrafo-1">
                    En esta sección podrás estar actualizado, con los últimos
                    lanzamientos musicales.
                </p>
            </div>
        </div>
        <!-- Videojuegos -->
        <div id="videojuego" class="row mb-4 align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="imagenes/consolasvarias.jpg" alt="Videojuegos" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-6 order-md-1">
                <h3>Videojuegos</h3>
                <p class="parrafo-2">
                    Todas las semanas tendremos información detallada de los últimos
                    lanzamientos de PS5, juegos online, Nintendo Switch y mucho más.
                </p>
            </div>
        </div>
        <!-- Anime -->
        <div id="anime" class="row mb-4 align-items-center">
            <div class="col-md-6">
                <img src="imagenes/anime.jpg" alt="Anime" class="img-fluid d-block w-100 rounded" />
            </div>
            <div class="col-md-6">
                <h4>Anime</h4>
                <p class="parrafo-3">
                    Haremos un recorrido por los clásicos del anime popular de los
                    años 80, 90, hasta llegar a los más actuales.
                </p>
            </div>
        </div>
        <!-- Tecnología -->
        <div id="tecnologia" class="row mb-4 align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="imagenes/pc.jpg" alt="Tecnología" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-6 order-md-1">
                <h5>Tecnología</h5>
                <p class="parrafo-4">
                    Aquí estarás informado de los sistemas operativos, como Win11,
                    Linux, MacOS, Chromium OS, entre otros.
                </p>
            </div>
        </div>
    </section>
    </div>

    <!-- Contenido de acuerdo a la edad -->
    <div class="container mt-4">";
        <?php if ($mayorDeEdad): ?>
            <h1 class="text-center">Contenido para mayores de edad</h1>
            <p class="text-center">Este contenido es exclusivo para personas mayores de edad. Aquí encontrarás
                información avanzada y artículos especializados.</p>
            <img src="imagenes  adultos/serial-experiments-lain .jpg" class="img-fluid d-block w-50 rounded mx-auto"
                alt="Contenido para adultos">
        <?php else: ?>
            <h1 class="text-center">Contenido para menores de edad</h1>
            <p class="text-center">Este contenido es apto para personas menores de edad. Aquí encontrarás juegos,
                actividades y recursos educativos.</p>
            <img src="imagenes jovenes/jovenes creativos.jpeg" class="img-fluid d-block w-50 rounded-circle mx-auto"
                alt="Contenido para jóvenes">
        <?php endif; ?>
    </div>

    <!-- Banner condicional para interesados -->
    <?php if ($interesado === 'Sí'): ?>
        <div class="container mt-5">
            <h2 class="text-center">Empresas destacadas</h2>
            <div id="carouselEmpresa" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselEmpresa" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselEmpresa" data-slide-to="1"></li>
                    <li data-target="#carouselEmpresa" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="empresa/empresa1.png" class="d-block w-50 mx-auto" alt="Empresa 1">
                    </div>
                    <div class="carousel-item">
                        <img src="empresa/empresa2.png" class="d-block w-50 mx-auto" alt="Empresa 2">
                    </div>
                    <div class="carousel-item">
                        <img src="empresa/empresa3.jpeg" class="d-block w-50 mx-auto" alt="Empresa 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselEmpresa" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselEmpresa" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="text-center mt-5 py-4">
        <img src="neurodivergente.png" class="img rounded" alt="Logo Neurodivergente" />
        <p>Paula Cid Cruz.</p>
        <div class="mt-3">
            <a href="mailto:alita.27.pc@gmail.com" class="text-dark mr-2">
                <i class="fas fa-envelope fa-2x"></i>
            </a>
            <div class="mt-3">
                <a href="https://wa.me/56990863341" class="text-dark mr-2">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <p>© 2021-2024 Derechos Reservados.</p>
    </footer>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
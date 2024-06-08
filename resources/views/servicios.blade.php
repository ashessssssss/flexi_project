<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios-Flexi Glide</title>
    <link rel="stylesheet" href="./serv.css"/>
    <link rel="stylesheet" href="./serv2.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="img/logo.jpeg" type="image/x-icon">
</head>
<body>
<header>
    <div class="container-hero">
        <div class="container hero">
            <div class="customer-support">
                <i class="fa-solid fa-headset"></i>
                <div class="content-customer-support">
                    <span class="text">Soporte al cliente</span>
                    <span class="number">849-359-2612</span>
                </div>
            </div>
            <div class="container-logo">
                <i class=""></i>
                <h1 class="logo">FlexiGlide</h1>
            </div>
            <div class="container-user">
                <a href="{{route('login')}}"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </div>
    <div class="container-navbar">
        <nav class="navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="menu">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/#productos') }}">Productos</a></li>
                <li><a href="{{ url('/#m-prod') }}">Mejores productos</a></li>
                <li><a href="{{ url('/#especiales') }}">Especiales</a></li>
                <li><a href="{{ url('/#referencias') }}">Referencias</a></li>
                <li><a href="{{route('usuario.citas.index')}}">Citas</a></li>
                <li><a href="#">Servicios</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/sldider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/slider3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></sp>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="title-cards">
    <h2>Nuestros Servicios más populares:</h2>
</div>
<div class="container-card">
    <div class="card">
        <figure>
            <img src="img/card1.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Cambio de Aceites:</h3>
            <p>Nuestros cambios de aceite se hacen de una manera profesional, con los mejores aceites y gasoil de la industria. Ponemos el empeño de tratar bien a su vehículo.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="img/card2.webp">
        </figure>
        <div class="contenido-card">
            <h3>Inspección de motor:</h3>
            <p>Una inspección completa también incluye una revisión interna del motor mediante un endoscopio para detectar daños en cilindros, pistones y válvulas.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="img/card3.webp">
        </figure>
        <div class="contenido-card">
            <h3>Aceite para Frenos:</h3>
            <p>En Flexi Glide es crucial usar el tipo de aceite adecuado para el vehículo y sus fabricantes y piezas, siguiendo las recomendaciones del fabricante.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
</div>
<div class="title-cards"></div>
<div class="container-card">
    <div class="card">
        <figure>
            <img src="img/card4.jpeg">
        </figure>
        <div class="contenido-card">
            <h3>Revisión de niveles:</h3>
            <p>Revisamos el líquido de dirección hidráulica y el líquido limpiaparabrisas. Si alguno de estos líquidos está bajo, se rellena hasta el nivel adecuado.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="img/card5.png">
        </figure>
        <div class="contenido-card">
            <h3>Engrase de puntos:</h3>
            <p>En nuestro centro Flexi Guide se realiza un análisis de esta tarea utilizando grasa especializada para cada punto de lubricación.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="img/card6.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Rotación de neumáticos:</h3>
            <p>La rotación de neumáticos consiste en cambiar la posición de las ruedas del vehículo para que se desgasten de manera uniforme.</p>
            <a href="{{route('usuario.citas.create')}}">Agendar Cita</a>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<footer class="footer">
    <div class="container container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>Dirección: Av. Circunvalación 468, Santiago de los Caballeros 51000</li>
                    <li>Teléfono: 849-359-2612</li>
                    <li>Fax: 55555300</li>
                    <li>Email: FlexiGlide@support.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook">
                        <a href="https://web.facebook.com/profile.php?id=61557440974770"><i class="fa-brands fa-facebook-f"></i></a>
                    </span>
                    <span class="twitter">
                        <a href="https://twitter.com/Flexi_glide"><i class="fa-brands fa-twitter"></i></a>
                    </span>
                    <span class="instagram">
                        <a href="https://www.instagram.com/flexi_glide?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
                    </span>
                </div>
            </div>
            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Políticas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
            </div>
            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>
                <ul>
                    <li><a href="{{route('usuario.dashboard')}}">Mi cuenta</a></li>
                    <li><a href="{{route('usuario.citas.index')}}">Historial de citas</a></li>
                    <li><a href="{{route('usuario.automoviles.index')}}">Mis vehículos</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <p class="title-footer">Boletín informativo</p>
                <div class="content">
                    <p>Suscríbete a nuestros boletines ahora y mantente al día con los bonos y ofertas exclusivas.</p>
                    <input type="email" placeholder="Ingresa el correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>FlexiGlide &copy; 2024</p>
            <img src="img/metodo-de-pago.png" alt="Pagos">
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.querySelector('.fa-bars').addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('show');
    });
</script>
</body>
</html>

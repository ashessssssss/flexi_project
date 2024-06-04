<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>FlexiGlide</title>
		<link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="css/bar.css">		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<link rel="icon" href="img/logo.jpeg" type="image/x-icon">

	</head>
	<body>
		<header>
		<a href="#" class="enlace">
							<!-- <img src="img/logoinv.png" alt="" class="logo"> -->
						</a>
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
						<h1 class="logo">FlexiGlide</a></h1>
					</div>

					<div class="container-user">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title">Logged in 5 min ago</div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Perfil
          </a>
          
          <div class="dropdown-divider"></div>
          <form method="POST" action="{{route('logout')}}">
        @csrf

       
       
          <a href="{{route('logout')}}" 
          onclick="event.preventDefault();
          this.closest('form').submit();"
          class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
          </a>
          </form>

        </div>
      </li>
						<a href="{{route('login')}}"><i class="fa-solid fa-user"></i></a>
	
						<a href="{{route('productos')}}"><i class="fa-solid fa-basket-shopping"></i></a>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
				<i class="fa-solid fa-bars"></i>
				
					<ul class="menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#productos">Productos</a></li>
						<li><a href="#m-prod">Mejores productos</a></li>
						<li><a href="#especiales">Especiales</a></li>
						<li><a href="#referencias">Referencias</a></li>
						<li><a href="#">Citas</a></li>
						<li><a href="#about">Acerca de Nosotros</a></li>
						<li><a href="{{route('servicios')}}">Servicios</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>

		<section class="banner">
			<div class="content-banner">
				<p>FlexiGlide</p>
				<h2>Lubricentro <br/></h2>
				<a href="">Reservar ahora</a>
			</div>
		</section>

		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Tienda</span>
						<p>Compra de Aceites para tu Vehiculo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Citas</span>
						<p>Registrese para agendar una cita</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Tarjeta regalo especial</span>
						<p>Ofrecemos bonos especiales con cupones para hacer el cambio a tu montura</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 849-404-8711</p>
					</div>
				</div>
			</section>

			<section class="container top-categories">
				<h1 id="productos" class="heading-1">Productos</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Automotriz</p>
						<img src="img/iconoauto.png" alt="">
						
					</div>
					<div class="card-category category-expreso">
						<p>Flotillas</p>
						<img src="img/IconoCamion.png" alt="">
						
					</div>
					<div class="card-category category-capuchino">
						<p>Grasas</p>
						<img src="img/Iconograsas.png" alt="">
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h1 id="m-prod" class="heading-1">Mejores Productos</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					
				</div>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/0W-20.jpg" alt="QuakerState" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Senfineco 0W-20</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/senfineco 1.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Senfineco 5W-30</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/senfineco 2.jpg"
								alt="Cafe Australiano"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Senfineco  0W-20 vol3</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.20</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/royalsuper.jpg" alt="Cafe Helado" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Royal Super</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

            <section class="gallery">
                <img
                    src="img/Mapa1.JPG"
                    alt="Gallery Img1"
                    class="gallery-img-1"
                /><img
                    src="img/mapa2.JPG"
                    alt="Gallery Img2"
                    class="gallery-img-2"
                /><img
                    src="img/mapa3.JPG"
                    alt="Gallery Img3"
                    class="gallery-img-3"
                /><img
                    src="img/mapa4.JPG"
                    alt="Gallery Img4"
                    class="gallery-img-4"
                /><img
                    src="img/mapa5.JPG"
                    alt="Gallery Img5"
                    class="gallery-img-5"
                />
            </section>



			<section class="container specials">
				<h1 id="especiales" class="heading-1">Especiales</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cambio de aceiteOG.JPG" alt="Cambio de Aceites" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cambio de aceite</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$9.60 <span>$11.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/lavado.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Lavado de Auto</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/Cambio de filtro.JPG" alt="filtro" />
							<span class="discount">-30%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cambio de filtro</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85 <span>$5.50</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/Limpieza interior.jpg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Limpieza de Interior</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

			<section  class="container blogs">
				<h1 id="referencias" class="heading-1">Referencias</h1>

				<div  class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="img/persona3.jpg" alt="Imagen Blog 1"/>
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Usuario Desconocido</h3>
							<span> 20 enero 2024</span>
							<p>
								Excelente servicio, Mi auto funciona de manera excelente luego de hacerle el cambio de filtro en el establecimiento.
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/Perfil11.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Usuario Desconocido</h3>
							<span>29 Noviembre 2022</span>
							<p>Me encanto todo, la atencion y demas. El servicio es excelente.
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/perfil4.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Usuario Desconocido</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Estoy muy satisfecho, Mi auto luce y huele genial luego de hacerle una Limpieza interior.
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Av. Circunvalación 468, Santiago de los Caballeros 51000
							</li>
							<li>Teléfono: 849-359-2612</li>
							<li>Fax: 55555300</li>
							<li>EmaiL: FlexiGlide@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<a href="https://web.facebook.com/profile.php?id=61557440974770"><i class="fa-brands fa-facebook-f"></i></a>
							</span>
							<span class="twitter">
							<a href="https://twitter.com/Flexi_glide">	<i class="fa-brands fa-twitter"></i></a>
							</span>
							<span class="youtube">
								<a href=""><i class="fa-brands fa-youtube"></i></a>
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
							<li><a href="#">Información Delivery</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Términos y condiciones</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="{{route('usuario.profile')}}">Mi cuenta</a></li>
							<li><a href="#">Historial de ordenes</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con los bonos y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						FlexiGlide &copy; 2024
					</p>

					<img src="img/metodo-de-pago.png" alt="Pagos">
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>

	</body>
</html>

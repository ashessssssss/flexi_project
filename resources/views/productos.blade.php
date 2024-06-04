

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda online</title>

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="x-icon" href="img/logo.jpeg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilos.css">
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
          <h1 class="logo">FlexiGlide</a></h1>
        </div>

        <div class="container-user">
          <i class="fa-solid fa-user"></i>
          <i class="fa-solid fa-basket-shopping"></i>
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
          <li><a href="#">Productos</a></li>
          <li><a href="#">mejores productos</a></li>
          <li><a href="#">Especiales</a></li>
          <li><a href="#">Referencias</a></li>
          <li><a href="#">Servicios</a></li>
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
      
 <main>
	<div class="container">
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<!--Producto 1 -->
    <?php foreach($resultado as $row){ ?>
        <div class="col">
          <div class="card shadow-sm">
            <?PHP 
            $id = $row['id'];
            $imagen = "img/productos/" . $id . "/producto1.jpg";

            if(!file_exists($imagen)){
              $imagen = "img/no-photo.jpg";
            }

            
            ?>
						<img src="<?php echo $imagen;?>" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['nombre_prod']; ?></h5>
              <p class="card-text">$<?php echo number_format($row['precio_prod'],2,'.',','); ?></p>
							<div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="" class="btn btn-primary">Detalles</a>
                </div>
								<a href="" class="btn btn-sucsess">Agregar</a>              </div>
            </div>
          </div>
        </div> 
      <?php } ?>

	</div>
	
</div>
	</div>
	

 </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>













































</body>

</html>
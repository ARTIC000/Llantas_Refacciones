<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link rel="stylesheet" href="Css/Style.css">
  <link rel="title icon" href="Img/top.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/store.css">
</head>
<body>  
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <img src="/Img/Logo.jpeg" alt="Logo" height="80" class="navbar-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="index.html">Home</a>
          <a class="nav-link" href="/Store.php">Store</a>
          <a class="nav-link" href="about_it.html">About</a>
        </div>
        <div class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="LogIn.html">Log In</a>
              <a class="dropdown-item" href="/php/logout.php">Log Out</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-shopping-cart"></i>
            </a>
          </li>
          <button onclick="cambiarColor()">
            <i id="icono-color" class="fa fa-moon"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- Imagen de fondo -->
  <div class="container-fluid p-0">
    <img src="Img/image 25.png" class="img-fluid" alt="Imagen de fondo">
    <div class="overlay-text">
      <h1 class="text-white text-center">Store</h1>
    </div>
  </div>
<!-- Barra de búsqueda -->
<nav class="navbar navbar-dark mb-0"> 
  <div class="container justify-content-center">
    <form class="d-flex">
      <input class="form-control my-search-input" type="search" placeholder="Buscar..." aria-label="Buscar">
      <button class="btn btn-outline-danger my-search-btn" type="submit">Buscar</button>
    </form>
  </div>
</nav>
  <!-- Productos y filtro -->
  <div class="container-fluid mt-5">
    <div class="row">
      <!-- Filtro -->
      <div class="col-md-3">
        <h4>Filter by:</h4>
        <div class="mb-3 filter-card">
          <label for="marca" class="form-label">Brand:</label>
          <select class="form-select" id="marca">
            <option selected>All of them</option>
            <option>Brand 1</option>
            <option>Brand 2</option>
            <option>Brand 3</option>
          </select>
        </div>
        <div class="mb-3 filter-card">
          <label for="precio" class="form-label">Price:</label>
          <select class="form-select" id="precio">
            <option selected>All of them</option>
            <option>Less than $50</option>
            <option>$50 - $100</option>
            <option>More than $100</option>
          </select>
        </div>
        <!-- Agrega más filtros si es necesario -->
      </div>
      <?php include 'php/get_products.php'; ?>
          <!-- Lista de productos -->
          <div class="col-md-9">
              <div class="row">
                  <?php foreach ($productos as $producto): ?>
                      <div class="col-md-4">
                          <div class="card product-card mb-4">
                              <button type="button" class="btn btn-secondary details-btn">Ver detalles</button>
                              <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['producto']; ?>">
                              <div class="card-body">
                              <a href="Details.php?id=<?php echo $producto['id_product']; ?>" class="test"><?php echo $producto['producto']; ?> <br>$<?php echo $producto['precio_venta']; ?></a>
                                  <br>
                                  <button type="button" class="btn btn-primary cart-btn">Agregar al carrito</button>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer class="bg mt-5 pt-5" style="background-color: rgba(0, 0, 0, 0.74);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="color: aliceblue;">
        <h5>Universales llantas y suspensiones.</h5>
        <p>Excellent treatment and service</p>
      </div>
      <div class="col-md-4" style="color: aliceblue;">
        <h5>Capabilities</h5>
        <p>Explore<br>Visit<br>Follow</p>
      </div>
      <div class="col-md-4" style="color: aliceblue;">
        <h5>Our social medias</h5>
        <p>
          <a href="https://www.instagram.com/" target="_blank" style="color: rgb(153, 26, 26);">Instagram</a><br>
          <a href="https://twitter.com/" target="_blank" style="color: rgb(153, 26, 26);">Twitter</a><br>
          <a href="https://www.Facebook.com" target="_blank" style="color: rgb(153, 26, 26);">Facebook</a><br>
          <a href="mailto:engage@weareenvoy.com" style="color: rgb(153, 26, 26);">universalesllantas@gmail.com</a><br>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12" style="color: rgb(230, 220, 220);">
        <p class="text-center">
          &copy; 2024 Universal llantas. All Rights Reserved.<br>
          for the connected world.
        </p>
      </div>
    </div>
  </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>

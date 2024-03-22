<?php
session_start();

// Declaracion de variables
$servername = 'localhost';
$user = 'root';
$pass = '';
$database = 'borrame';

// Ingreso a la base de datos
$conn = new mysqli($servername, $user, $pass, $database);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Obtener el ID del producto de la URL
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Consulta para obtener la información del producto
    $sql = "SELECT * FROM inventario_varios WHERE id_product = $id_producto";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
    } else {
        die("Producto no encontrado");
    }
} else {
    die("ID del producto no proporcionado");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/details.css">
  <link rel="stylesheet" href="Css/Style.css">
  <link rel="title icon" href="Img/top.png">
</head>
<body>
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <img src="/Img/Logo.jpeg" alt="Logo" height="80" class="navbar-logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto" >
        <a class="nav-link" href="index.html" >Home</a>
        <a class="nav-link" href="/Store.php">Store</a>
        <a class="nav-link" href="about_it.html">About</a>
      </div>
      <div class="navbar-nav ml-auto" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="LogIn.html">Log In</a>
            <a class="dropdown-item" href="/php/logout.php">Log out</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-6">
        <div class="row" style="margin-top: 10%;">
            <div class="col-md-6">
                <img src="<?php echo $producto['imagen']; ?>" alt="Product Image" class="product-img">
            </div>
            <div class="col-md-6">
              <img src="Img/Brand.png" alt="" class="class-img">
                <h2><?php echo $producto['producto']; ?></h2><br>
                <p class="dt">Ref. <?php echo $producto['codigo']; ?></p>
                <p class="price">$<?php echo $producto['precio_venta']; ?></p>
                <p class="dt">Entrega en sucursal: 1 a 5 días hábiles dependiendo a la <br> disponibilidad del producto seleccionado en la tienda <br> elegida.</p><br>
                <div class="form-group">
                    <label for="quantity">Cantidad:</label>
                    <input type="number" id="quantity" class="form-control" value="1">
                </div>
                <button type="button" class="btn btn-primary buy-btn">Comprar Ahora</button>
                <button type="button" class="btn btn-secondary">Agregar al Carrito</button>
            </div> 
        </div>
    </div>

  <!-- Additional Container -->
  <div class="container mt-5 additional-info">
    <div class="row">
        <div class="col">
            <a href="Login.html"><p>Description</p></a>
        </div>
        <div class="col">
            <a href="Login.html"><p>Details</p></a>
        </div>
        <div class="col">
            <a href="Login.html"><p>Warranty</p></a>
        </div>
        <div class="col">
            <a href="Login.html"><p>Reviews</p></a>
        </div>
    </div>
</div>
<br>

  
  <p class="ttl">The <b>205/55 R16 PIRELLI CINTURATO P7 (*) 91V</b> tire is characterized by:</p>
<p>-Being an all-terrain tire that offers excellent traction and wear resistance</p>
<p>-Featuring a self-cleaning tread pattern</p>
<p>-Reducing the most intense jolts on different irregular surfaces</p>
<p>-Increased safety during cornering and braking</p>
<p>-Resistant to aquaplaning and reduced noise during driving</p>
<p>-Provides comfortable grip in any weather condition</p>
<p>-Excellent traction on any terrain, from gravel to mud</p>

  
  <div class="container mt-5">
    <h3>Recommended Products</h3><br>
    <div class="row">
      <div class="col-md-3">
        <div class="card product-card">
          
          <img src="Img/image-18.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <a href="Login.html"><h5 class="card-title">LLANTA MAXTREK</h5></a>
            <p class="card-text">$1,690</p>
            <br>
            <button type="button" class="btn btn-primary cart-btn">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          
          <img src="Img/image-19.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <a href="Login.html"><h5 class="card-title">2 LLANTAS FARROAD</h5></a>
            <p class="card-text">$2,380</p>
            <br>
            <button type="button" class="btn btn-primary cart-btn">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          
          <img src="Img/image-20.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <a href="Login.html"><h5 class="card-title">LLANTA SUMITOMO</h5></a>
            <p class="card-text">$3,350</p>
            <br>
            <button type="button" class="btn btn-primary cart-btn">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          <img src="Img/image-21.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <a href="Login.html"><h5 class="card-title">LLANTA HAIDA</h5></a>
            <p class="card-text">$1,850</p>
            <br>
            <button type="button" class="btn btn-primary cart-btn">Add to cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <footer class="bg mt-5 pt-5" style="background-color: rgba(23, 21, 21, 0.74);">
    <div class="container">
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
</body>
</html>

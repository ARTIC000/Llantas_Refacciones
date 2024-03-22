<?php
session_start();

if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 2) {
    
    header('Location: index.html'); 
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="../../Css/dashboard.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <title>Admin Dashboard</title>
    </head>
   	<body>
   		<nav class="navbar navbar-expand-md navbar-dark">
			<button class="navbar-toggler ml-auto mb-2 bg-dark" type="button" data-toggle="collapse" data-target="#myNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="myNavbar">
				<div class="container-fluid">
					<div class="row">
						<!-- sidebar -->
						<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
							<a href="#" class="navbar-brand text-white d-block  mx-auto text-center py-3 mb-4 bottom-border">Welcome</a>
							<div class="bottom-border pb-3">
								<img src="/Img/Logo.jpeg" width="50" class="rounded-circle mr-3">
								<a href="#" class="text-white"> Admin</a>
							</div>
							<ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item"><a href="../../dashboard.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
								<li class="nav-item"><a href="../../dashboard.php#inbox" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
								<li class="nav-item"><a href="/php/Productos/crud.php" class="nav-link text-white p-3 mb-2 sidebar-link current"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Sales</a></li>
								<li class="nav-item"><a href="../../dashboard.php#analytics" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Analytics</a></li>
								<li class="nav-item"><a href="../../dashboard.php#charts" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a></li>
								<li class="nav-item"><a href="../../dashboard.php#documentation" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>Documentation</a></li>
							</ul>
						</div>
						<!-- end of sidebar -->

						<!-- top nav -->
						<div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
							<div class="row align-items-center">
								<div class="col-md-4">
									<h4 class="text-light text-uppercase mb-0">Dashboard</h4>
								</div>
								<div class="col-md-5">
									<form>
										<div class="input-group">
											<input type="text" class="form-control search-input" placeholder="Search...">
											<button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
										</div>
									</form>
								</div>
								<div class="col-md-3">
									<ul class="navbar-nav">
										<li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
										<li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
										<li class="nav-item ml-md-auto"><a href="../logout.php" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end of top nav -->
					</div>
				</div>
			</div>
		</nav>

		<!-- modal-->
		<div class="modal fade" id="sign-out">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Want to leave?</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						Press logout to leave
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal">Stay here</button>
						<button type="button" class="btn btn-danger" id="logout-btn">Logout</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end of modal -->

		<!--Cards-->
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
						<div class="row pt-md-5 mt-md-3 mb-5">
							<div class="col-xl-3 col-sm-6 p-2">
								<div class="card card-common">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fas fa-shopping-cart fa-3x text-warning"></i>
											<div class="text-right text-secondary">
												<h5>Sales</h5>
												<h3>$135,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
										<i class="fas fa-sync mr-3"></i>
										<span> Updated now</span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 p-2">
								<div class="card card-common">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fas fa-money-bill-alt fa-3x text-success"></i>
											<div class="text-right text-secondary">
												<h5>Expense</h5>
												<h3>$39,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
										<i class="fas fa-sync mr-3"></i>
										<span> Updated now</span>
									</div>
								</div>	
							</div>
							<div class="col-xl-3 col-sm-6 p-2">
								<div class="card card-common">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fas fa-users fa-3x text-info"></i>
											<div class="text-right text-secondary">
												<h5>Users</h5>
												<h3>15,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
										<i class="fas fa-sync mr-3"></i>
										<span> Updated now</span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 p-2">
								<div class="card card-common">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fas fa-chart-line fa-3x text-danger"></i>
											<div class="text-right text-secondary">
												<h5>Visitors</h5>
												<h3>5,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
										<i class="fas fa-sync mr-3"></i>
										<span> Updated now</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of cards-->
        <!-- Agregar Producto -->
<div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="color: white;">
        <button onclick="mostrarFormularioAgregar()">Agregar Producto</button>
    <div id="formularioAgregar" style="display: none;">
        <h2>Registro de Producto</h2>
        <form action="guardar_producto.php" method="post">
        <label>Nombre del Producto</label>
        <input type="text" id="nombreProducto" name="producto" required><br>
        <label>Código</label>
        <input type="text" id="codigo" name="codigo" required><br>
        <label>Stock</label>
        <input type="number" id="stock" name="stock" required><br>
        <label>Unidad de Medida</label>
        <input type="text" id="unidadMedida" name="unidad_medida" required><br> 
        <label>Observaciones</label>
        <input type="text" id="observaciones" name="observaciones"><br>
        <label>Precio de Compra</label>
        <input type="number" id="precioCompra" name="precio_compra" step="0.01" required><br> 
        <label>Precio de Venta</label>
        <input type="number" id="precioVenta" name="precio_venta" step="0.01" required><br> <!-- Corregido el nombre del campo -->
        <label>Imagen (URL)</label>
        <input type="text" id="imagen" name="imagen"><br>
        <button type="submit" name="action" value="agregar">Registrar</button>
        </form>
    </div>
</div>
    <!-- Lista de Productos -->
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="color: white;">
    <h2>Lista de Productos</h2>
    <table id="productosTable" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Stock</th>
                <th>Unidad de Medida</th>
                <th>Observaciones</th>
                <th>Precio de Compra</th>
                <th>Precio de Venta</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>

    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="color: white;">
        <div id="modalEditarProducto" style="display: none;">
            <h3>Editar Producto</h3>
            <form>
                ID: <span id="editId"></span><br>
                Nombre del Producto: <input type="text" id="editNombreProducto"><br>
                Código: <input type="text" id="editCodigo"><br>
                Stock: <input type="number" id="editStock"><br>
                Unidad de Medida: <input type="text" id="editUnidadMedida"><br>
                Observaciones: <input type="text" id="editObservaciones"><br>
                Precio de Compra: <input type="number" id="editPrecioCompra" step="0.01"><br>
                Precio de Venta: <input type="number" id="editPrecioVenta" step="0.01"><br>
                Imagen (URL): <input type="text" id="editImagen"><br>
                <button type="button" onclick="guardarEdicion()">Guardar</button>
            </form>
        </div>
    </div>

    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="color: white;">
    <div id="modalEliminar" style="display: none;">
        <h3>Confirmar eliminación</h3>
        <p>¿Estás seguro de que quieres eliminar este producto?</p>
        <form id="mostrarEliminarProducto">
            <button type="button" onclick="eliminarProducto()">Eliminar</button>
        </form>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'cargar_productos.php',
                type: 'GET',
                success: function(response) {
                    $('#productosTable tbody').html(response);
                }
            });
        });

        function mostrarEditarProducto(id_product, producto, codigo, stock, unidad_medida, observaciones, precio_compra, precio_venta, imagen) {
            document.getElementById('editId').innerText = id_product;
            document.getElementById('editNombreProducto').value = producto;
            document.getElementById('editCodigo').value = codigo;
            document.getElementById('editStock').value = stock;
            document.getElementById('editUnidadMedida').value = unidad_medida;
            document.getElementById('editObservaciones').value = observaciones;
            document.getElementById('editPrecioCompra').value = precio_compra;
            document.getElementById('editPrecioVenta').value = precio_venta;
            document.getElementById('editImagen').value = imagen;
            document.getElementById('modalEditarProducto').style.display = 'block';
    }

    function guardarEdicion() {
        var id_product = document.getElementById('editId').innerText;
        var producto = document.getElementById('editNombreProducto').value;
        var codigo = document.getElementById('editCodigo').value;
        var stock = document.getElementById('editStock').value;
        var unidad_medida = document.getElementById('editUnidadMedida').value;
        var observaciones = document.getElementById('editObservaciones').value;
        var precio_compra = document.getElementById('editPrecioCompra').value;
        var precio_venta = document.getElementById('editPrecioVenta').value;
        var imagen = document.getElementById('editImagen').value;

        $.ajax({
            type: 'POST',
            url: 'update_producto.php',
            data: {
                id_product: id_product,
                producto: producto,
                codigo: codigo,
                stock: stock,
                unidad_medida: unidad_medida,
                observaciones: observaciones,
                precio_compra: precio_compra,
                precio_venta: precio_venta,
                imagen: imagen
            },
            success: function(response) {
                alert('Producto editado correctamente');
                document.getElementById('modalEditarProducto').style.display = 'none';
                actualizarListaProductos();
            }
        });
    }

    function actualizarListaProductos() {
        $.ajax({
            url: 'cargar_productos.php',
            type: 'GET',
            success: function(response) {
                $('#productosTable tbody').html(response);
            }
        });
    }

    function mostrarEliminarProducto(id_product) {
        document.getElementById('editId').innerText = id_product;
        document.getElementById('modalEliminar').style.display = 'block';
    }

    function eliminarProducto() {
        var id_product = document.getElementById('editId').innerText;
        $.ajax({
            type: 'POST',
            url: 'eliminar_producto.php',
            data: {
                id_product: id_product
            },
            success: function(response) {
                alert('Producto eliminado correctamente');
                document.getElementById('modalEliminar').style.display = 'none';
                actualizarListaProductos();
            }
        });
    }

    function mostrarFormularioAgregar() {
        var formulario = document.getElementById('formularioAgregar');
        if (formulario.style.display === 'none') {
            formulario.style.display = 'block';
        } else {
            formulario.style.display = 'none';
        }
    }
    </script>
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="color: white;">
        <div id="drop-area">Arrastra y suelta tu imagen aquí</div>
    </div>
    <style>
        #drop-area {
            margin-top: 2rem;
            border: 2px dashed #ccc;
            padding: 80px;
            cursor: pointer;
            text-align: center;
        }
    </style>
<script>
    let dropArea = document.getElementById('drop-area');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;

        handleFiles(files);
    }

    function handleFiles(files) {
        ([...files]).forEach(uploadFile);
    }

    function uploadFile(file) {
        let url = 'upload.php';
        let formData = new FormData();

        formData.append('file', file);

        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(() => {
            alert('Imagen subida correctamente');
        })
        .catch(() => {
            alert('Error al subir la imagen');
        });
    }
</script>
    		<!-- footer-->
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
						<div class="row border-top pt-3">
							<div class="col-lg-6 text-center">
								<ul class="list-inline">
									<li class="list-inline-item mr-2">
										<a href="#" class="text-dark">Universal LLantas Y suspensiones</a>
									</li>
									<li class="list-inline-item mr-2">
										<a href="#" class="text-dark">About</a>
									</li>
									<li class="list-inline-item mr-2">
										<a href="#" class="text-dark">Privacity</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  	</body>
</html>


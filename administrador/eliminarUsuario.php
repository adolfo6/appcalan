<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Zona Tic Inicio</title>



</head>

<body background="../img/fondo7.png">
<section class="container">

	<!--Inicio de menuusuario-->
	<div class="row margen">
			<div class="col-md-2 header">
				<img src="../img/logon.png" class="img" />
			</div>
			<div class="col-md-10 header">
				<!--Navegación-->
				<!--La cabecera desde aquí-->
				<div class="container-fluid">

					<header>
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html"><img src=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item"><a class="nav-link" href="solicitudes">Solicitudes</a></li>
									<li class="nav-item"><a class="nav-link" href="publicar">Validar articulo</a></li>
									<li class="nav-item"><a class="nav-link" href="historial">Historial</a></li>
								</ul>

								<!--Boton desplegable de configuración-->

								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn">
										<img src="../img/16.jpg"
											width="15%" /> Perfil
									</button>
									<div id="myDropdown" class="dropdown-content">
										<a href="perfil">Editar Perfil</a> <a href="../logout.php">Cerrar sesión</a>
									</div>
								</div>

								<script>

									function myFunction() {
										document.getElementById("myDropdown").classList.toggle("show");
									}

									window.onclick = function (event) {
										if (!event.target.matches('.dropbtn')) {
											var dropdowns = document.getElementsByClassName("dropdown-content");
											var i;
											for (i = 0; i < dropdowns.length; i++) {
												var openDropdown = dropdowns[i];
												if (openDropdown.classList.contains('show')) {
													openDropdown.classList.remove('show');
												}
											}
										}
									}
								</script>
							</div>

						</nav>
					</header>

				</div>
				<!--Fin de la Cabecera-->

			</div>
		</div>
		<!--Fin de la barra de navegación-->

		<!--Inicio Buscador-->
		<div class="row">
			<div class="col-md header4">
				<div>
					<nav class="navbar navbar-light1" style="background-color: #e3f2fd" ;>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Articulos"
								aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
						</form>
					</nav>
				</div>
			</div>
		</div>
<!--Fin de menuusuario-->


	<!--Contenido-->
		<div class="row margenadministrararticulo">
		<!--Articulos-->
		<div class="col-md-12 articulo">
			<div class="row margenadministrararticulo">
				<div class="col-md-12 subar1">
					<!--Articulo en revision-->
					

					<form action="usueliminar.php" method="POST">

						<div class="form-group">
						<h5 class="card-title" align="center">Usuario</h5>
						<label for="subir-titulo">Ingresa el número de Control del usuario a eliminar</label>
							<input type="text" class="form-control" name="numControl" id="subir-titulo" placeholder="" required>
						</div><br>

						<input type="submit" value="EliminarUsuario" class="btn btn-primary" id="btnEliminar" name="btnEliminar">
                                            
					</form>
			</div>
		</div>


	</div>

	
				<!--Footer-->
				<div class="col-md-12 pie">
					<footer>
						<h4>©Derechos Reservados 2019</h4>
						Universidad Tecnologíca del Norte de Guanajuato.
					</footer>
  
					<div class="linkUTN">
  
						<a title="UTNG" href="https://www.utng.edu.mx/">
						<img class="linkUTNG" width="15%" src="../img/linkUTNG.png" alt="UTNG" />
						</a>
  
					</div>
					<div class="linkfacebook">
  
						<a title="UTNG" href="https://es-la.facebook.com/UTNGDOLORESHIDALGO-222209577812067/">
						<img class="linkUTNG" width="8%" src="../img/logofacebook.png" alt="UTNG" />
						</a>
					  
					</div>
  
				</div>
			  <!--Fin del footer-->
  
			

		
	
</section>
<!-- Inicio de Scripts -->
<script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<!-- Fin de Scripts -->
</body>

</html>
<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Zona Tic Inicio</title>



</head>
<!-- Solo el Body -->

<body background="../img/fondo7.png">
	<section class="container">
		
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
									<button class="navbar-toggler" type="button"
										data-toggle="collapse" data-target="#navbarSupportedContent"
										aria-controls="navbarSupportedContent" aria-expanded="false"
										aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
			
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav mr-auto">
											<li class="nav-item"><a class="nav-link"
												href="agregar.php">Articulos </a></li>
										</ul>
			
										<!--Boton desplegable de configuración-->
			
										<div class="dropdown">
											<button onclick="myFunction()" class="dropbtn">
												<img src="../img/16.jpg" width="15%" /> Perfil
											</button>
											<div id="myDropdown" class="dropdown-content">
												<a href="miperfil.php">Editar Perfil</a> <a
													href="../logout.php">Cerrar sesión</a>
											</div>
										</div>
			
										<script>
				
								function myFunction() {
								  document.getElementById("myDropdown").classList.toggle("show");
								}
								
								window.onclick = function(event) {
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
			

		<!--Inicio del buscador-->
		<div class="row">
				<div class="col-md header4">
					<div>
						<nav class="navbar navbar-light1" style="background-color: #e3f2fd";>
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search"
									placeholder="Articulos" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
							</form>
						</nav>
					</div>
				</div>
		</div>
	
		<!--Fin del buscador-->
	
		<!--Editar perfil-->
		<!--Contenido-->
		<div class="row margenadministrararticulo">
		<!--Articulos-->
		<div class="col-md-12 articulo">
			<div class="row margenadministrararticulo">
				<div class="col-md-12 subar1">
					<!--Articulo en revision-->
					

					<form action="retroalimentacion.php" method="POST" >

						<?php if(isset($verificar_articulo)){
   							echo $verificar_articulo;
							}

 						?>

						<div class="form-group">
						<h5 class="card-title" align="center">Retroalimentación</h5>
						<label for="subir-titulo">Ingresa el número de retroalimentación</label>
							<input type="text" class="form-control" name="idRetro" id="subir-titulo" placeholder="" required>
						</div><br>
						<div class="form-group">
						<h5 class="card-title" align="center">Articulo a Revisar</h5>
						<label for="exampleFormControlTextarea1">Agrega el titulo para identificar el artículo</label>
							<input type="text" class="form-control" name="titulo" id="subir-resena" rows="6" required>
						</div><br>
						

						<div class="form-group">
						<h5 class="card-title" align="center">Usuario</h5>
							<label for="subir-contenido">Ingresa el número de Control del autor</label>
							<input type="text" class="form-control" name="numControl" id="subir-contenido" rows="15" required>
						</div><br>

						<div class="form-group">
						<h5 class="card-title" align="center">Fecha</h5>
							<label for="subir-contenido">Ingresa la fecha de revisión</label>
							<input type="date" class="form-control" name="fecha" id="subir-contenido" rows="15" required>
						</div><br>

                        
						<div class="form-group">
						<h5 class="card-title" align="center">Observaciones</h5>
							<label for="subir-contenido">Ingresa las observaciones para que el autor modifique</label>
							<input type="text" class="form-control" name="contenidoRetro" id="subir-contenido" rows="15" required>
						</div><br>

						

						
						<input type="submit" value="Enviar Retroalimentacion" class="btn btn-primary" id="retroButton">
                                            
					</form>
			</div>
		</div>


	</div>

	<div class="row margenadministrararticulo">
		<div class="col-md cabeza2">

			<!-- Button trigger modal -->
			<!--<button type="button" class="btn btn-primary" data-toggle="modal"
				data-target="#exampleModalLong">Vista Previa</button>-->

			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Vista previa</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="row ">
								<div class="col-md-12 prepala">

									<p class="arriba" align="center">Titulo de Artículo.</p>


								</div>

							</div>

							<div class="row">
								<!--Articulos-->
								<div class="col-md-6 preart">

									<p class="arriba" align="center">Visualización artículo.</p>

									<div class="row margenadministrararticulo">
										<div class="col-md-10 subar rreseña">
											<img src="${pageContext.request.contextPath}/resources/img/ejemplo2.png" class="d-block w-100"
												alt="Artículo no Encontrado"/>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												Phasellus imperdiet, nulla et dictum interdum, nisi lorem
												egestas vitae scelerisque enim ligula venenatis dolor. Lorem
												ipsum dolor sit amet consectetur adipisicing elit Lorem
												ipsum dolor sit amet consectetur adipisicing elit..<span
													id="dots">...</span><span id="more">Lorem ipsum
													dolor sit amet, consectetur adipiscing elit. Phasellus
													imperdiet, nulla et dictum interdum, nisi lorem egestas
													vitae scelerisque enim ligula venenatis dolor. Lorem ipsum
													dolor sit amet consectetur adipisicing elit Lorem ipsum
													dolor sit amet consectetur adipisicing elit.</span>

											</p>
											<button onclick="myFunction1()" id="myBtn">Leer más</button>

										</div>

									</div>


								</div>


								<div class="col-md-6 preart">

									<p class="arriba" align="center">Visualización reseña.</p>

									<div class="row margenadministrararticulo">
										<div class="col-md-10 subar rreseña">
											<img src="${pageContext.request.contextPath}/resources/img/ejemplo2.png" class="d-block w-100"
												alt="Artículo no Encontrado"/>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing
												elit. Phasellus imperdiet, nulla et dictum interdum, nisi
												lorem egestas vitae scelerisque enim ligula venenatis dolor.
												Lorem ipsum dolor sit amet consectetur adipisicing elit
												Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>

										</div>

									</div>


								</div>

								<nav class="maso">
									<div class="col-md-"></div>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#"
											tabindex="-1" aria-disabled="true"></a></li>
										<li class="page-item"><a class="page-link" href="#">1</a>
										</li>
										<li class="page-item active" aria-current="page"><a
											class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
										</li>
										<li class="page-item"><a class="page-link" href="#">>></a>
										</li>

									</ul>
								</nav>



							</div>

						</div>



					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary"
							data-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary">Enviar</button>
					</div>
				</div>
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
					<img class="linkUTNG" width="15%" src="${pageContext.request.contextPath}/resources/img/linkUTNG.png" alt="UTNG" />
					</a>

				</div>
				<div class="linkfacebook">

					<a title="UTNG" href="https://es-la.facebook.com/UTNGDOLORESHIDALGO-222209577812067/">
					<img class="linkUTNG" width="8%" src="${pageContext.request.contextPath}/resources/img/logofacebook.png" alt="UTNG" />
					</a>
				  
				</div>

			</div>
		  <!--Fin del footer-->

		
	
</section>

</body>

</html>
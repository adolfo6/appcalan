<?php

/*session_start();

include "includes/config.php"
include "includes/funciones.php"

if (isset($_SESSION('usuario'))) (
	header("Location: ../index.php")
)

ini_set('error_reporting' ,0);*/

?>
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

		<!--Inicio de barra de navegación-->
		<div class="row margen">
			<div class="col-md-2 header">
				<img src="../img/logon.png" class="img" />
			</div>
			<div class="col-md-10 header">
				<!--Navegación-->
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
									<li class="nav-item active"><a class="nav-link" href="/zonatic">Inicio <span
												class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="quienessomos.php">Quienes Somos</a></li>
									<li class="nav-item">
								</ul>
								<!-- Button trigger modal -->
								<div class="dropdown">
									<button style="margin-left:;" type="button" class="btn btn-primary"
										data-toggle="modal" data-target="#exampleModal">Iniciar Sesión</button>
								</div>

								<!-- Inicio de Sesión Pop Up -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Iniciar
													Sesión</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">

												<form id="formLogin">
													<input type="text" id="numControl" class="form-Control"
														placeholder="Número de control" />
													<input type="password" class="form-control" id="contrasena"
														placeholder="Contraseña" />

													<button type="Envíar" class="btn btn-primary"
														id="loginButton">Ingresar</button>
												</form>



												<a class="nav-link" href="recuperar">Recuperar
													contraseña</a>

											</div>
											<div class="registro-footer"></div>
										</div>
									</div>
								</div>
								</li>

								<button style="margin-left:" type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModalCenter">Registrarse</button>

								<!-- Registrar -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalCenterTitle">Registrarse</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Envíar">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">

												<form id="formRegistrar">
													<div class="form-group">
														<label for="correo">E-mail</label> <input type="email"
															class="form-control" id="correo"
															placeholder="nombre@ejemplo.com">
													</div>
													<div class="form-group row">
														<label for="contrasenaRegistrar"
															class="col-sm-2 col-form-label">Contraseña</label>
														<div class="col-sm-10">
															<input type="password" class="form-control"
																id="contrasenaRegistrar" placeholder="">
														</div>
													</div>
													<div class="form-group row">
														<label for="recontrasena"
															class="col-sm-2 col-form-label">Confirmar
															contraseña</label>
														<div class="col-sm-10">
															<input type="password" class="form-control"
																id="recontrasena" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label for="nombre">Nombre de
															Usuario</label> <input type="text" class="form-control"
															id="nombre" placeholder="">
													</div>
													<div class="form-group">
														<label for="apellidoPat">Apellido Paterno</label>
														<input type="text" class="form-control" id="apellidoPat"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="apellidoMat">Apellido Materno</label>
														<input type="text" class="form-control" id="apellidoMat"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="numControlRegistrar">Número de
															control</label> <input type="text" class="form-control"
															id="numControlRegistrar" placeholder="">
													</div>
													<p>Escoja algún tipo de usuario</p>
													<select class="form-control" id="idUsuario">

														<option value="1"> Usuario</option>
														<option value="2">Revisor contenido</option>
														<option value="3">Revisor estilo</option>
														<option value="4">Administrador</option>
													</select>
											</div>
											<button type="Envíar" class="btn btn-primary"
												id="RegisterButton">Registrar</button>

											</form>

										</div>
									</div>
								</div>
								</ul>
							</div>
						</nav>


					</header>

				</div>
			</div>
		</div>

		<!--Bucador-->
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
		</div><br>
		<!--Fin de Bucador-->
		<!--Fin de barra de navegación-->

		<div class="row">
			<div class="col-md-4"></div>

		</div>
		<!--Articulo-->
		<div >
			<section class="col-md-12 subar">
				<article>
					<hgroup>
						<h1 class="card-title">Tecnologías que marcan el futuro de la Seguridad Alimentaria</h1>
					</hgroup>

					<div class="media">
					<img src="../img/ci.jpg" class="mr-3" width="100" height="100"><div class="">
							<h3 class="mt-0"> Hacia un sistema sostenible de alimentación: Los desafíos de la UE en el horizonte 2030</h3>
							<p>
							El Big Data, el manejo, la gestión y análisis masivo de información para dar soporte a tecnologías o manejar información proveniente de todos los elementos de la cadena alimentaria van a marcar el futuro de la seguridad alimentaria. Una seguridad alimentaria globalizada y tecnologizada, con un consumidor hiperconectado, donde la anticipación y la prevención adquieren enteros, sin perder de vista el control. Recomendamos la lectura de tres artículos:
                            Industria 4.0: Machine learning y la visión artificial en la seguridad alimentaria

                            Por “Machine Learning” nos referimos a las máquinas que aprenden por sí solas. En AINIA estamos aplicando esta inteligencia artificial a sistemas de control de calidad y seguridad alimentaria, desde el control de placas Petri en laboratorios de análisis de alimentos, al análisis de datos para optimizar procesos productivos en la industria. En el artículo Industria 4.0: Machine learning y la visión artificial en la seguridad alimentaria damos las claves.<span id="dots">...</span><span id="more"> Nuevos métodos de control para detectar la presencia de mercurio en carnes y otros residuos veterinarios

                            En cuanto seguridad alimentaria, diferentes fuentes nacionales y europeas identifican resultados analíticos no satisfactorios con relación a medicamentos de uso veterinario, así como potenciales riesgos emergentes de presencia de mercurio en carnes y vísceras; avermectinas en músculo e hígado; y fipronil en huevos, carne y despojos.

                            Como solución, AINIALAB ha puesto a punto métodos de control que permiten la detección de estos residuos veterinarios y contaminantes en alimentos. Si quiere saber más puede hacerlo en el artículo Nuevos métodos de control para detectar la presencia de mercurio en carnes y otros residuos veterinarios.
                            Aplicación de pulsos eléctricos sobre alimentos envasados

                            La seguridad desde el punto de vista microbiológico y la calidad de los alimentos son clave para el consumidor. Por su parte, la industria requiere para ello tratamientos eficaces. En respuesta, Grupo Riberebro, Gvtarra y AINIA Centro Tecnológico han desarrollado el proyecto NOVAPACK, centrado en desarrollar nuevos materiales de envase sobre los que poder aplicar la tecnología de pulsos eléctricos a verduras y hortalizas envasadas. Si quiere conocer los avances de este proyecto con más detalle, le invitamos a leer el artículo firmado por Concha Bosch, Aplicación de pulsos eléctricos sobre alimentos envasados.  Se trata de uno de los primeros desarrollos que aborda el reto de aplicar pulsos eléctricos a envases</span>
							</p>
							<button class="btn btn-primary" onclick="myFunction1()" id="myBtn">Leer más sobre este
								articulo</button>

						</div>
					</div>

				</article>

			</section><br>
			<div class="vistasarticuloespecifico">
				<p>
					<time class="btn btn-link" datetime="visitas" m>36 visitas</time>
				</p>
			</div>


			
			
			</article>
			
			<!--Caja de comentarios-->
			<div>
			
				<form name="form1" method="post" action="">
				
				<label for="textarea"></label>
					
						<center>
						<p>
							<textarea name="comentario" cols="80" rows="4" id="textarea"></textarea>
						</p>
						<p>
							<input type="submit" <?php /*if (isset($_GET ['id'])) ?>name="reply"<?php ) else ( ?> name="comentar"<?php ) */?> value="comentar">
						</p>
						</center>	
						
				</form>

				<?php
					/*if(isset($_POST['comentar'])) (
					$query = mysqli_query("INSERT INTO comentario (contenidoCom, usuario, fecha) vaulue ('".$_POST['comentario']."', '".$_SESSION['idUsuario']."', NOW())");
					if ($query) (header("Location: articulo.php");)

					)

				?>

				<?php
					if(isset($_POST['reply'])) (
					$query = mysqli_query("INSERT INTO comentario (contenidoCom, usuario, fecha, reply) vaulue ('".$_POST['comentario']."', '".$_SESSION['idUsuario']."', NOW()) , '".$_GET['idUsuario']."' ");
					if ($query) (header("Location: articulo.php");)

					)*/

				?>

				<br>

						<div id="">
							<ul id="comments">
							<?php
							/*$comentario = mysqli_query ("SELECT * FROM comentario WHERE reply = 0 ORDER BY id DESC");
							while ($row = mysqli_fetch_array($comentario)) {

								$usuario = mysqli_query("SELECT * FROM usuario WHERE id = '".$row['usuario']."'" );
								$user = mysqli_fetch_array($usuario);

							}
							?>

								<li class="cmmnt">
									<div class="avatar">
									<img src="<?php echo $user['avatar'];?>" height="55" whitd="55" >
									
									</div>

									<div class="cmmnt-content">
										<header>
										<a href="#" class="user-link"><?php echo $user['nombre'];?></a> - <span class="pubdate"><?php echo $row['fecha'];?>
										</header>
										<p>
										<?php echo $row['contenidoCom'];?>
										</p>
										<span>
										<a href="index.php?user=<?php echo $user['usuario']; ?>&id=<?php echo $row['id'];?>">
										Responder
										</a>
										</span>
										
									</div>

									<?php
									$contar = mysqli_numrows(mysql_query("SELECT * FROM comentario WHERE reply ='".$row['id']."'"));
									if ($contar != '0') {

										$reply = mysqli_query("SELECT * FROM comentario WHERE reply ='".$row['id']."'"));
										while($rep=mysql_fetch_array($reply)) {

											zy$usuario = mysqli_query("SELECT * FROM usuario WHERE id = '".$row['usuario']."'" );
								$user = mysqli_fetch_array($usuario);
										}
									}
									*/?>

								</li>

												
							</ul>
						</div>	
			</div>


		</div>

		<div class="row margen">
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
  
			</div>
	</section>
</body>

<!-- Inicio de Scripts -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    
    
            function myFunction1() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");
    
                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Leer más";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Leer menos";
                    moreText.style.display = "inline";
                }
            }
        </script>
<!-- Fin de Scripts -->

</html>
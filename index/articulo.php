<?php include "config.php"; ?>
<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet"/>
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
						<h1 class="card-title">Tecnologías para una Economía Circular</h1>
					</hgroup>

					<div class="media">
					<img src="../img/globo.jpg" class="mr-3" width="100" height="100"><div class="">
							<h3 class="mt-0"> Hacia un sistema sostenible de alimentación: Los desafíos de la UE en el horizonte 2030</h3>
							<p>
							El documento FOOD 2030 de la Comisión Europea reveló hacia dónde se ha de orientar la investigación y el desarrollo tecnológico en alimentación en la UE. Un documento que incide en 4 áreas principalmente: innovación, nutrición sostenible y saludable, actuación frente el cambio climático y sostenibilidad medioambiental y circularidad y eficiencia en el uso de recursos.

En el artículo Hacia un sistema sostenible de alimentación: Los desafíos de la UE en el horizonte 2030, analizamos este documento y extraemos las conclusiones más significativas de interés para los profesionales de I+D+i de la industria alimentaria. Nuestra recomendación es que sea un artículo de consulta obligada para directores de I+D, responsables de las áreas de innovación y marketing y CEOs.
La economía circular del agua: 4 líneas de trabajo

El desafío medioambiental será clave en sectores de gran consumo como el agroalimentario, cosmético… La competitividad de estas industrias dependerá en buena medida de su capacidad para hacer frente a la demanda creciente de insumos (agua, electricidad, materias primas…) en entornos de escasez. El uso eficiente del agua es uno de los temas que marcan la agenda y el futuro.

En este artículo, “Hacia la economía circular del agua: 4 líneas de trabajo”,  exponemos cuatro líneas de trabajo en cuanto soluciones circulares, así como las principales innovaciones tecnológicas en reducción, reciclado y reutilización del agua, como solución hacia una Economía Circular.  Nuestra recomendación es que directores y técnicos de gestión medioambiental en las empresas, directores de producción, así como responsables de líneas de Responsabilidad Social Corporativa y Desarrollo Sostenible, sean conocedores de este amplio potencial de soluciones tecnológicas ya disponibles, con ejemplos de actuación de empresas referentes en estos campos.<span id="dots">...</span><span id="more"> Bioplásticos: ¿Es posible un envase barrera 100% biodegradable para alimentos?

La innovación en el packaging, su diseño y los materiales empleados es clave para avanzar hacia un sistema sostenible. En este sentido, el Proyecto REFUCOAT, en el cual AINIA Centro Tecnológico participa como socio, tiene por objetivo ofrecer un envase barrera 100% biodegradable y que mejore la vida útil de los alimentos.

En el artículo Bioplásticos: ¿Es posible un envase barrera 100% biodegradable para alimentos? avanzamos las conclusiones de este proyecto en materia de envases biodegradables para alargar la vida útil de los alimentos. El proyecto parte de un concepto de filosofía de Economía Circular. Recomendable la lectura para directores de I+D, Calidad, Marketing y Producción, así como para la importante industria auxiliar de materiales y envases.
Tecnologías químicas: hacia la economía circular

La industria química, tan presente en cualquier aspecto de nuestras vidas, está viviendo cambios sin precedentes. Para lograr una química verde y sostenible es clave la apuesta por la innovación como estrategia para mejorar la competitividad. ^

Para ello, nuestro director de I+D propone tres líneas de trabajo: Procesos de extracción limpios y sostenibles,  tecnología COASC para el tratamiento de lodos de EDARs y las biorrefinerías como sistema de transformación hacia una Economía Circular.</span>
							</p>
							<button class="btn btn-primary" onclick="myFunction1()" id="myBtn">Leer más sobre este
								articulo</button>

						</div>
					</div>

				</article>

			</section><br>
			

			
			
			</article>
			
			<!--Caja de comentarios-->
			<div>
                
                <center>Sólo puedes comentar si estás registrado como tipo USUARIO</center><br>
                
                <form action="" method="post" >
                <input type="text" name="correo" placeholder="Tu correo" class="comentarios"><br>
                <textarea name="comentario" placeholder="Haz un comentario" cols="80" rows="4" id="textarea" class="comentarios"></textarea><br>
                <center><input type="submit" name="enviar" placeholder="Enviar comentario" class="btn btn-primary"></center><br>
                </form>
                
                <?php
                    $consulta1 = mysqli_query($conexion, "SELECT comentario.correo,comentario.comentario,comentario.fecha FROM comentario
                                                            INNER JOIN usuario
                                                            ON comentario.correo = usuario.correo
                                                            WHERE idUsuario = 1") or die(mysqli_error($conexion));
                    while($row = mysqli_fetch_assoc($consulta1)){
                        echo "<div class='comentarios'>Usuario: ".$row['correo']."<br>
                        ".$row['comentario']."<br><br>

                        </div>";

                    }

                    ?>	
                
                <?php
        if(isset($_POST['enviar'])){
            $correo = utf8_decode(mysqli_real_escape_string($conexion,$_POST['correo']));
            $comentario = utf8_decode(mysqli_real_escape_string($conexion,$_POST['comentario']));
            if($correo == '' or $comentario == ''){
                echo "Lo sentimos, no se pueden dejar campos sin llenar";
            }else{
                $insertar = mysqli_query($conexion, "INSERT INTO comentario(correo,comentario,fecha) VALUES ('".$correo."', '".$comentario."',NOW())") or die (mysqli_error($conexion));
            }
        }
        ?>

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
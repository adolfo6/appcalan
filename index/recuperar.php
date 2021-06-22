<!DOCTYPE html>
<?php
include("conexion.php");
$con=conectar();
?>

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
							<button class="navbar-toggler" type="button"
								data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
	
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active"><a class="nav-link"
										href="/zonatic">Inicio <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item"><a class="nav-link"
										href="quienessomos.php">Quienes Somos</a></li>
									<li class="nav-item">
								</ul>
								<!-- Button trigger modal -->
								<div class="dropdown">
									<button style="margin-left:;" type="button"
										class="btn btn-primary" data-toggle="modal"
										data-target="#exampleModal">Iniciar Sesión</button>
								</div>
	
								<!-- Inicio de Sesión Pop Up -->
								<div class="modal fade" id="exampleModal" tabindex="-1"
									role="dialog" aria-labelledby="exampleModalLabel"
									aria-hidden="true">
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
													<input type="text" id="numControl" class="form-Control" placeholder="Número de control"/>
													<input type="password" class="form-control" id="contrasena" placeholder="Contraseña"/>
													
													<button type="Envíar" class="btn btn-primary" id="loginButton">Ingresar</button>
												</form>
	
	
	
												<a class="nav-link" href="recuperar">Recuperar
													contraseña</a>
	
											</div>
											<div class="registro-footer"></div>
										</div>
									</div>
								</div>
								</li>
	
								<button style="margin-left:" type="button"
									class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModalCenter">Registrarse</button>
	
								<!-- Registrar -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1"
									role="dialog" aria-labelledby="exampleModalCenterTitle"
									aria-hidden="true">
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
																<label for="correo">E-mail</label> <input type="email" class="form-control" id="correo"
																	placeholder="nombre@ejemplo.com">
															</div>
															<div class="form-group row">
																<label for="contrasenaRegistrar" class="col-sm-2 col-form-label">Contraseña</label>
																<div class="col-sm-10">
																	<input type="password" class="form-control" id="contrasenaRegistrar" placeholder="">
																</div>
															</div>
															<div class="form-group row">
																<label for="recontrasena" class="col-sm-2 col-form-label">Confirmar
																	contraseña</label>
																<div class="col-sm-10">
																	<input type="password" class="form-control" id="recontrasena" placeholder="">
																</div>
															</div>
															<div class="form-group">
																<label for="nombre">Nombre de
																	Usuario</label> <input type="text" class="form-control" id="nombre" placeholder="">
															</div>
															<div class="form-group">
																<label for="apellidoPat">Apellido Paterno</label>
																<input type="text" class="form-control" id="apellidoPat" placeholder="">
															</div>
															<div class="form-group">
																<label for="apellidoMat">Apellido Materno</label>
																<input type="text" class="form-control" id="apellidoMat" placeholder="">
															</div>
															<div class="form-group">
																<label for="numControlRegistrar">Número de
																	control</label> <input type="text" class="form-control" id="numControlRegistrar"
																	placeholder="">
															</div>
															<p>Escoja algún tipo de usuario</p>
															<select class="form-control" id="idUsuario">
										
																<option value="1"> Usuario</option>
																<option value="2">Revisor contenido</option>
																<option value="3">Revisor estilo</option>
																<option value="4">Administrador</option>
															</select>
														</div>
															<button type="Envíar" class="btn btn-primary" id="RegisterButton">Registrar</button>
	
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
		<!--Fin de barra de navegación-->
		
		<div class="row">
			<div class="col-md-4"></div>
	
		</div>
	
	
		<!--Inicio del buscador-->
	
	
		<!--Fin del buscador-->
	
		<!--Editar perfil-->
		<!--Editar perfil-->
	<div class="perfil">
			<p>
			<h2>Recuperar contraseña</h2>
			</p>
			<br>
		<form method="post">
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="email" placeholder="Ingresa tu correo" class="form-control"  name="customer_email" required />
								</div>
								
							</div>
				            <?php
			if (isset($_POST['send'])){
				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
                
                
				/*Configuracion de variables para enviar el correo*/
				$mail_username="zonatic9@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="appzonatic99";//Tu contraseña de gmail
				$mail_addAddress=$_POST['customer_email'];;//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
                /*Obtener la contraseña del usuario en la Base de Datos*/
                
                
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['customer_email'];
				$mail_subject="Recuperar Contraseña";
                
                $sql = "SELECT * FROM usuario where correo='$mail_setFromEmail'";
                $ejecuta_sentencia = mysqli_query($con,$sql);
                $datos = mysqli_fetch_array($ejecuta_sentencia);
                
				$txt_message=$datos['contrasena'];
				
               sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
			}
        
		?>
    </div>
    <div class="Recuperarlacontraseña col-md-12">
		<div class="contact-check">
			
		</div>
        <div class="contact-enviar">
		  <input type="submit" value="Enviar mensaje" class="btn btn-primary"  name="send">
		</div>
		<div class="clear"> </div>
        </div>	
						</form>
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
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!-- Fin de Scripts -->

</html>
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
		<!--Inicio de la barra de navegación-->
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
									<li class="nav-item"><a class="nav-link" href="solicitudes.php">Solicitudes</a></li>
									<li class="nav-item"><a class="nav-link" href="publicar.php">Validar articulo</a></li>
									<li class="nav-item"><a class="nav-link" href="historial.php">Historial</a></li>
								</ul>

								<!--Boton desplegable de configuración-->

								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn">
										<img src="../img/16.jpg"
											width="15%" /> Perfil
									</button>
									<div id="myDropdown" class="dropdown-content">
										<a href="perfil.php">Editar Perfil</a> <a href="../logout.php">Cerrar sesión</a>
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
		<!--Fin Buscador-->

		<!--Contenido-->
		<div class="row margen">
			<!--Articulos-->
			<div class="col-md-12 aceptar">
				<div class="row ">
					<div class="col-md-12 historial">
						
					
		
			
		
        <center>
                <table>
                    <thead>
                        <tr>        
                        <th>Artículos</th>
                        </tr>

                    </thead>
                            <tbody>
                                <tr>

                                <td>Titulo</td>
                                <td>Categoria</td>
                                <td>Estado</td>
								<td>Imagen</td>	
                                <td>Reseña</td>
                                <td>Articulo</td>
                                <td>Palabra uno</td>
                                <td>Palabra dos</td>
                                <td>Palabra tres</td>
                                <td>Palabra cuatro</td>
                                <td>Palabra cinco</td>

                                </tr>

                    <?php
                    $server = "databaseic.mysql.database.azure.com";
                    $usuario ="tacodorado@databaseic";
                    $contraseña = "taco.123";
                    $bd = "zona_tic";
     
                    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

                    $query="SELECT * from articulo";
                    $resultados= $conexion->query($query);
                    while($row=$resultados->fetch_assoc()){


                    ?>

                <tr> 

                    <td> <?php echo $row['titulo']; ?> </td>
                    <td> <?php echo $row['idCategoria']; ?> </td>
                    <td> <?php echo $row['idEstado']; ?> </td>
                    <td> <?php echo $row['imagen']; ?> </td>
                    <td> <?php echo $row['resena']; ?> </td>
                    <td> <?php echo $row['contenidoArt']; ?> </td>
                    <td> <?php echo $row['palabraClaveu']; ?> </td>
                    <td> <?php echo $row['palabraClaved']; ?> </td>
                    <td> <?php echo $row['palabraClavet']; ?> </td>
                    <td> <?php echo $row['palabraClavec']; ?> </td>
                    <td> <?php echo $row['palabraClaveci']; ?> </td>    

                    
                    <td> <a href="eliminar.php?titulo=<?php echo $row['titulo']; ?>">Eliminar </a>  </td>
                   




                </tr>

                <?php
                   }

                ?>


              

                </tbody>


             </table>
        </center>

        </div>
				</div>
			</div>

    </body>

    
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

</html>
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
						<a class="navbar-brand" href="../index.html"><img src=""></a>
						<button class="navbar-toggler" type="button"
							data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false"
							aria-label="Toggle navigation"> 
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active"><a class="nav-link"
									href="#">Articulos en general<span
										class="sr-only">(current)</span></a></li>
								<li class="nav-item"><a class="nav-link"
									href="nosotros.php">Quienes Somos</a></li>
								<li class="nav-item"><a class="nav-link"
									href="misarticulos.php">Administrar
										articulo</a></li>
							</ul>

							<!--Boton desplegable de configuración-->

							<div class="dropdown">
								<button onclick="myFunction()" class="dropbtn">
									<img src="../img/16.jpg" width="15%" /> Perfil
								</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="datosperfil.php">Editar Perfil</a> <a
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
<!--Fin de menuusuario-->
	<!--Editar perfil-->
	<div class="perfil">
<body> 
        <center>
                <table>
                    <thead>
                        <tr>        
                        <th>Mi perfil</th>
                        </tr>

                    </thead>
                            <tbody>
                                <tr>

                                <td>Número de control</td>
                                <td>Correo</td>
                            
                                <td>Nombre</td>
                                <td>Apellido Paterno</td>
                                <td>Apellido Materno</td>
                                <td>Contraseña</td>

                                </tr>

                    <?php
                    $server = "databaseic.mysql.database.azure.com";
                    $usuario ="tacodorado@databaseic";
                    $contraseña = "taco.123";
                    $bd = "zona_tic";
     
                    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

                    $query="SELECT * from usuario";
                    $resultados= $conexion->query($query);
                    while($row=$resultados->fetch_assoc()){


                    ?>

                <tr> 

                    <td> <?php echo $row['numControl']; ?> </td>
                    <td> <?php echo $row['correo']; ?> </td>
                    <td> <?php echo $row['nombre']; ?> </td>
                    <td> <?php echo $row['apellidoPat']; ?> </td>
                    <td> <?php echo $row['apellidoMat']; ?> </td>
                    <td> <?php echo $row['contrasena']; ?> </td>   

                    <td> <a href="editarperfil.php?numControl=<?php echo $row['numControl']; ?>">Modificar </a>  </td>




                </tr>

                <?php
                   }

                ?>


              

                </tbody>


             </table>
        </center>

    </body>
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


    </div>
    <!--Fin del footer-->
                </div>
</section>
</html>
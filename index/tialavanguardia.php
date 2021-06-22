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
                <div class="col-md-4">
                    
                </div>
    
            </div>
            <!--Header 2--> 
            <div class="row header8">
                <div class="col-md-4 header8">
                    <div class="listaarticulos">
                        <h2>Lista de Artículos</h2>
                    </div> 
                </div>
                <div class="col-md-4 header8">
                        <nav class="navbar navbar-expand-lg" style= "background-color: #e3f2fd">
                                
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="conocimientosgenerales.php">Conocimientos generales TI</a>
                                        <a class="dropdown-item " href="conocimentosespecializados.php">Conocimientos especializados</a>
                                        <a class="dropdown-item active" href="tialavanguardia.php">TI a la vanguardia</a>
                                        <a class="dropdown-item " href="noticiasyeventos.php">Noticias y eventos TIC</a>
                                      </div>
                                    </li>
                                    
                                  
                                  
                              </nav>
                    </div>
                    <div class="col-md-4 header8">
                            <nav class="navbar navbar-light1"  style="background-color: #e3f2fd">
                                </ul>
                                <form class="my-1 my-lg-0">
                                    <input class=" mr-sm-1" type="search" placeholder="Articulos"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </nav>
                                
                        </div>
            </div>
            <div class="row">
                <div class="col-md header2">
                    <h2 class="colorcategorias">TI a la vanguardia</h2>
    
                </div>
    
            </div>
    
             
            <!--Contenido-->
            <div class="row margen">
                    
                <!--Articulos-->
                <div class="col-md-6 articulo">
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/mujer.jpg" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/robot.jpg" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/telefono.jpg" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
    
                <div class="col-md-6 articulo">
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/todo123.jpg" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/vanguardia.png" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="row margen">
                        <div class="col-md-11 subar">
                            <div class="card1" style="width: auto; height: auto;">
                                <img src="../img/virtual.jpg" width="auto" height="170"
                                class="card-img-top" alt="No se pudo Encontrar el Artículo"/>
                                <div class="card-body">
                                    <h5 class="card-title">Artículo</h5>
                                    <p class="card-text">Aquí va un resumen breve del artículo.</p>
    
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href=""><button class="enlacearticulo" type="submit">Ir
                                                    a</button></a>
                                        </li>
                                    </ul>
    
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                    
                <nav class="mas">
				<div class="col-md-4"></div>
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="#"
						tabindex="-1" aria-disabled="true">Anterior</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item active" aria-current="page"><a
						class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					</li>
					<li class="page-item"><a class="page-link" href="#"
						tabindex="1" aria-disabled="true">Siguiente</a></li>

				</ul>
			</nav>
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
<!-- Fin de Scripts -->

</html>
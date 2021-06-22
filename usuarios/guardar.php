<?php

    require 'conexion.php';


    $titulo = $_POST['titulo'];
    $idCategoria = $_POST['idCategoria'];
    $idEstado = $_POST['idEstado'];
    $resena = $_POST['resena'];
    $contenidoArt = $_POST['contenidoArt'];
    $palabraClaveu = $_POST['palabraClaveu'];
    $palabraClaved = $_POST['palabraClaved'];
    $palabraClavet = $_POST['palabraClavet'];
    $palabraClavec = $_POST['palabraClavec'];
    $palabraClaveci = $_POST['palabraClaveci'];


        $ruta="../img";
    $imagen = $_FILES['imagen']['name'];//obtiene el nombre
    $archivo= $_FILES['imagen']['tmp_name'];//contiene el archivo



    $ruta=$ruta."/".$imagen;

    move_uploaded_file($archivo, $ruta);


    $insertar = "INSERT into articulo values('$titulo', '$idCategoria', '$idEstado', '$ruta', '$resena', '$contenidoArt', '$palabraClaveu', '$palabraClaved', '$palabraClavet', '$palabraClavec', '$palabraClaveci')";
    $query = mysqli_query($conectar, $insertar);

   if($query) {

    echo "<script> alert('Datos insertados correctamente');
    location.href= 'subirarticulo.php';  
    </script>";
    

   }else{
    echo "<script> alert('Hubo un error al insertar los datos');
    
    </script>";


   }
    


?>
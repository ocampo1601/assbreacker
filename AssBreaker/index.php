<?php 

/*ob_start();
session_start();
require_once("Configurations/conexion.php");

DATABASE::connect();


if (isset($_GET['controller']) && isset($_GET['action'])) {
	
	$nombre_controlador = $_GET['controller'] . "Controller";
	$accion = $_GET['action'];

	if (class_exists($nombre_controlador)) {
		
		$controlador = new $nombre_controlador();

		if (method_exists($controlador, $accion)) {
			
			$controlador->$accion();
		}
		else{
			header("location: index.php?controller=Works&action=ultimos_trabajos");
		}

	}
	else{
		header("location: index.php?controller=Works&action=ultimos_trabajos");
	}

}
else{
	header("location: index.php?controller=Works&action=ultimos_trabajos");

}

require_once("Views/Layout/footer.php");*/

 ?>

<!DOCTYPE html>
<html>
<head>

	<title>AssBreaker</title>
	<meta charset="utf-8">
 	<link rel="icon" type="image/png" href="Assets/Images/menu-icono.jpg">
 	<link rel="stylesheet" type="text/css" href="Assets/styles.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 	<link href="https://fonts.googleapis.com/css?family=Quicksand:500&display=swap" rel="stylesheet">

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body id="body">
  
<!------------------------------------------------Menu------------------------------------------------>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php?controller=Works&action=ultimos_trabajos"><span style="align-items: center; color: white;"><img src="http://clipart-library.com/images/dc4ojKpxi.png" alt="Icono" style="width: 22%; margin-right: 3%;">AssBreaker</span></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Works&action=trabajos">Trabajos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Documents&action=documentos">Documentos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Videos&action=videos">Videos</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Agregar</a>
        <div class="dropdown-menu">
          <a class="nav-link dropdown-item" href="#" data-toggle="modal" data-target="#addTrabajoModal">Trabajo</a>
          <a class="nav-link dropdown-item" href="#" data-toggle="modal" data-target="#addDocumentoModal">Documento</a>
          <a class="nav-link dropdown-item" href="#" data-toggle="modal" data-target="#addVideoModal">Video</a>
          <a class="nav-link dropdown-item" href="#" data-toggle="modal" data-target="#addGradoModal">Grado</a>
        </div>
      </li>

    </ul>

    <form action="index.php" class="form-inline" method="GET" accept-charset="utf-8">	

      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search" name="txt_buscar" required>

      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>

    </form>

    <a href="#" title="Iniciar sesión" data-toggle="modal" data-target="#loginModal"><img src="Assets/Images/user.png" alt="Iniciar sesión" id="img-iniciar-sesion-menu"></a>

  </div>
</nav>




<div id="rsociales">

        

    
    <a href="https://www.facebook.com/censamedellin" title="Síguenos en Facebook" target="_blank">
    	
        <div class="botones_rsociales boton_facebook">
        	<img src="Assets/Images/facebook.png" alt="Síguenos en Facebook" class="hvr-shrink">
        </div>
        
    </a>
    

    
    <a href="https://twitter.com/Censamedellin" title="Síguenos en Twitter" target="_blank">
    
    	<div class="botones_rsociales boton_twitter">
        	<img src="Assets/Images/twiter.png" alt="Síguenos en Twitter" class="hvr-shrink">
        </div>
        
    </a>
    

    
    <a href="https://www.instagram.com/censamedellin/" title="Síguenos en Instagram" target="_blank">
    	
        <div class="botones_rsociales boton_instagram">
        	<img src="Assets/Images/instagram.png" alt="Síguenos en Instagram" class="hvr-shrink">
        </div>
        
    </a>
    

    
    <a href="https://www.youtube.com/channel/UCWiGAyfXveGe-zi7vcPkYvA" title="Síguenos en el canal de Youtube" target="_blank">
    	
        <div class="botones_rsociales boton_youtube">
        	<img src="Assets/Images/youtube.png" alt="Síguenos en el canal de Youtube" class="hvr-shrink">
        </div>
        
    </a>

    <a href="https://www.youtube.com/channel/UCWiGAyfXveGe-zi7vcPkYvA" title="Síguenos en el canal de Youtube" target="_blank">
    	
        <div class="botones_rsociales boton_youtube">
        	<img src="Assets/Images/tumblr.png" alt="Síguenos en el canal de Youtube" class="hvr-shrink" id="tumblr">
        </div>
        
    </a>

    </div>

  </body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>

  <footer>
  	<center><b><i>Created by AssBreaker developers &copy 2019</i></b></center>
  </footer><br>
<?php
	error_reporting(0);
	
	require('../../config/db.php');
	session_start();
	
	$q = $_GET["q"];
	$id = $_GET["id"];
	$n = $_GET["n"];
	$ncoded = htmlspecialchars(urlencode($n));
	
	if ($_SESSION["loggedin"] == false) {
		header("Location: ../");
	}
	
	if ($q == "success") {
		$message = '<div class="alert alert-success" role="alert">Se ha encontrado registrado a "' . $id . '" con el ID ' . $n . '. Haga <a href="../modificaciones/modificar/?id=' . $_GET["n"] . '">click aquí</a> para modificarlo.</div>';
	} elseif ($q == "error") {
		$message = '<div class="alert alert-warning" role="alert">No se ha encontrado a ningun registrado con el ID ingresado.</div>';
	} else {
		$message = "";
	}
	
?>

<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="https://poloclient.net/img/header/logo_new.png">
      <title>Cargas - Sistema de administración</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
   </head>
   
   <body>
      <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Administración</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="../">Inicio</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="../cargas/">Cargas</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="../buscador/">Buscador <span class="sr-only">(seleccionado)</span></a>
                  </li>
				  <li class="nav-item active">
                     <a class="nav-link" href="../modificaciones/">Modificaciones</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <main role="main" class="container">
	  
	  <?php echo $message; ?>
	  
         <h1 class="mt-5">Búsqueda de usuarios</h1>
         <p class="lead">Ingrese el dato pedido para comenzar la búsqueda del usuario.</p>
		 
      	 <form action="post/busqueda.php" method="post" class="form-signin">
			 <label for="identificador" class="sr-only">ID generado</label>
			 <input type="text" name="identificador" id="identificador" class="form-control" placeholder="ID generado" required autofocus>
			 <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
		 </form>
	  </main>
	  
	  
	  
      <footer class="footer">
         <div class="container">
            <span class="text-muted">2021 - Sistema de administración</span>
         </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	  
   </body>
</html>
<?php
	error_reporting(0);
	
	$q = $_GET["q"];
	$id = $_GET["id"];

	require('../../config/db.php');
	require('post/carga.php');
	
	session_start();
	
	if ($_SESSION["loggedin"] == false) {
		header("Location: ../");
	}
	
	if ($q == "success") {
		$message = '<div class="alert alert-success" role="alert">Los datos se han cargado con éxito con el ID ' . $id . '</div>';
	} elseif ($q == "error") {
		$message = '<div class="alert alert-warning" role="alert">Los datos no han sido cargados debido a un problema./div>';
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
                  <li class="nav-item">
                     <a class="nav-link" href="#">Cargas <span class="sr-only">(seleccionado)</span></a>
                  </li>
				  <li class="nav-item active">
                     <a class="nav-link" href="../buscador/">Buscador</a>
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
	  
         <h1 class="mt-5">Carga y alta de usuarios</h1>
         <p class="lead">Ingrese los datos necesarios para dar de alta a un nuevo usuario al sistema.</p>
		 
      	 <form action="post/carga.php" method="post" class="form-signin">
			 <label for="inputEmail" class="sr-only">Nombre (o identificador)</label>
			 <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Nombre (o identificador)" required autofocus>
			 
			 <label for="inputPassword" class="sr-only">Contraseña (o ID de usuario)</label>
			 <input type="text" name="password" id="inputPassword" class="form-control" placeholder="Contraseña (o ID de usuario)" required>
			 
			 <label for="data" class="sr-only">Comentarios</label>
			 <input type="text" name="data" id="inputPassword" class="form-control" placeholder="Comentarios" required>
			 
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
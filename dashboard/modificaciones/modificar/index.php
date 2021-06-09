<?php

	error_reporting(0);
	$q = $_GET["q"];
	
	require('post/config/db.php');
	require('post/carga.php');
	
	session_start();
	
	if ($_SESSION["loggedin"] == false) {
		header("Location: ../");
	}
	
	$getID = $_GET['id'];
	$queryID = "SELECT * FROM `licencias` WHERE `id` = '$getID'";
    $resultID = mysqli_query($conn, $queryID);
	
    if (mysqli_num_rows($resultID) == 1) {
		$rowID = mysqli_fetch_assoc($resultID); 
		
		$nombre = $rowID["nombre"];
		$password = $rowID["password"];
		$data = $rowID["comentarios"];
		
	} else {
		header("Location: /?q=error");
	}
	
	if ($q == "success") {
		$message = '<div class="alert alert-success" role="alert">La consulta se ha hecho con éxito.</div>';
	} elseif ($q == "error") {
		$message = '<div class="alert alert-warning" role="alert">Se ha producido un error.</div>';
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
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
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
                     <a class="nav-link" href="../../cargas/">Cargas </a>
                  </li>
				  <li class="nav-item active">
                     <a class="nav-link" href="../../buscador/">Buscador</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="#">Modificaciones <span class="sr-only">(seleccionado)</span></a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <main role="main" class="container">
	  
		<?php echo $message; ?>
	  
         <h1 class="mt-5">Modificación del usuario "<?php echo $nombre; ?>":</h1>
         <p class="lead">Los datos completos del usuario seleccionado son:</p>
		 <p>Nombre (o identificador): <code><?php echo $nombre; ?></code></p>
		 <p>Contraseña (o ID de usuario): <code><?php echo $password; ?></code></p>
		 <p>Comentarios: <code><?php echo $data; ?></code> </p>
		 
		 <p class="lead">Ingrese los datos necesarios para modificar el usuario seleccionado:</p>
		 
      	 <form action="post/carga.php" method="post" class="form-signin">
		 	 <label for="postID" class="sr-only">ID</label>
			 <input type="text" name="postID" id="postID" class="form-control" placeholder="ID" value="<?php echo $getID; ?>">
			 
		 
			 <label for="inputEmail" class="sr-only">Nombre (o identificador)</label>
			 <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Nombre (o identificador)" value="<?php echo $nombre; ?>" required autofocus>
			 
			 <label for="inputEmail" class="sr-only">Contraseña (o ID de usuario)</label>
			 <input type="text" name="password" id="inputPassword" class="form-control" placeholder="Contraseña (o ID de usuario)" value="<?php echo $password; ?>" required>
			 
			 <label for="data" class="sr-only">Comentarios</label>
			 <input type="text" name="data" id="inputComentario" class="form-control" placeholder="Comentarios" value="<?php echo $data; ?>" required>
			 
			 <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
		 </form>
		 
		  <form action="../../modificaciones/" method="post" class="form-signin">
			 <button class="btn btn-lg btn-primary btn-block" type="submit">Volver</button>
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
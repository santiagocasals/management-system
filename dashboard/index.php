<?php
	require('../config/db.php');
	
	session_start();
	
	if ($_SESSION["loggedin"] == false) {
		header("Location: ../");
	}
?>

<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="https://poloclient.net/img/header/logo_new.png">
      <title>Dashboard - Sistema de administración</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/sticky-footer-navbar.css" rel="stylesheet">
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
                  <li class="nav-item">
                     <a class="nav-link" href="#">Inicio <span class="sr-only">(seleccionado)</span></a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="cargas/">Cargas</a>
                  </li>
				  <li class="nav-item active">
                     <a class="nav-link" href="buscador/">Buscador</a>
                  </li>
				  <li class="nav-item active">
                     <a class="nav-link" href="modificaciones/">Modificaciones</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <main role="main" class="container">
         <h1 class="mt-5">Bienvenido <?php echo $_SESSION["username"]; ?> al sistema de administración.</h1>
         <p class="lead">Al día de la fecha se encuentran dados de altas <code>20 usuarios</code> en el sistema.</p>
		 <p>Para poder realizar alguna carga o modificación de un usuario, ingrese al panel de cargas haciendo <a href="../post/logout.php">click aquí</a><p>
		 <p>Para poder realizar una consulta de usuario, ingrese al panel de búsqueda haciendo <a href="../post/logout.php">click aquí</a></p>
		 <p>Para poder realizar la facturación de un usuario, ingrese al panel de facturación haciendo <a href="../post/logout.php">click aquí</a></p>
		 <p>Si desea retirarse de la página haga <a href="../post/logout.php">click aquí</a> y será redirigido seguramente.</p>
      </main>
	  
      <footer class="footer">
         <div class="container">
            <span class="text-muted">2021 - Sistema de administración</span>
         </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	  
   </body>
</html>
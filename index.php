<?php
error_reporting(0);
   require('config/db.php');
   
   $q = $_GET["q"];
   if ($q == "error") {
	$message = '<div class="alert alert-warning" role="alert">Tu usuario o contraseña no son válidos para ingresar al sistema.</div>';
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
      <title>Login - Sistema de administración</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/signin.css" rel="stylesheet">
   </head>
   <body class="text-center">
      <form action="post/login.php" method="post" class="form-signin">
	  <?php echo $message; ?>
         <img class="mb-4" src="https://poloclient.net/img/header/logo_new.png" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal">Sistema de administración</h1>
         <label for="inputEmail" class="sr-only">Usuario</label>
         <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
         <label for="inputPassword" class="sr-only">Contraseña</label>
         <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
         <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      </form>
   </body>
</html>
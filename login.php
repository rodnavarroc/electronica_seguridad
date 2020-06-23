<!DOCTYPE html>
<html>
<head>
	<title>DR Electrónica</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Encode+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/94f47f52fa.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light" style="font-family: Open Sans;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">DR Electrónica &nbsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="shop.php"><i class="fas fa-store"></i>&nbsp;Productos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-cog"></i>&nbsp;Servicios</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-phone-alt"></i>&nbsp;Contacto</a>
          </li>
        </ul>
        <div class="d-none d-sm-block">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php" style="font-size: 20px;"><i class="far fa-user-circle"></i>&nbsp;</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cart.php" style="font-size: 20px;"><i class="fas fa-shopping-cart"></i>&nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="navbarx d-block d-sm-none" id="myNavbar">
  <a class="nav-link" href="login.php" style="color: #212529; float: left; font-size: 24px;"><i class="far fa-user-circle"></i>&nbsp;</a>
  <a class="nav-link" href="cart.php" style="color: #212529; float: right; font-size: 24px;"><i class="fas fa-shopping-cart"></i>&nbsp;</a>
  </div> 

  <!-- Page Content -->
  <div class="container" style="padding-top: 14%;">
  	<div class="row bg-white">
  		<div class="col-12 col-md-6 p-5 text-light" style="background-color: #0c996a;">
  			<center>
  				<h3 class="card-title">¡Bienvenido a DR Electrónica!</h3><hr><br>
  				<p class="text-light" style="font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</p>

  				<p class="text-light" style="font-size: 14px; text-align: justify;">Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  				<br><label><small>¿No tienes una cuenta?</small></label>
  				<br><a href="registro.php" class="btn btn-outline-light btn-lg">Registrarse&nbsp;<i class="fas fa-check-circle"></i></a>
  				<br><label><small>¡Es gratis!</small></label>
  			</center>
  		</div>
  		<div class="col-12 col-md-6 p-5">
  			<form>
  			  <center><h3 class="card-title">Iniciar Sesión</h3></center><hr><br>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo electrónico</label>
			    <input type="email" class="form-control" placeholder="alguien@ejemplo.com">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control">
			  </div><br>
			  <center><button type="submit" class="btn btn-outline-success btn-lg">Ingresar&nbsp;<i class="fas fa-angle-right"></i></button></center>
			</form>
  		</div>
  	</div>
  	<br><br>
  </div>

  <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
<style type="text/css">

.carousel-item {
  height: 100%;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.navbarx {
  background-color: #f2f2f2;
  z-index: 99;
  overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 100%;
}

/* Style the links inside the navigation bar */
.navbarx a {
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 3% 5%;
  text-decoration: none;
  font-size: 17px;
}

</style>
</html>
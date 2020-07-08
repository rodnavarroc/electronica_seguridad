<!DOCTYPE html>
<html>
<head>
	<title>DR Electrónica</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Encode+Sans&family=Inter&display=swap" rel="stylesheet"> 
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
            <a class="nav-link" href="tienda.php"><i class="fas fa-store-alt"></i>&nbsp;Tienda</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="servicios.php"><i class="fas fa-cog"></i>&nbsp;Servicios</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contacto.php"><i class="fas fa-phone-alt"></i>&nbsp;Contacto</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="instalaciones.php"><i class="fas fa-tools"></i>&nbsp;Instalaciones</a>
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
  				<p class="text-light" style="font-size: 14px; text-align: justify;">Aquí se colocaría información de la empresa que describa los servicios, productos y enfoque principal de la misma para atraer al cliente.</p>

  				<p class="text-light" style="font-size: 14px; text-align: justify;">Aquí se colocaría información de la empresa que describa los servicios, productos y enfoque principal de la misma para atraer al cliente.</p>
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

  <div>
    <div class="container bg-dark text-light" style="padding-bottom: 45px;"><br>
      <div class="row">
          <div class="col-12 col-md-3">
            <center><p style="font-family: Encode Sans; font-size: 21px;"><b><a href="shop.php" style="text-decoration: none; color: white;">Productos</a></b></p></center>
              <center>
                <p>Cámaras de seguridad</p>
                <p>Sistemas Inteligentes</p><hr>
                <center><p style="font-family: Encode Sans; font-size: 21px;"><b><a href="servicios.php" style="text-decoration: none; color: white;">Servicios</a></b></p></center>
              </center>
        </div>
        <div class="col-12 col-md-3">
          <span style="color: #101010;" class="d-block d-sm-none"><hr></span>
            <center><p style="font-family: Encode Sans; font-size: 21px;"><b><a href="instalaciones.php" style="text-decoration: none; color: white;">Instalaciones</a></b></p></center>
              <center>
                <p>Paneles Solares</p>
                <p>Control de Acceso</p>
                <p>Sistemas de Seguridad</p>
              </center>
        </div>
        <div class="col-12 col-md-3">
          <span style="color: #101010;" class="d-block d-sm-none"><hr></span>
            <center><p style="font-family: Encode Sans; font-size: 21px;"><a href="contacto.php" style="text-decoration: none; color: white;"><b>Contacto</b></a></p></center>
              <center>
                <p><a href="login.php" style="text-decoration: none; color: white;">¿Quiénes somos?</a></p>
                <p><a href="cotizacion.php" style="text-decoration: none; color: white;">Solicita Cotización</a></p>
                <span style="color: #101010;"><hr></span>
                <a href="https://www.facebook.com/DR-ELECTRONICA-273945235991668/" target="blank" style="padding-bottom: 15px; text-decoration: none; display: block; color: white;"><i class="fab fa-facebook-square"></i>&nbsp; Facebook</a>
              </center>
        </div>
        <div class="col-12 col-md-3">
          <span style="color: #101010;" class="d-block d-sm-none"><hr></span>
            <center><p style="font-family: Encode Sans; font-size: 21px;"><b>Soporte</b></p></center>
              <center>
                <p>Preguntas Frecuentes</p>
              </center>
        <br></div>
      </div>
    </div>
  </div>

  <div class="container" style="padding-bottom: 50px;">
    <div class="row">
      <div class="col-12">
        <center><p style="font-family: Inter; font-weight: lighter;" class="text-muted"><br><small style="font-size: 16px;">Copyright © 2020 <b>DR Electronica</b>. Proudly made by <b>Vinett</b>.</small></p></center>
      </div>
    </div>
  </div>
  <br>

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
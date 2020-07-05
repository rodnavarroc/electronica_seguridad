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
  <div class="container" style="padding-top: 8%;">
  	<div class="row bg-white">
  		<div class="col-12 col-md-4 p-5 text-light bg-info">
  			<center>
  				<h3 class="card-title">¡Visítanos!</h3><hr>
  				<p class="text-light" style="font-size: 14px; text-align: justify;">Estamos ubicados en Av. las Puentes 516, Las Puentes 5o Sector, 66460 San Nicolás de los Garza, N.L.</p>
  				<div class="gmap_canvas"><iframe width="100%;" height="350px;" id="gmap_canvas" src="https://maps.google.com/maps?q=dr%20electronica%20las%20puentes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:200px;width:350px;}.gmap_canvas {overflow:hidden;background:none}</style>
  			</center>
  		</div>
  		<div class="col-12 col-md-4 p-5">
  			<center><h3 class="card-title">Contáctanos</h3></center><hr><br>
  			<center>
  			<label><b><i class="fas fa-phone-alt"></i>&nbsp;Teléfono:</b> (81) 1648 6963</label><br><br>
  			<label><b><i class="fas fa-at"></i>&nbsp;Correo electrónico:</b> ventas_electronica@hotmail.com</label><br><br>
  			<label><a class="text-dark text-decoration-none" href="https://www.facebook.com/DR-ELECTRONICA-273945235991668/" target="blank"><i class="fab fa-facebook-square"></i>&nbsp; <b>Facebook:</b> DR ELECTRONICA</a></label>
  			</center>
  		</div>
  		<div class="col-12 col-md-4 p-5">
  			<center><h3 class="card-title">Solicita tu cotización</h3></center><hr>
  			<center><p>Permítenos ayudarte</p></center><br>
  			<form>
  				<div class="form-group">
  					<label>Nombre:</label>
  					<input type="text" placeholder="Juan Ortíz Pérez" class="form-control">
  				</div>
  				<div class="form-group">
  					<label>Correo electrónico:</label>
  					<input type="email" placeholder="alguien@ejemplo.com" class="form-control">
  				</div>
  				<div class="form-group">
  					<label>¿Qué servicio o producto necesitas?</label>
  					<textarea class="form-control" rows="5" placeholder="Escribe aquí cómo podemos ayudarte en tu proyecto o negocio"></textarea>
  				</div><br>
  				<center><button type="submit" class="btn btn-outline-dark">Enviar</button></center><br><br>
  			</form>
  		</div> 
  	</div>
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
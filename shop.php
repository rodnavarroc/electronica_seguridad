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
  <div class="container" style="padding-top: 100px;">
    <center><h3>Productos</h3></center>
    <div class="row bg-light text-dark pt-3">
    	<div class="col-12 col-md-6"> 
    		<select class="form-control" style="width: 100%;">
    			<option>Ver todos los productos</option>
    			<option>Ver kits</option>
    			<option>Ver sistemas de seguridad</option>
    			<option>Ver sistemas inteligentes </option>
    		</select>
    	</div>
    	<div class="col-12 col-md-6">
    		<div class="d-block d-sm-none"><br></div>
    		<a class="btn btn-outline-info my-auto" href="" style="float: right;">Actualizar</a>
    	</div>
    </div>
  	
  	<br>
    <div class="row bg-white p-3">
  		<div class="col-12 col-md-3 my-auto rounded-lg p-3">
  			<center>
  				<img src="https://i.imgur.com/4EjuDZS.png" class="img-fluid" width="75%;">
	  			<label>Cámara de Seguridad Epcom</label><br>
	  			<label class="text-muted">B8TURBOG2</label><br>
	  			<label class="text-dark">$399.90</label><br><br>
	  			<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info rounded-lg bn-sm p-2"><i class="fas fa-plus"></i>&nbsp;Ver detalles</a>
  			</center>
  		</div>
  		<div class="col-12 col-md-3 my-auto rounded-lg p-3">
  			<center>
  				<img src="https://i.imgur.com/4EjuDZS.png" class="img-fluid" width="75%;">
	  			<label>Cámara de Seguridad Epcom</label><br>
	  			<label class="text-muted">B8TURBOG2</label><br>
	  			<label class="text-dark">$399.90</label><br><br>
	  			<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info rounded-lg bn-sm p-2"><i class="fas fa-plus"></i>&nbsp;Ver detalles</a>
  			</center>
  		</div>
  		<div class="col-12 col-md-3 my-auto rounded-lg p-3">
  			<center>
  				<img src="https://i.imgur.com/4EjuDZS.png" class="img-fluid" width="75%;">
	  			<label>Cámara de Seguridad Epcom</label><br>
	  			<label class="text-muted">B8TURBOG2</label><br>
	  			<label class="text-dark">$399.90</label><br><br>
	  			<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info rounded-lg bn-sm p-2"><i class="fas fa-plus"></i>&nbsp;Ver detalles</a>
  			</center>
  		</div>
  		<div class="col-12 col-md-3 my-auto rounded-lg p-3">
  			<center>
  				<img src="https://i.imgur.com/4EjuDZS.png" class="img-fluid" width="75%;">
	  			<label>Cámara de Seguridad Epcom</label><br>
	  			<label class="text-muted">B8TURBOG2</label><br>
	  			<label class="text-dark">$399.90</label><br><br>
	  			<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info rounded-lg bn-sm p-2"><i class="fas fa-plus"></i>&nbsp;Ver detalles</a>
  			</center>
  		</div>
  	</div>

    <br><br>
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cámara de Seguridad Epcom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label class="text-muted"><p>B8TURBOG2</p></label>
        <p class="text-dark" style="text-align: justify;">Descripción del producto con los detalles del mismo para que el cliente pueda comprender su funcionamiento y verificar si es de utilidad para su necesidad.</p>
        <p class="text-dark" style="text-align: justify;">
        	<b>Características:</b>
        	<ul>
        		<li>Elemento característico</li>
        		<li>Otro elemento característico</li>
        		<li>Elemento característico final</li>
        	</ul>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;Agregar al carrito</a>
      </div>
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
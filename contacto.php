

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>contactanos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contacto.css">
	<style type="text/css" media="screen">
		body{background-image: url('img/rar.png');}
	</style>
</head>
<body>
	<?php  
	include('templates/header.php');
	?>
	  <div clas="caja">
     </div>
    
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="well well-sm">
	                <form class="form-horizontal" method="post" action="recibocontacto.php">
	                    <fieldset>
	                        <legend class="text-center header" style="  color: #fff;font-size: 27px; background: #36A0FF;">Contactanos</legend>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="nombres" type="text" placeholder="First Name" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="apellidos" type="text" placeholder="Last Name" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="correo" type="text" placeholder="Email Address" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="phone" name="telefono" type="text" placeholder="Phone" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <textarea class="form-control" id="message" name="descripcion" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" class="btn btn-primary btn-lg" >Enviar</button>
	                            </div>
	                        </div>
	                    </fieldset>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>	  
    
   



	<?php  
	include('templates/footer.php');
	?>
</body>
</html>
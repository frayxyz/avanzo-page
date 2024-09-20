<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/blog.css">
	<style type="text/css" media="screen">
		body{background-image: url('img/rar.png');}
	</style>
</head>
<body>
	<?php  
	include('templates/header.php');
	?>
	<div class="blog" style="height:100px; width:30%; margin-left:35%;">
		
	</div>
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="well well-sm">
	                <form class="form-horizontal" method="post" action="reciboblog.php">
	                    <fieldset>
	                        <legend class="text-center header" style="  color: #fff;font-size: 27px; background: #000;">Comparte lo que piensas en nuestro blog</legend>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="nombres" type="text" placeholder="Nombre" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="apellidos" type="text" placeholder="Alias" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="correo" type="text" placeholder="Correo Electronico" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <textarea class="form-control" id="message" name="descripcion" placeholder="Enter text for your blog." rows="7"></textarea>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" class="btn btn-primary btn-lg" >Compartir</button>
	                            </div>
	                        </div>
	                    </fieldset>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>	  
    
	<div clas="caja" style="background:gray;;width:80%;margin-left:10%;">
	<h1>ultimos blogs publicados:</h1>
      
	  <?php
	  require 'clases/conexion.php';
	  $sql="SELECT apellidos,texto FROM blog";
	  $result=$conn->query($sql);

	  if($result->num_rows>0){
		  while($fila=$result->fetch_assoc()){
			  echo "<div style='margin:5px;background:#fff; border:1px solid #000;'><p style='color:red;'>{$fila['apellidos']}</p> {$fila['texto']}</div>";
		  }
	  }

	  ?>

     </div>
   


	<?php  
	include('templates/footer.php');
	?>
</body>
</html>
<?php 
	$iduser = -1;

	if(isset($_REQUEST["mail"]) 	
		&& isset($_REQUEST["password"]))
	{
		$mail = $_REQUEST["mail"];
		$pass = $_REQUEST["password"];

		//comprobar que el mail y el pass existen
		if($mail == "prado.mon@gmail.com" 
			&& $pass == "123pra")
		{
			//obtener datos del usuario
			$iduser = 1; 
			$nombre = "Prado";
		}
	}
?>

<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
				 
	<script type="text/javascript" src="js/validar.js"></script>
</head>
<body>
<div class="container">
	<div class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid">
		    <div class="navbar-header">
		      	<a class="navbar-brand" href="#">Search Social Network</a>
			    <button type="button" class="navbar-toggle" data-toggle="collapse"
	              data-target=".navbar-ex1-collapse">
			        <span class="sr-only">Desplegar navegación</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		    </div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">


			<?php
			if($iduser == -1)
			{
			?>

			<form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
					<input class="form-control" type="text" placeholder="e-mail" id="mail" name="mail">
					<input class="form-control" type="password" placeholder="******" id="password" name="password">
		        </div>
		        <button type="submit" class="btn btn-default">Login</button>
	      	</form>

			<a class="navbar-link navbar-text" href="#">Registrate</a>
			<a class="navbar-link navbar-text" href="#">Olvidaste tu contraseña?</a>

			<?php 
			}
			else
			{
			?>
		    <div>
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home</a></li>
		        <li><a href="#">Page 1</a></li>
		        <li><a href="#">Page 2</a></li>
		        <li><a href="#">Page 3</a></li>
		      </ul>
		    </div>
			<div class="navbar-text pull-right">
			  	Hola <?php echo $nombre; ?>
			  	<a href="index.php" class="navbar-link">(Cerrar sesión)</a>
			</div>		    

			<?php
			}
			?>
		</div>
    	</div>
	</div>


	<!--<div class="clearfix "></div>-->

	<div class="row jumbotron center ">
		<h1>Página principal de mi molona red social</h1>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 divmargin">
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 divmargin">
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 divmargin">
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 divmargin">
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 divmargin">
			Noticia 1 de mi red social que habla de mis cosas ... 
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
		</div>
		<div class="col-xs-12 col-sm-6 divmargin">
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
		</div>
		<div class="col-xs-12 col-sm-6 divmargin">
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
			Por este lado podríamos hablar del tiempo que hará mañana ...
		</div>

		<div class="col-xs-12 col-sm-6 divmargin">
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
			Ultima actualización realizada por un usuario a mi red social que nos dice como ...
		</div>
		<div class="col-xs-12 col-sm-6 divmargin">
			Noticia 1 de mi red social que habla de mis cosas ... 
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
			Noticia 1 de mi red social que habla de ...
		</div>
	</div>

</div>
</body>
</html>
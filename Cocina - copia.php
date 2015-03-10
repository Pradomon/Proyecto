<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA </title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	<link href="css/base.css" 			rel="stylesheet" type="text/css" >
	<link href="css/great.css" 			rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" >
	<link href="css/medium.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" >
	<link href="css/mini.css" 			rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" >

	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
  	

</head>
	<BODY id="foto-pral">
																							<!-- CABECERA  -->
		<div id="cabecera" class="grande mediano mini">
			 <!-- <img	src="Fotos/cuchara.jpg" alt="Logotipo" class="imglogo">  -->
			<div id = "caja1B" >    																	
				<input type="search" value="Buscador">													<!-- BUSCADOR  -->
				<img	src="Fotos/logo.png"  alt="Logo" class="imglogo">
		    	
		    </div>    
		    <div id = "caja2B" > 																		<!-- LOGIN  -->   
		    	<form action="http://192.168.1.190/Formularios/Ejercicio1/recibir.php" method ="get"> 
					<input type="text" placeholder="Usuario" 	value="" />			<p></p>
					<input type="text" placeholder="Contraseña"	value="" maxlength = "6" />		<p></p>
					<input class="grande mediano mini botonL" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Aceptar&nbsp;&nbsp;&nbsp;" />
					<input class="grande mediano mini botonR" type="button" value="&nbsp;&nbsp;&nbsp;Nuevo Usuario&nbsp;&nbsp;&nbsp;" onClick="location.href='login.php'"  />
					<p></p>
				<input class="grande mediano mini botonL" type="button" value="&nbsp;&nbsp;&nbsp;¿Has olvidado usuario/contraseña?&nbsp;&nbsp;&nbsp;" onClick="location.href='login.php'"  />
				<input class="grande mediano mini botonR" type="button" value="&nbsp;&nbsp;&nbsp;Cerrar Sesion&nbsp;&nbsp;&nbsp;" onClick="location.href='login.php'"  />
					
				</form>
		    </div>  
		    <div class="clear"></div>  
		</div>	
																							<!-- CUERPO  -->
		<div id="container" class="grande mediano mini">									<!-- DESPLEGABLE  -->
			
				<!--<video id="video-background" src="Fotos/video-menu.mp4" autoplay loop controls width="560" height="315"></video>-->

			<div id="listas">
				<ul>
					<li class="pestañas">
						<a href="Tradicional.php">Tradicional</a>
						<ul>
							<li><a href="Tradicional.php">De la Agüela</a></li>
							<li><a href="Tradicional.php">Regional</a></li>
							<li><a href="Tradicional.php">Cuchara</a></li>
						</ul>
					</li>
					<li class="pestañas">
						<a href="Carnes.php">Carnes</a>
						<ul>
							<li><a href="Carnes.php">Pollo</a></li>
							<li><a href="Carnes.php">Ternera</a></li>
							<li><a href="Carnes.php">Cordero</a></li>
							<li><a href="Carnes.php">Cerdo</a></li>
						</ul>
					</li>
					<li class="pestañas">
						<a href="Pescados.php">Pescados<a/>
						<ul>
							<li><a href="Pescados.php">Blancos<a/></li>
							<li><a href="Pescados.php">Azules</a></li>
						</ul>
					</li>
					<li class="pestañas">
						<a href="Arroces.php">Arroces</a>
						<ul>
							<li><a href="Arroces.php">Carnes</a></li>
							<li><a href="Arroces.php">Pescados</a></li>
							<li><a href="Arroces.php">Calderos</a></li>
							<li><a href="Arroces.php">Verduras</a></li>
						</ul>
					</li>
					<li class="pestañas">
						<a href="Postres.php">Postres</a>
						<ul>
							<li><a href="Postres.php">Con Frutas</a></li>
							<li><a href="Postres.php">Bizcochos</a></li>
							<li><a href="Postres.php">Tartas</a></li>
							<li><a href="Postres.php">Flanes</a></li>
						</ul>
					</li>
				</ul>
				<div class="clear"></div>
			</div>	
		</div>
			
        	<!--<div id="cajafotos">		-->								<!-- FOTOS ALEATORIAS  -->	
        	             <!--<div id="cajafotos">-->	
        	<div class="container cajafotos2">
        		<!--<embed src="diapositiva.mp4">*/-->
        		<!--<video src="Fotos/diapositiva.mp4" autoplay loop controls width="300" height="200"></video>-->
        		<!--<video id="video-background" src="Fotos/video-menu.mp4" autoplay loop controls width="300" height="315"></video>-->
        		<!--<video  src="Fotos/video-menu.mp4" autoplay loop controls width="1000" height="615" ></video>        ¡¡¡buenoBUENO-->
        	   <div class="row">
        	   		<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
        				<div id="myCarousel" class="carousel slide carousel-margen-mio" data-ride="carousel" >
        					<div class="carousel-inner">
						        <div class="active item cajacarrusel"><img  src="Fotos/plato0.jpg" alt="banner1" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/cocina1.jpg" alt="banner2" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato1.jpg" alt="banner2" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/cocina2.jpg" alt="banner2" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato2.jpg" alt="banner2" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/cocina3.jpg" alt="banner2" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato3.jpg" alt="banner3" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato4.jpg" alt="banner4" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato5.jpg" alt="banner5" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato6.jpg" alt="banner5" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato7.jpg" alt="banner5" /></div>
						        <div class="item cajacarrusel"><img  src="Fotos/plato8.jpg" alt="banner5" /></div>
					 		</div>         		
        			<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
        				</div>
        			</div>
        			<div id="cajautilidades" class="col-xs-12 col-sm-5 col-md-3 col-lg-3">			
	           		<ul><h3><FONT COLOR="#585858">
								<!--<li><a href="" >Menus Semanales</a> </li><br>-->
								<li><a href="Menus.php"> Menus Semanales</a> </li><br>
								<li>Foro Chat</li><br>
								<li>Consejos utiles</li><br>
								<li>Consejos de familia</li><br>
					</h3></ul>																	<!-- UTILIDADES  -->	
        	
           		</div>	
        		</div>
        		
        	</div>	
           	
        	<div class="clear"></div>
		</div>	                                                <!--	CIERRE CAJA CUERPO  -->
																							<!-- PIE  -->	
		<div id="pie" class="grande mediano mini">
			
			<div class="clear"></div>
		</div>	

	<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	</body>
</html>

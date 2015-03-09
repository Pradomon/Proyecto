<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- CARNES --</title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	<link href="css/base.css" 			rel="stylesheet" type="text/css" >
	<link href="css/great.css" 			rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" >
	<link href="css/medium.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" >
	<link href="css/mini.css" 			rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" >

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
  function abrir (URL){ 
  x = (screen.width / 2) - (1000/2);
  y = (screen.height / 2) - (750/2);

  window.open(URL,"ventana1","width=1000,height=750,scrollbars=NO,,left= "+ x + ",top=" + y +""); 
} 
	</script>

</head>
	<BODY id="foto-pral">
		<div class="container">

  <div class="row">
   <div id = "caja1B" >    																	
				<input type="search" value="Buscador">													<!-- BUSCADOR  -->
		    	
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
  </div>

  <div class="row">
    <div class="col-sm-12 jumbotronmio"></div>
     <h1><font color="#61380B">CARNES</font></h1>
   </div>
   <div class="clear"></div>

  <div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Pollo</font></h3>
     <ul>
       	<li><a class="ex5" href="http://www.polloalchilindron.com/" onclick="abrir(this.href);return false">Al Chilindron</a></li>
       	<li><a class="ex5" href="http://recetapolloalacerveza.com/" onclick="abrir(this.href);return false">A la cerveza</a></li>
       	<li><a class="ex5" href="http://www.polloalhorno.co/" onclick="abrir(this.href);return false">Al horno</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Ternera</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.mytaste.es/b/carne-de-ternera-en-salsa.html" onclick="abrir(this.href);return false">En salsa</a></li>
       	<li><a class="ex5" href="http://canalcocina.es/receta/rabo-de-ternera-estofado" onclick="abrir(this.href);return false">Rabo</a></li>
       	<li><a class="ex5" href="http://www.comidinasdelaabuela.com/2014/01/redondo-de-ternera-al-horno.html" onclick="abrir(this.href);return false">Al horno</a></li>
     </ul>	
    </div>
     
  </div>

  <div class="clear"></div>

<div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Cordero</font></h3>
     <ul>
       	<li><a class="ex5" href="http://www.caceroladas.com/2014/12/cordero-lechal-al-horno.html" onclick="abrir(this.href);return false">Lechal al horno</a></li>
       	<li><a class="ex5" href="http://www.sabormediterraneo.com/recetas/cordero_horno.htm" onclick="abrir(this.href);return false">Pierna y/o paletilla</a></li>
       	<li><a class="ex5" href="http://www.mytaste.es/b/como-hacer-cordero-guisado.html" onclick="abrir(this.href);return false">Guisado</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Cerdo</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.solomillodecerdo.net/" onclick="abrir(this.href);return false">Solomillo</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=manitas+de+cerdo" onclick="abrir(this.href);return false">Manitas</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=cerdo" onclick="abrir(this.href);return false">Varias</a></li>
     </ul>	
    </div>
  </div>


</div>
				
	</body>
</html>

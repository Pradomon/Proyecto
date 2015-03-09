<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- ARROCES --</title>
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
      <!--<blockquote><blockquote><h1><font color="#61380B">ARROCES VARIOS</font></h1></blockquote></blockquote>     sangrar-->
      <h1><font color="#61380B">ARROCES VARIOS</font></h1>
   </div>
   <div class="clear"></div>

  <div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Carnes</font></h3>
     <ul>
       	<li><a class="ex5" href="http://www.arrozpollo.net/" onclick="abrir(this.href);return false">Pollo</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=arroz+con+conejo" onclick="abrir(this.href);return false">Conejo</a></li>
       	<li><a class="ex5" href="http://www.mytaste.es/b/arroz-con-magro-de-cerdo.html" onclick="abrir(this.href);return false">Magro</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Pescados</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=arroz+de+marisco" onclick="abrir(this.href);return false">Marisco</a></li>
       	<li><a class="ex5" href="http://www.arroznegro.net/" onclick="abrir(this.href);return false">Negro</a></li>
       	<li><a class="ex5" href="http://www.sabormediterraneo.com/cocina/receta_arrozabanda.html" onclick="abrir(this.href);return false">A banda</a></li>
     </ul>	
    </div>
     
  </div>

  <div class="clear"></div>

<div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Calderos</font></h3>
     <ul>
       	<li><a class="ex5" href="http://www.recetaarrozcaldoso.com/" onclick="abrir(this.href);return false">Caldoso</a></li>
       	<li><a class="ex5" href="http://www.lapaella.net/" onclick="abrir(this.href);return false">Paella</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=arroz+con+bogavante" onclick="abrir(this.href);return false">Bogavante</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Verduras</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.arrozalhorno.net/" onclick="abrir(this.href);return false">Al horno</a></li>
       	<li><a class="ex5" href="http://quecocinar.info/arroz-mixto/" onclick="abrir(this.href);return false">Mixto</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=arroz+con+garbanzos" onclick="abrir(this.href);return false">Con garbanzos</a></li>
     </ul>	
    </div>
  </div>


</div>
				
	</body>
</html>

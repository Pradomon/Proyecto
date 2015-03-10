<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- POSTRES --</title>
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
        <img  src="Fotos/logo.png"  alt="Logo" class="imglogo">
		    	
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
      <h1><font color="#61380B">POSTRES VARIOS</font></h1>
   </div>
   <div class="clear"></div>

  <div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Con Frutas</font></h3>
     <ul>
       	<li><a class="ex5" href="http://sevilla.abc.es/tusrecetas/recetas/andalucia/tiramisu-de-frutas.html" onclick="abrir(this.href);return false">Tiramisú de Frutas</a></li>
       	<li><a class="ex5" href="http://www.yanuq.com/buscador.asp?idreceta=1404" onclick="abrir(this.href);return false">Founde de Frutas</a></li>
       	<li><a class="ex5" href="http://allrecipes.com.mx/recetas/etiqueta-1139/recetas-de-postres-de-frutas.aspx" onclick="abrir(this.href);return false">Varios</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Bizcochos</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.midulcebizcocho.com/2013/10/bizcocho-de-queso-philadelphia-con.html" onclick="abrir(this.href);return false">De queso Philadelphia y chocolate</a></li>
       	<li><a class="ex5" href="http://www.bizcochodeyogur.es/" onclick="abrir(this.href);return false">De Yogour</a></li>
       	<li><a class="ex5" href="http://www.pequerecetas.com/receta/bizcocho-casero-15-recetas/" onclick="abrir(this.href);return false">Caseros</a></li>
     </ul>	
    </div>
     
  </div>

  <div class="clear"></div>

<div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Tartas</font></h3>
     <ul>
       	<li><a class="ex5" href="http://www.recetatartadequeso.com/" onclick="abrir(this.href);return false">De queso</a></li>
       	<li><a class="ex5" href="http://tartadesantiago.com.es/" onclick="abrir(this.href);return false">De Santiago</a></li>
       	<li><a class="ex5" href="http://www.hogarutil.com/cocina/recetas/postres/listado-1521.html" onclick="abrir(this.href);return false">Varias</a></li>
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Flanes</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.flandecafe.es/" onclick="abrir(this.href);return false">De café</a></li>
       	<li><a class="ex5" href="http://cocina.facilisimo.com/flan-de-limon" onclick="abrir(this.href);return false">De limón</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=mousse" onclick="abrir(this.href);return false">Mousses</a></li>
     </ul>	
    </div>
  </div>


</div>
				
	</body>
</html>

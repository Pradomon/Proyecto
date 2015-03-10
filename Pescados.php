<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- PESCADOS --</title>
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
     <h1><font color="#61380B">PESCADOS</font></h1>    
  
    <p>La clasificación de pescados en azules y bancos obedece su contenido en grasas, ya que los pescados azules tales como el atún, el salmón, el bonito u otros tienen un gran contenido graso que frecuentemente supera el 10%, mientras que los pescados blancos, como la merluza, el bacalao, el lenguado y otros, apenas tienen grasa en su composición, no alcanzando el 5%.
    <a href="http://www.vitonica.com/alimentos/diferencias-entre-el-pescado-azul-y-el-pescado-blanco"  role="button" onclick="abrir(this.href);return false">Leer más....</a></p>
 

   </div>
   <div class="clear"></div>

  <div class="row">
    <div class="col-sm-6 colchoco cajachoco">
     <h3><font color="#61380B">Blancos</font></h3>
     <ul>
        <li><a class="ex5" href="http://www.bacalaocontomate.com/" onclick="abrir(this.href);return false">Bacalao con tomate</a></li>
        <li><a class="ex5" href="http://www.merluzaalhorno.com/" onclick="abrir(this.href);return false">Merluza al horno</a></li>
       	<li><a class="ex5" href="http://www.mis-recetas.org/recetas/search?text=pescado+blanco" onclick="abrir(this.href);return false">Varias</a></li>
       	
     </ul>	
    </div>
   
    <div class="col-sm-6 colchoco cajachoco">
      <h3><font color="#61380B">Azules</font></h3>
      <ul>
       	<li><a class="ex5" href="http://www.cocinaligera.es/Cocina_ligera_Cocina_ligera_Boquerones_a_la_cazuela_.htm" onclick="abrir(this.href);return false">Boquerones a la cazuela</a></li>
       	<li><a class="ex5" href="http://www.cocinaligera.es/Cocina_ligera_Pez_espada_salteado_con_salsa_de_pina_.htm" onclick="abrir(this.href);return false">Pez espada salteado con salsa de piña</a></li>
       	<li><a class="ex5" href="http://www.cocinaligera.es/Cocina_ligera_Sardinas_al_grill_con_ensalada_marroqui.htm" onclick="abrir(this.href);return false">Sardinas al Grill con ensalada marroqui</a></li>
     </ul>	
    </div>
     
  </div>

  <div class="clear"></div>




</div>
				
	</body>
</html>

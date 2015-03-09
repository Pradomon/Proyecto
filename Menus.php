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
	

	<script type="text/javascript" src="js/cocina.js"></script>
	<script type="text/javascript">

		
function abrir (URL){ 
	x = (screen.width / 2) - (900/2);
	y = (screen.height / 2) - (700/2);

  window.open(URL,"ventana1","width=900,height=700,scrollbars=NO,,left= "+ x + ",top=" + y +""); 
} 
	function refrescar()
	{
		location.reload(true);
	}

	</script>
</head>
	<BODY id="foto-pral" onload="cargarprimeros();cargarsegundos();cargarterceros();cargarceldas()">
																							<!-- CABECERA  -->
		<div id="cabecera" class="grande mediano mini">
			 <!-- <img	src="Fotos/cuchara.jpg" alt="Logotipo" class="imglogo">  -->
			<div id = "caja1B" >    																	
														<!-- BUSCADOR  -->
					<input type="search" value="Buscador">													
		    </div>    
		    <div id = "caja2B" > 																		<!-- LOGIN  -->   
		    	<form action="http://192.168.1.190/Formularios/Ejercicio1/recibir.php" method ="get"> 
					<input type="text" placeholder="Usuario" 	value="" />			<p><p>
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
		<div id="cuerpo" class="grande mediano mini">									<!-- DESPLEGABLE  -->
			
			<table  id="tablamenus" class="tablam">
			<!--table style="width:100%" border="2px" class="tablam">-->
						
			  <caption><h2>Menus Semanales 
			  
			  </h2>
			  </caption>
			  
			  <tr>
			  	<!--<th style="border: hidden"></th>     quita borde a la celda sola-->
			  	<th> <INPUT class="grande mediano mini botonL" type="button"  value="Refrescar" onclick="refrescar()"> </th>
			  	<th>Lunes</th>
			    <th>Martes</th>
			    <th>Miercoles</th>
			    <th>Jueves</th>
			    <th>Viernes</th>
			    <th>Sabado</th>
			    <th>Domingo</th>
			  </tr>
			  <tr>
			    <td rowspan="2" valign="center" align="center">Comidas</td>
			    <td> </td>
			    <td> </td>
			    <td> </td>
			    <td> </td>
			    <td> </td>
			    <td> </td>
			    <td> </td>
			    
			  </tr>
			  <tr>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    
			  </tr>
			  <tr>
			    <td rowspan="2" align="center">Cenas</td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			    <td rowspan="2"></td>
			  </tr>
			 <tr>
			 </tr>	
			
			</table>
			
        	<div class="clear"></div>
		</div>	
																							<!-- PIE  -->	
		<div id="pie">
				
			<div class="clear"></div>
		</div>	

		
	</body>
</html>

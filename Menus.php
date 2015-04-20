
<?php
	require_once("define.php");
	require_once("cab.inc");
	require_once("Listas.inc");
?>

																						<!-- CUERPO  -->
		<div id="cuerpo" class="grande mediano mini">									
			
			<table  id="tablamenus" class="tablam" >
			<!--table style="width:100%" border="2px" class="tablam">-->
						
			  <caption align="center" valign="top"><h2>Menus Semanales </h2>  </caption>
			  
			   
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

	<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<?php
	require_once("pie.inc");
?>
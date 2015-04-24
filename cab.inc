

<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA </title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	

	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/cocina.js"></script>
  	

</head>
	<BODY id="foto1-pral" onload="cargarprimeros();cargarsegundos();cargarterceros();cargarceldas()">
		<div class="container grande mediano mini"> 
		<div class="row" >			
			<div id="cabecera" class="col-sm-6 grande mediano mini">
				 <!-- <img	src="Fotos/cuchara.jpg" alt="Logotipo" class="imglogo">  -->
				<div id = "caja1B" class="col-sm-6 grande mediano mini" >    																	
					<input type="search" value="Buscador">													<!-- BUSCADOR  -->
					<img	src="Fotos/logo3.gif"  alt="Logo" class="imglogo">
						
					
					<?php
											
					if ((basename($_SERVER['PHP_SELF']) != "Cocina.php"))
					{

						//if(isset($_GET['usu'])) 
							if(isset($_SESSION['iduser']))
						{
							echo "del inicio con datos";
							echo "<p></p>";
							//$usu=$_GET["usu"];
							//$nomusu=$_GET["nomusu"];
							//$foto=$_GET["foto"]; 
							$usu=$_SESSION['iduser'];
			    			$nomusu=$_SESSION['nombreusu'];
			    			$foto=$_SESSION['foto'];
					?>	
							<input class="grande mediano mini botonL" type="button" value="&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;"
					 		onclick="paginicio('<?php echo $usu; ?>', '<?php echo $nomusu; ?>',  '<?php echo $foto; ?>' )" />
						
						<?php
						}
						else
						{
							echo "del inicio sin datos";
							echo "<p></p>";
						?>	
							<input class="grande mediano mini botonL" type="button" value="&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;" 
							 onclick="paginicio()"/>
					<?php	
						}
					}
					?>
						
							    	
			    </div> 
			    <?php
			    
				//session_start();
			    $pag=basename($_SERVER['PHP_SELF']);
		        $pag1=basename($_SERVER['REQUEST_URI']);
		        $pag2=basename($_SERVER['SERVER_NAME']);
		        $pag3=basename($_SERVER['HTTP_REFERER']);
		       
                   

        echo "<p> PHP-CAB : $pag </p>";
        echo "<p> REQ-CAB : $pag1 </p>";
        echo "<p> SER-CAB : $pag2 </p>";
        echo "<p> HTT-CAB : $pag3 </p>";
        

        


				if(isset($_SESSION['iduser']))

				{	
					echo "con valor................CAB";
					
			    	//$_SESSION['iduser'] = $_POST["usu"];
			    	//$_SESSION['nombreusu'] = $_POST["nomusu"];
			    	//$_SESSION['foto'] = $_POST["foto"];
			    	$_GET["usu"]=$_SESSION['iduser'];
			    	$_GET["nomusu"]=$_SESSION['nombreusu'];
			    	$_GET["foto"]=$_SESSION['foto'];
 				}
 				else
 				{
 					echo "sin valor................CAB";
 				}
			   				    
			    if(!isset($_SESSION['iduser']))
   			    {	
			    ?>	
			    <div id = "caja2B" class="col-sm-6 grande mediano mini" > 								<!-- LOGIN  -->   
			    	<!--<form action="http://192.168.1.190/Formularios/Ejercicio1/recibir.php" method ="get"> -->
			    	<!--<form action="login.php" method ="post" enctype="multipart/form-data" onsubmit="return validar()"> -->
			    	<form action="login.php" method ="post" enctype="multipart/form-data" > 	
			    		<!--	<form action="recibir.php" method ="post" enctype="multipart/form-data" onsubmit="return validar()"> -->
						<input type="text"     id="nomusu"    name="nomusu"    placeholder="Usuario" 	        value="" required/>			<p></p>
						<input type="password" id="password1" name="password1" placeholder="Contraseña  aaa123"	value="" maxlength = "6" pattern="[a-z]{3}[0-9]{3}" required/>	<p></p>
						
						<input class="grande mediano mini botonL" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Aceptar&nbsp;&nbsp;&nbsp;" />
						<!--onClick="location.href='login.php'"/>-->

						<input class="grande mediano mini botonR" type="button" value="&nbsp;&nbsp;&nbsp;Nuevo Usuario&nbsp;&nbsp;&nbsp;" 
						onClick="location.href='Alta.php'"  />
						
						<p></p>
						
						<!--<input class="grande mediano mini botonR" type="button" value="&nbsp;&nbsp;&nbsp;Cerrar Sesion&nbsp;&nbsp;&nbsp;" -->
						<!--onClick="location.href='cerrar.php'"  />-->
						
					</form>
					<?php require_once("olvido.inc");?>
					<!--<a href="olvido.php" class="grande mediano mini botonL" >&nbsp;&nbsp;&nbsp;¿Has olvidado usuario/contraseña?&nbsp;&nbsp;&nbsp;</a>-->
				</div>  
				<?php
				}
				else
				{
				?>
					<div id = "caja2B" class="col-sm-6 grande mediano mini" > 								<!-- LOGADO  -->   
			    	Hola <?php echo $_SESSION['nombreusu']; ?>
			    	<?php  
					if(file_exists(USER_FOLDER."/".$_SESSION['foto']))
						
					{
						 $foto=$_SESSION['foto'];
						 //echo "<img  src='".images_user."/$foto'>";
						 echo "<img class='navbar-brand1' src='".USER_FOLDER."/$foto'>";

					}
					 require_once("cerrar.inc");
					?>
					<!--<input class="grande mediano mini botonR" type="button" value="&nbsp;&nbsp;&nbsp;Cerrar Sesion&nbsp;&nbsp;&nbsp;" -->
					<!--	onClick="location.href='cerrar.inc'"  />-->
			    	 
					</div>  
					
				<?php	
				

				}
				?>
			    
			    <div class="clear"></div>  
			</div>	
		</div>	

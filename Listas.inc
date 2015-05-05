
		<div id="container" class="grande mediano mini">
			<div id="listas">
				<ul>

					<li class="pestañas">
						<?php
							
							if (basename($_SERVER['PHP_SELF']) != "Tradicional.php")
							{
								session_start();
    							//if(isset($_GET['usu'])) 	$usu=$_GET["usu"];
								//if(isset($_GET['nomusu']))	$nomusu=$_GET["nomusu"];
								//if(isset($_GET['foto']))	$foto=$_GET["foto"]; 
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    								echo "<a href='Tradicional.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Tradicional</a>";
    							}	
    							else
    							{
    								echo "<a href='Tradicional.php'>Tradicional</a>";
    								
    							}

						?>
								
								<ul>
									<li><a href="Tradicional.php">De la Agüela</a></li>
									<li><a href="Tradicional.php">Regional</a></li>
									<li><a href="Tradicional.php">Cuchara</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
							
							if (basename($_SERVER['PHP_SELF']) != "Carnes.php")
							{
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    							echo "<a href='Carnes.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Carnes</a>";
    							}
    							else
    							{
    								echo "<a href='Carnes.php'>Carnes</a>";
    								
    							}
						?>
								
								<ul>
									<li><a href="Carnes.php">Pollo</a></li>
									<li><a href="Carnes.php">Ternera</a></li>
									<li><a href="Carnes.php">Cordero</a></li>
									<li><a href="Carnes.php">Cerdo</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
							
							if (basename($_SERVER['PHP_SELF']) != "Pescados.php")
							{
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    							echo "<a href='Pescados.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Pescados</a>";
    							}
    							else
    							{
    								echo "<a href='Pescados.php'>Pescados<a/>";
    								
    							}
						?>
								
								<ul>
									<li><a href="Pescados.php">Blancos<a/></li>
									<li><a href="Pescados.php">Azules</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
							
							if (basename($_SERVER['PHP_SELF']) != "Arroces.php")
							{
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    							echo "<a href='Arroces.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Arrocess</a>";
    							}
    							else
    							{
    								echo "<a href='Arroces.php'>Arroces</a>";
    								
    							}
						?>
								
								<ul>
									<li><a href="Arroces.php">Carnes</a></li>
									<li><a href="Arroces.php">Pescados</a></li>
									<li><a href="Arroces.php">Calderos</a></li>
									<li><a href="Arroces.php">Verduras</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
							
							if (basename($_SERVER['PHP_SELF']) != "Postres.php")
							{
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    							echo "<a href='Postres.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Postres</a>";
    							}
    							else
    							{
    							echo "<a href='Postres.php'>Postres</a>";

    							}
						?>
								
								<ul>
									<li><a href="Postres.php">Con Frutas</a></li>
									<li><a href="Postres.php">Bizcochos</a></li>
									<li><a href="Postres.php">Tartas</a></li>
									<li><a href="Postres.php">Flanes</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
						
							if (basename($_SERVER['PHP_SELF']) != "Menus.php" && 
							   basename($_SERVER['PHP_SELF']) != "Cocina.php")
							{
								if(isset($_SESSION['iduser']))

								{	
									//echo "con valor................LISTAS";
									$_GET["usu"]=$_SESSION['iduser'];
			    					$_GET["nomusu"]=$_SESSION['nombreusu'];
			    					$_GET["foto"]=$_SESSION['foto'];
			    					$usu=$_GET["usu"];
			    					$nomusu=$_GET["nomusu"];
			    					$foto=$_GET["foto"]; 
    							echo "<a href='Menus.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Menus Semanales</a>";
    							}
    							else
    							{
    							echo "<a href='Menus.php'>Menus Semanales</a>";

    							}
						?>
						
								
								<ul>
									<li><a href="Menus.php">Comidas y Cenas</a></li>
									
								</ul>
						<?php
							}
						?>	
					</li>
				</ul>
				<div class="clear"></div>
			</div>	
		</div>	
	
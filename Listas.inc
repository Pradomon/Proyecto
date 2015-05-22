
		<div id="container" class="grande mediano mini">
			<div id="listas">
				<ul>

					<li class="pestañas">
						<?php
							
								if (basename($_SERVER['PHP_SELF']) != "tradicional.php")
							{
						?>
								<a href="tradicional.php">Tradicional</a>
								<ul>
									<li><a href="tradicional.php">De la Agüela</a></li>
									<li><a href="tradicional.php">Regional</a></li>
									<li><a href="tradicional.php">Cuchara</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
						
							if (basename($_SERVER['PHP_SELF']) != "carnes.php")
							{
						?>
								<a href="carnes.php">Carnes</a>
								<ul>
									<li><a href="carnes.php">Pollo</a></li>
									<li><a href="carnes.php">Ternera</a></li>
									<li><a href="carnes.php">Cordero</a></li>
									<li><a href="carnes.php">Cerdo</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
						
							if (basename($_SERVER['PHP_SELF']) != "pescados.php")
							{
						?>
								<a href="pescados.php">Pescados<a/>
								<ul>
									<li><a href="pescados.php">Blancos<a/></li>
									<li><a href="pescados.php">Azules</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
						
							if (basename($_SERVER['PHP_SELF']) != "arroces.php")
							{
						?>
								<a href="arroces.php">Arroces</a>
								<ul>
									<li><a href="arroces.php">Carnes</a></li>
									<li><a href="arroces.php">Pescados</a></li>
									<li><a href="arroces.php">Calderos</a></li>
									<li><a href="arroces.php">Verduras</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
						
							if (basename($_SERVER['PHP_SELF']) != "postres.php")
							{
						?>
								<a href="postres.php">Postres</a>
								<ul>
									<li><a href="postres.php">Con Frutas</a></li>
									<li><a href="postres.php">Bizcochos</a></li>
									<li><a href="postres.php">Tartas</a></li>
									<li><a href="postres.php">Flanes</a></li>
								</ul>
						<?php
							}
						?>	
					</li>
					<li class="pestañas">
						<?php
							
							 if(isset($_SESSION['iduser']))
							 	{	
								 if (basename($_SERVER['PHP_SELF']) != "menus.php" && 
							   		 basename($_SERVER['PHP_SELF']) != "index.php")
									 {
						?>
									 <a href="menus.php">Menus Semanales</a>
									 <ul>
									 	<li><a href="menus.php">Comidas y Cenas</a></li>
										
									 </ul>
						<?php
									}
								}	
						?>	
					</li>
				</ul>
				<div class="clear"></div>
			</div>	
		</div>	
	
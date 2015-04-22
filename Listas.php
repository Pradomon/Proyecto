
		<div id="container" class="grande mediano mini">
			<div id="listas">
				<ul>

					<li class="pestañas">
						<?php

							if (basename($_SERVER['PHP_SELF']) != "Tradicional.php")
							{
								$usu=$_SESSION['iduser'];
								$nomusu=$_SESSION['nombreusu'];
    							$foto=$_SESSION['foto'];
    							echo "<a href='Tradicional.php?usu=$usu&nomusu=$nomusu&foto=$foto'>Tradicional</a>"

						?>
								<!--<a href="Tradicional.php">Tradicional</a>-->
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
						echo basename($_SERVER['PHP_SELF']);
							if (basename($_SERVER['PHP_SELF']) != "Carnes.php")
							{
						?>
								<a href="Carnes.php">Carnes</a>
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
						echo basename($_SERVER['PHP_SELF']);
							if (basename($_SERVER['PHP_SELF']) != "Pescados.php")
							{
						?>
								<a href="Pescados.php">Pescados<a/>
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
						echo basename($_SERVER['PHP_SELF']);
							if (basename($_SERVER['PHP_SELF']) != "Arroces.php")
							{
						?>
								<a href="Arroces.php">Arroces</a>
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
						echo basename($_SERVER['PHP_SELF']);
							if (basename($_SERVER['PHP_SELF']) != "Postres.php")
							{
						?>
								<a href="Postres.php">Postres</a>
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
				</ul>
				<div class="clear"></div>
			</div>	
		</div>	
	
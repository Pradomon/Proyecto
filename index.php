<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
	
	require_once("define.php");
	require_once("cab.inc");
	require_once("listas.inc");

 

?>
																							<!-- CUERPO  -->
	
        <div  class="container grande mediano mini">
          	<div class="row" >
        	   	<div class="col-sm-8 grande mediano mini ">   <!-- FOTOS ALEATORIAS  -->	
        	   		<section id="miSlide" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#miSlide" data-slide-to="0" class="active"></li>
											<li data-target="#miSlide" data-slide-to="1"></li>
											<li data-target="#miSlide" data-slide-to="2"></li>
											<li data-target="#miSlide" data-slide-to="3"></li>
											<li data-target="#miSlide" data-slide-to="4"></li>
											<li data-target="#miSlide" data-slide-to="5"></li>
											<li data-target="#miSlide" data-slide-to="6"></li>
											<li data-target="#miSlide" data-slide-to="7"></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active">
												<img src="fotos/plato0.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/cocina1.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/plato1.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/cocina2.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/plato2.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/cocina3.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/plato3.jpg" alt="fotos comidas" class="imgtam1">
											</div>
											<div class="item">
												<img src="fotos/plato4.jpg" alt="fotos comidas" class="imgtam1">
											</div>
										</div>
										<a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</section><br>		
				</div>		
				<?php
							
					 if(isset($_SESSION['iduser']))
					 	{			
        		?>
				        		<!--<span class="fusion-tooltip tooltip-shortcode" data-animation="" data-delay="0" data-placement="top"
				        		 data-title="hacemos que tus ideas se conviertan en realidad" data-toggle="tooltip" data-trigger="hover" data-original-title="">
				        		  <span style="color: #f79600;">tu imagina, nosotros lo creamos.</span></span>-->

				        		<div  id="cajautilidades" class="col-sm-4 grande mediano mini">			
						          		<ul><h3><FONT COLOR="#585858">
													<li><a href="menus.php"> Menus Semanales</a> </li><br>
													<li>Foro Chat</li><br>
													<li>Consejos utiles</li><br>
													<li>Consejos de familia</li><br>
										</h3></ul>																	
				        		</div>								<!-- CIERRE CAJA UTILIDADES  -->
        		<?php
        				}
        			else
        			 {
        				?>
        					
        					<div  id="cajautilidades" class="col-sm-4 grande mediano mini">	
        					<acronym   style="color:red; font-style:italic" title="Debes estar registrado para ver esta sección">	
        					<!--<acronym title="el cartelito que aparece"> lo que queres resaltar</acronym>-->
						          		<ul><h3><FONT COLOR="#585858">
													<li>Menus Semanales </li><br>
													<li>Foro Chat</li><br>
													<li>Consejos utiles</li><br>
													<li>Consejos de familia</li><br>
										</h3></ul>	
							</acronym>																			
				        	</div>	
				        									<!-- CIERRE CAJA UTILIDADES  -->
        			<?php
        			}	

        		?>
        	</div>									<!-- CIERRE ROW  -->
       		<div class="clear"></div>
        </div>	                                                <!--	CIERRE CAJA CUERPO  -->
																							<!-- PIE  -->	
		<div id="pie" class="grande mediano mini">
			
			<div class="clear"></div>
		</div>	

	<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

<?php
	require_once("pie.inc");
?>

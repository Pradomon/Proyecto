<?php
	
			
	require_once("Cabecera.inc");
	require_once("Listas.inc");



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
												<img src="Fotos/plato0.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/cocina1.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/plato1.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/cocina2.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/plato2.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/cocina3.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/plato3.jpg" alt="Arte Visual" class="imgtam1">
											</div>
											<div class="item">
												<img src="Fotos/plato4.jpg" alt="Arte Visual" class="imgtam1">
											</div>
										</div>
										<a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</section><br>		
				</div>				
        		<div  id="cajautilidades" class="col-sm-4 grande mediano mini">			
		          		<ul><h3><FONT COLOR="#585858">
									<li><a href="Menus.php"> Menus Semanales</a> </li><br>
									<li>Foro Chat</li><br>
									<li>Consejos utiles</li><br>
									<li>Consejos de familia</li><br>
						</h3></ul>																	
        		</div>								<!-- CIERRE CAJA UTILIDADES  -->
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

<?php
	require_once("Cabecera.inc");
	require_once("Listas.inc");
?>
																							<!-- CUERPO  -->
		
			
        	<!--<div id="cajafotos">		-->								<!-- FOTOS ALEATORIAS  -->	
        	             <!--<div id="cajafotos">-->	
        	<div class="container cajafotos2">
        		<!--<embed src="diapositiva.mp4">*/-->
        		<!--<video src="Fotos/diapositiva.mp4" autoplay loop controls width="300" height="200"></video>-->
        		<!--<video id="video-background" src="Fotos/video-menu.mp4" autoplay loop controls width="300" height="315"></video>-->
        		<!--<video  src="Fotos/video-menu.mp4" autoplay loop controls width="1000" height="615" ></video>        ¡¡¡buenoBUENO-->
        	
								<div >												
									<section id="miSlide" class="carousel slide">
										<ol class="carousel-indicators"><!--se colocan mas <li> si hay mas imágenes que mostrar en el slide-->
											<li data-target="#miSlide" data-slide-to="0" class="active"></li>
											<li data-target="#miSlide" data-slide-to="1"></li>
											<li data-target="#miSlide" data-slide-to="2"></li>
											<li data-target="#miSlide" data-slide-to="3"></li>
											<li data-target="#miSlide" data-slide-to="4"></li>
											<li data-target="#miSlide" data-slide-to="5"></li>
											<li data-target="#miSlide" data-slide-to="6"></li>
											<li data-target="#miSlide" data-slide-to="7"></li>
										</ol>

										<div class="carousel-inner"><!--se colocan mas <div> si queremos colocar más imágenes-->
											<div class="item active">
												<img src="Fotos/plato0.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/cocina1.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/plato1.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/cocina2.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/plato2.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/cocina3.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/plato3.jpg" alt="Arte Visual" class="imgtam">
											</div>
											<div class="item">
												<img src="Fotos/plato4.jpg" alt="Arte Visual" class="imgtam">
											</div>
										</div>

										<a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				
									</section><br>					
								</div>
								
				
        			<div id="cajautilidades" class="col-xs-12 col-sm-5 col-md-3 col-lg-3">			<!-- UTILIDADES  -->
		           		<ul><h3><FONT COLOR="#585858">
									<!--<li><a href="" >Menus Semanales</a> </li><br>-->
									<li><a href="Menus.php"> Menus Semanales</a> </li><br>
									<li>Foro Chat</li><br>
									<li>Consejos utiles</li><br>
									<li>Consejos de familia</li><br>
						</h3></ul>																		
  
        				<div class="clear"></div>
					</div>	                                                		    <!--	CIERRE CAJA UTILIDADES  -->
		
			</div>                                              <!--cierra caja container -->
																							<!-- PIE  -->	
		<div id="pie" class="grande mediano mini">
			
			<div class="clear"></div>
		</div>	

	<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

<?php
	require_once("pie.inc");
?>

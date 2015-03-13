<?php
	require_once("Cabecera.inc");
	require_once("Listas.inc");
?>
																							<!-- CUERPO  -->
	
        <div class="container cajafotos2 grande mediano mini">
          	<div class="row" >
        	   	<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 margin-top">   <!-- FOTOS ALEATORIAS  -->	
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
        		<div id="cajautilidades" class="col-xs-12 col-sm-5 col-md-3 col-lg-3">			
		          		<ul><h3><FONT COLOR="#585858">
									<!--<li><a href="" >Menus Semanales</a> </li><br>-->
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

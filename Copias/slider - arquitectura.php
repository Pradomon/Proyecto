<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Slidershow carousel</title>
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<style type="text/css">
		.imgtam
		{
			width: 600px;
			margin: auto;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#miventana">Ejemplos</button>
		<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!--los tres contenedores tienen que estar siempre ya que será para el llamamiento-->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Arquitectura</h4>
					</div>
					<div class="modal-body">												
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
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
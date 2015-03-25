<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Popup centrado en pantalla</title>
<style type="text/css">
#botones{ 
display: block; 
margin: 10px auto; 
padding: 10px; 
} 

.anterior{ 
width: 25px ; 
height: 25px ; 

} 

.inicio{ 
width: 25px;
height: 25px;

} 

.siguiente{ 
width: 25px;
height: 25px;

}

</style>

<script type="text/javascript">
function fsig()
{

	
}


function fant(url,ancho,alto) {
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "leonpurpura.com", "width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+"");
}

</script>
<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
</head>
<body>
	<div id="botones"> 
		<!--<input type="button" value"Ant." onClick="fant(Arroces.php,500,500)" ><img class="anterior" src="Fotos/anterior.png" /> -->
		<a href="javascript:history.back()"><img class="anterior" src="Fotos/anterior.png"></a>
		<img class="inicio" src="Fotos/inicio.jpg" /> 
		<a href=""><span class="glyphicon glyphicon-menu-right"></span></a>
		<!--<a href="javascript:history.forward()"><img class="siguiente" src="Fotos/siguiente.png"></a>-->
		
		<!--<img class="siguiente" src="Fotos/siguiente.png" /> -->
	</div> 

	<!--<input type="button" id="bsig"  value="Sig." onClick="fsig()" /> 
	<input type="button" id="bant"  value="Ant." onClick="fant()" /> -->

	
</body>
</html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$dni = $_GET["dni"];

if(isset($nombre) 
	&& isset($apellidos) && isset($dni))
{
	$pantalla = "<h1>Datos recibidos</h1>
		<P>Nombre: $nombre </P> 
  		<P>Apellidos: $apellidos </P>
  		<P>DNI: $dni</P>"; 
}
else
{
	$pantalla = "<h1>Error en el envio</h1>
		<p>Los datos no se han recibido correctamente
		</p>";
}
  echo $pantalla;
 
?>

</body>
</html>
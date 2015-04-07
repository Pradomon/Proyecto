<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> LOGIN </title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	

	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/cocina.js"></script>
  	

</head>	

<body>

<?php

	$nomusu = $_POST["nomusu"];
	$password1 = $_POST["password1"];
	

	echo $nomusu;
	echo "<p></p>";
	echo $password1;
	echo "<p></p>";
	
	
	//    CONEXION A LA BD
	$link = mysqli_connect(
		'localhost', // El servidor
		'usuweb', // El usuario
		'webcocina', // La contraseña
		'foro-cocina'); // La base de datos
	
	if(!$link) 
	{
		echo "<p>Error al conectar con la base de datos: " 
			. mysqli_connect_error()
			. "</p>";

		return false;
	}

	
//                       LEEMOS DE LA BD

//$query = "SELECT INTO" 
//		. " usuarios (nomusu, email, fnacimiento)"
//		. " WHERE (nomusu='Pradomon')";

	
//$query="SELECT nomusu, email, fnacimiento FROM usuarios WHERE nomusu = '$nomusu'";	
//$query="SELECT * FROM usuarios WHERE codusu > 1";	
$query = "SELECT * FROM usuarios"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";

echo "<p> Query : $query </p>";


$resultado = @mysqli_query($link, $query);

if (!$resultado) 
{
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    echo "<p></p>";
    echo 'error : ' . $resultado;
    exit;
}




if($fila = mysqli_fetch_assoc($resultado))
{
	$id=$fila['codusu'];
	$email=$fila['email'];
	$fnacimiento=$fila['fnacimiento'];
}
	;

echo $id; 					// nomusu
 echo "<p></p>";
echo $email;			 	// email
 echo "<p></p>";
echo $fnacimiento;		// fecha nacimiento

?>

</body>
</html>
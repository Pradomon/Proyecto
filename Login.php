<html>
<head>
	<title>LOGIN</title>
</head>
<body>

<?php

	$nomusu = $_POST["nomusu"];
	$password1 = $_POST["password1"];
	$correo1 = $_POST["correo1"];

//                       INSERTAMOS EN LA BD

$ok = selectBD($nomusu, $password1);
	if($ok)
		echo "<p>Datos leidos correctamente</p>";
	else
		echo "<p>Error en la lectura de datos</p>";


	echo "<p>Fecha nacimiento : $fecha </p>";

//                       INSERTAMOS EN LA BD

function selectBD($nomusu, $password1)
{
//guardar los datos en la BD
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

	$query = "SELECT INTO" 
		. " usuarios (nomusu, email, fnacimiento)"
		. " WHERE (nomusu='Pradomon')";
	
	echo "<p>$query</p>";

	$resultado = mysqli_query($link, $query);
	if(!$resultado) 
	{
		echo "<p>Error al ejecutar la sentencia <b>$query</b>: " 
		. mysqli_error($link)
		. "</p>";
		return false;
	}

	return true;
}



?>

</body>
</html>
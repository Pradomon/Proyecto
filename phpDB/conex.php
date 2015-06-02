<?php

function abrirconexion()
{

$link = @mysqli_connect(
		'mysql.hostinger.es', // El servidor del hostinger
		'u831064012_chef', // El usuario de la BD en hostinger
		'7prasan7', // La contraseña del usuario de la BD
		'u831064012_sqlc'); // La base de datos hostinger

	if (!$link) 
	{
		$link = @mysqli_connect(
			'localhost',    // El servidor
		'usuweb',       // El usuario DB Xamp
		'webcocina',    // La contraseña BD Xamp
		'foro-cocina'); // La base de datos	Xamp
		//echo "<p>Error en la conexión con la base de datos." . mysqli_connect_error() . "</p>";
	}
	if (!$link) 
	{
		echo "<p> Error en la conexión con la BD:" . mysqli_connect_error() . "</p>";
	}

	return $link;

	/*-----------------------*/
	
}

function cerrarconexion($link)
{
	mysqli_close($link);
}

?>
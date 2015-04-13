<?php

function abrirconexion()
{
	$link = @mysqli_connect(
		'localhost',    // El servidor
		'usuweb',       // El usuario
		'webcocina',    // La contraseña
		'foro-cocina'); // La base de datos	

	if(!$link) 
	{
		echo "<p>Error al conectar con la base de datos: " 
			. mysqli_connect_error()
			. "</p>";
	}
	return $link;
}

function cerrarconexion($link)
{
	mysqli_close($link);
}

?>
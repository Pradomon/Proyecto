<?php

function conectar_bd()
{
	//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
/*
	$link = @mysqli_connect(
		'mysql.hostinger.es', // El servidor del hostinger
		'u306749639_geovy', // El usuario de la BD en hostinger
		'RiasGremory19', // La contraseña del usuario de la BD
		'u306749639_altas'); // La base de datos hostinger

	if (!$link) 
	{
		$link = @mysqli_connect(
			'localhost',//ip del ordenador servidor xamp
			'AdmGallery',//usuario DB xamp
			'RiasGremory19',//contraseña DB xamp
			'nuevas_altas');//base de datos xamp
		//echo "<p>Error en la conexión con la base de datos." . mysqli_connect_error() . "</p>";
	}
	if (!$link) 
	{
		echo "<p> Error en la conexión con la BD:" . mysqli_connect_error() . "</p>";
	}

	return $link;
*/
	
	if ($link) 
	{
		//HOSTINGER
		$link = @mysqli_connect(
			'mysql.hostinger.es',//servidor hostinger
			'u306749639_geovy',//usuario hostinger
			'RiasGremory19',//passw hostinger
			'u306749639_altas');//BD hostinger
	}
	else
	{
		//XAMP
		$link = @mysqli_connect(
			'localhost',
			'AdmGallery',
			'RiasGremory19',
			'nuevas_altas');

	}
	if(!$link) 
	{
		echo "<p>Error al conectar con la base de datos: " 
			. mysqli_connect_error()
			. "</p>";
	}

	return $link;
	
}

function cerrar_bd($link)
{
	mysqli_close($link);
}

?>
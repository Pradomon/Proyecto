<html>
<head>
	<title>RECIBIR</title>
</head>
<body>

<?php

	$nomusu = $_POST["nomusu"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];
	$correo1 = $_POST["correo1"];
	$correo2 = $_POST["correo2"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$alias = $_POST["alias"];
	$dni = $_POST["dni"];
	$fecha = $_POST["fecha"];

	echo $nomusu;
	echo "<p></p>";
	echo $password1;
	echo "<p></p>";
	echo $password2;
	echo "<p></p>";
	echo $correo1;
	echo "<p></p>";
	echo $correo2;
	echo "<p></p>";
	echo $nombre;
	echo "<p></p>";
	echo $apellidos;
	echo "<p></p>";
	echo $alias;
	echo "<p></p>";
	echo $dni;
	echo "<p></p>";
	echo $fecha;
	echo "<p></p>";

//                                            NOMUSU   NOMBRE USUARIO
	if (isset($nomusu) )

	{
		$campo=$nomusu;
		$descampo="Nombre-Usuario";
		$tamaño=6;
		
		validar_campos($campo,$descampo,$tamaño);
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo Nombre	</p>";
			echo $pantalla;
			echo "<p></p>";
	}
	//                                          PASSWORD1 LONGITUD
	if (isset($password1) )

	{
		$campo=$password1;
		$descampo="Password1";
		$tamaño=6;
		
		validar_campos($campo,$descampo,$tamaño);
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo Password1	</p>";
			echo $pantalla;
			echo "<p></p>";
	}
//                                            PASSWORD2 LONGITUD
	if (isset($password2) )

	{
		$campo=$password2;
		$descampo="Password2";
		$tamaño=6;
		
		validar_campos($campo,$descampo,$tamaño);
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo Password2	</p>";
			echo $pantalla;
			echo "<p></p>";
	}

	//                                            	PASSWORD IGUALES
	if ($password1!=$password2)
	{	
		$pantalla = "<h1>Error en el envio</h1>
			<p>Password's distintas </p>";
			echo $pantalla;
			echo "<p></p>";
	}	
	//                                            	CORREOS IGUALES
	if ($correo1!=$correo2)
	{	
		$pantalla = "<h1>Error en el envio</h1>
			<p>Correos distinta </p>";
			echo $pantalla;
			echo "<p></p>";
	}	

	//                                            		NOMBRE
	if (isset($nombre) )

	{
		$campo=$nombre;
		$descampo="Nombre";
		$tamaño=3;
		
		validar_campos($campo,$descampo,$tamaño);
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo Nombre	</p>";
			echo $pantalla;
			echo "<p></p>";
	}

	//                                             			APELLIDOS
	if (isset($apellidos))
	{	
		
		$campo=$apellidos;
		$descampo="Apellidos";
		$tamaño=7;

		validar_campos($campo,$descampo,$tamaño);
	}
	else
		{
			$pantalla = "<h1>Error en el envio</h1>
				<p>Falta campo apellidos</p>";
				echo $pantalla;
				echo "<p></p>";
		}
	
	//                                              		DNI
	if  (isset($dni) )

	{
		if (validar_dni($dni))
		{	
			$pantalla = "<h1>Datos recibidos</h1>
			<P>DNI: $dni </P> ";	  		
	  		echo $pantalla;
			echo "<p></p>";
		}
		else
		{
			$pantalla = "<h1>Error en el envio</h1>
				<p>DNI erroneo</p>";
				echo $pantalla;
				echo "<p></p>";
		}
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo dni</p>";
			echo $pantalla;
			echo "<p></p>";
	}
//                                                         FICHERO
	$nombre  = $_FILES['foto']['name'];
	$tamaño  = $_FILES['foto']['size'];
	$error   = $_FILES['foto']['error'];
	$tipo    = $_FILES['foto']['type'];
	$carpeta = $_FILES['foto']['tmp_name'];

	

	if($_FILES['foto']['error'] == 0)
	{
		if($_FILES['foto']['type'] == "image/jpeg"
			|| $_FILES['foto']['type'] == "image/png")
		{

			move_uploaded_file($_FILES['foto']['tmp_name'],
				"images_user/".$_FILES['foto']['name']);
	

			$pantalla = "<h1>Datos recibidos</h1>
			<P>Nombre: $nombre </p>
			<p>Tamaño : $tamaño</p>
			<p>Error  :  $error</p>
			<p>Tipo   : $tipo</p>
			<p>Carpeta : $carpeta</p> ";	
			//echo var_dump($_FILES);
			
	  		echo $pantalla;
			echo "<p></p>";

			

		}
		else
		{
			$pantalla = "<h1>El tipo del archivo no es el correcto</h1>
			<P>Nombre: $nombre </p>
			<p>Tamaño : $tamaño</p>
			<p>Error  :  $error</p>
			<p>Tipo   : $tipo</p>
			<p>Carpeta : $carpeta</p> ";	
			//echo var_dump($_FILES);
			
	  		echo $pantalla;
			echo "<p></p>";
				
		}
	}
	else
	{
		//echo var_dump($_FILES);
		$pantalla = "<h1>Error en la recepcion del archivo</h1>
			<P>Nombre : $nombre </p>
			<p>Tamaño : $tamaño</p>
			<p>Error  :  $error</p>
			<p>Tipo   : $tipo</p>
			<p>Carpeta : $carpeta</p> ";	
			//echo var_dump($_FILES);
			
	  		echo $pantalla;
			echo "<p></p>";

	        echo FileUploadErrorMsg($_FILES["foto"]["error"]);
	}

function FileUploadErrorMsg($error_code)
{
    switch ($error_code) 
    { 
        case UPLOAD_ERR_INI_SIZE: 
            return "El archivo es m&aacute;s grande que lo permitido por el Servidor."; 
        case UPLOAD_ERR_FORM_SIZE: 
            return "El archivo subido es demasiado grande."; 
        case UPLOAD_ERR_PARTIAL: 
            return "El archivo subido no se termin&oacute; de cargar (probablemente cancelado por el usuario)."; 
        case UPLOAD_ERR_NO_FILE: 
            return "No se subi&oacute; ning&uacute;n archivo"; 
        case UPLOAD_ERR_NO_TMP_DIR: 
            return "Error del servidor: Falta el directorio temporal."; 
        case UPLOAD_ERR_CANT_WRITE: 
            return "Error del servidor: Error de escritura en disco"; 
        case UPLOAD_ERR_EXTENSION: 
            return "Error del servidor: Subida detenida por la extenci&oacute;n";
      default: 
            return "Error del servidor: ".$error_code; 
    } 
}

	
	function validar_dni($dni)
	{

	 $letra = $dni[strlen($dni)-1];
	 $ndni = substr($dni, 0, -1); 

	
	$resto = $ndni%23;
	

	switch($resto)
	{
		case 0:
			$c = "T"; break;
		case 1:
			$c = "R"; break;
		case 2:
			$c = "W"; break;
		case 3:
			$c = "A"; break;
		case 4:
			$c = "G"; break;
		case 5:
			$c = "M"; break;
		case 6:
			$c = "Y"; break;
		case 7:
			$c = "F"; break;
		case 8:
			$c = "P"; break;
		case 9:
			$c = "D"; break;
		case 10:
			$c = "X"; break;
		case 11:
			$c = "B"; break;
		case 12:
			$c = "N"; break;
		case 13:
			$c = "J"; break;
		case 14:
			$c = "Z"; break;
		case 15:
			$c = "S"; break;
		case 16:
			$c = "Q"; break;
		case 17:
			$c = "V"; break;
		case 18:
			$c = "H"; break;
		case 19:
			$c = "L"; break;
		case 20:
			$c = "C"; break;
		case 21:
			$c = "K"; break;
		case 22:
			$c = "E"; break;
		default:
			$c="Error";
	}

	if ($c != strtoupper($letra))
	{
		$pantalla = "<h1>Error en letra DNI</h1>
			<p>La letra no es correcta</p>";
			
			echo $pantalla;
			echo "<p></p>";
			return false;
	}
	return true;
 }

 function validar_campos($campo,$descampo,$tamaño)
	{
		
		$len=(strlen($campo));
		if ($len >= $tamaño)
		{
			$pantalla = "<h1>Datos recibidos</h1>
			<P>$descampo: $campo </P> "; 
	  		echo $pantalla;
			echo "<p></p>";
			return true;
		}
		else
		{
			$pantalla = "<h1>Error en el envio</h1>
			<p>$descampo  demasiado corto	</p>";
			echo $pantalla;
			echo "<p></p>";
			return false;
		}	
	}

?>

</body>
</html>
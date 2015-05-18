<html>
<head>
	<title>RECIBIR</title>
</head>
<body>

<?php
	

	
	require_once("phpDB/conex.php");
	session_start();

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
	$sexo = $_POST["sexo"];
	if(isset($_POST['notas']))	$notas = $_POST["notas"];
	if(isset($_POST['foto']))   $foto = $_POST["foto"];

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
	echo $sexo;
	echo "<p></p>";
	if(isset($_POST['notas'])) echo $notas;
	echo "<p></p>";

//                                            NOMUSU   NOMBRE USUARIO
	if (isset($nomusu) )

	{
		$campo=$nomusu;
		$descampo="Nombre-Usuario";
		$tamaño=3;
		
		validar_campos($campo,$descampo,$tamaño);
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo Nombre	</p>";
			echo $pantalla;
			echo "<p></p>";
			header("refresh: 7; url='alta.php'");
			return false;
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
			//header("refresh: 7; url='alta.php'");
			return false;
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
			header("refresh: 7; url='alta.php'");
			return false;
	}

	//                                            	PASSWORD IGUALES
	if ($password1!=$password2)
	{	
		$pantalla = "<h1>Error en el envio</h1>
			<p>Password's distintas </p>";
			echo $pantalla;
			echo "<p></p>";
			header("refresh: 7; url='alta.php'");
			return false;
	}	
	//                                            	CORREOS IGUALES
	if ($correo1!=$correo2)
	{	
		$pantalla = "<h1>Error en el envio</h1>
			<p>Correos distintos </p>";
			echo $pantalla;
			echo "<p></p>";
			//header("refresh: 7; url='alta.php'");
			return false;
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
			header("refresh: 7; url='alta.php'");
			return false;
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
				header("refresh: 7; url='alta.php'");
				return false;
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
				header("refresh: 7; url='alta.php'");
				return false;
		}
	}
	else
	{
		$pantalla = "<h1>Error en el envio</h1>
			<p>Falta campo dni</p>";
			echo $pantalla;
			echo "<p></p>";
			header("refresh: 7; url='alta.php'");
			return false;
	}
//                                                         FOTO-FICHERO
	if ($_SESSION['mod'] = 1) 
		$_FILES['foto']['name']=$_SESSION['foto'];

	$foto    = $_FILES['foto']['name'];
	$tamaño  = $_FILES['foto']['size'];
	$error   = $_FILES['foto']['error'];
	$tipo    = $_FILES['foto']['type'];
	$carpeta = $_FILES['foto']['tmp_name'];

	
	if($_FILES['foto']['error'] == 0)
	{
		if($_FILES['foto']['type'] == "image/jpeg"
			|| $_FILES['foto']['type'] == "image/png")
		{
			$ruta="images_user1";
			 if (is_dir($ruta))
			 {
			 	echo "exite";
			 	echo "<p></p>";
			 }
			 else
			 {
			 	echo "no exite..........lo creamos";
			 	mkdir($ruta);
			 	echo "<p></p>";
			 }
			move_uploaded_file($_FILES['foto']['tmp_name'],
				"images_user/".$_FILES['foto']['name']);
	

			$pantalla = "<h1>Datos recibidos</h1>
			<P>Nombre: $foto </p>
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
			<P>Nombre: $foto </p>
			<p>Tamaño : $tamaño</p>
			<p>Error  :  $error</p>
			<p>Tipo   : $tipo</p>
			<p>Carpeta : $carpeta</p> ";	
			//echo var_dump($_FILES);
			
	  		echo $pantalla;
			echo "<p></p>";
			header("refresh: 7; url='alta.php'");
			//return false;

				
		}
	}
	else
	{
		//echo var_dump($_FILES);
		$pantalla = "<h1>Error en la recepcion del archivo</h1>
			<P>Nombre : $foto </p>
			<p>Tamaño : $tamaño</p>
			<p>Error  :  $error</p>
			<p>Tipo   : $tipo</p>
			<p>Carpeta : $carpeta</p> ";	
			//echo var_dump($_FILES);
			
	  		echo $pantalla;
			echo "<p></p>";

	        echo FileUploadErrorMsg($_FILES["foto"]["error"]);
	        header("refresh: 7; url='alta.php'");
	        //return false;
	}
//                                                               COGEMOS FECHA SISTEMA PARA CAMPO DE ULTIMA VISITA
$hoy = date("Y-m-d");

echo "<p></p>";
echo $hoy;

switch ($sexo) 
{
	case "m":	$sexo="M";
    			break;
       							
    case "h":	$sexo="H";
    			break;
}

if ($notas=='Recibir')
{
	$notas=1;
}
else $notas=0;

	echo "<p>.............alta antes ................. $nomusu</p>";
	echo "<p>.............alta antes ................. $nomusu</p>";
	echo "<p>.............alta antes ................. $nomusu</p>";
	echo "<p>.............alta antes ................. $nomusu</p>";
	echo "<p>.............alta antes ................. $notas</p>";

 if(isset($_SESSION['mod']))
 {	
	if ($_SESSION['mod'] == 1)
	{	
		$ok=modif($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias);
		$ok=leerbd($nomusu, $password1);
			header("refresh: 7; url=modificar.php");
	}
	else
	{
		$ok=alta($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias);
		$ok=leerbd($nomusu, $password1);
		header("refresh: 7; url=recibir.php");
	}
		
}
else echo "no tiene valor switch - mod ";

function alta($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias)
{
//                       INSERTAMOS EN LA BD
	$link=abrirconexion();
	echo "<p>.............alta dentro ................. $nomusu</p>";
	echo "<p>.............alta dentro ................. $nomusu</p>";
	echo "<p>.............alta dentro ................. $nomusu</p>";
	echo "<p>.............alta dentro ................. $nomusu</p>";


	$ok = insertBD($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias,$link);
	
	if ($ok)
	{	
		echo "<p>Datos insertados correctamente</p>";
	}
	else
	{
		echo "<p>Error en la inserción de datos</p>";
		echo "<p>Vuelva a intentarlo</p>";
		
		return false;
	}
//                       LEEMOS PARA COGER EL IDUSER DE LA BD		

$query = "SELECT * FROM usuarios"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";

echo "<p> Query : $query </p>";

echo "<p> Link--Select-Antes :  </p>";
$resultado = @mysqli_query($link, $query);
echo "<p> Link--Select-Despues :  </p>";

if (!$resultado) 
{
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error($link);
    echo "<p></p>";
    echo 'error : ' . $resultado;
    header("refresh: 27; url=index.php");
}




if($fila = mysqli_fetch_assoc($resultado))
{
	$codusu=$fila['codusu'];
	$nomusu=$fila['nomusu'];
	$email=$fila['email'];
	$fultvisita=$fila['fultvisita'];
}
	

echo $codusu; 					// codusu
 echo "<p></p>";
 echo $nomusu; 					// nomusu
 echo "<p></p>";
echo $email;			 	// email
 echo "<p></p>";
echo $fultvisita;		// fecha ultima visita
 echo "<p></p>";		

	$_SESSION['iduser'] = $codusu;
	$_SESSION['nombreusu']=$nomusu;
	$_SESSION['foto']=$foto;
	echo "Todo correcto, saltar a la página index con usuario logado";

	$usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
   
	 	
 	//header("refresh: 7; url=index.php");
}

function modif($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias)
{
//                       INSERTAMOS EN LA BD
	$link=abrirconexion();
	echo "<p>.............modif dentro ................. $nomusu</p>";
	echo "<p>.............modif dentro ................. $nomusu</p>";
	echo "<p>.............modif dentro ................. $nomusu</p>";
	echo "<p>.............modif dentro ................. $nomusu</p>";

	$ok = updateBD($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias,$link);
	
	if ($ok)
	{	
		echo "<p>Datos insertados correctamente</p>";
	}
	else
	{
		echo "<p>Error en la inserción de datos</p>";
		echo "<p>Vuelva a intentarlo</p>";
		
		return false;
	}

}
//                       INSERTAMOS EN LA BD

function insertBD($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias,$link)
{
//guardar los datos en la BD
	

	$query = "INSERT INTO" 
		. " usuarios (nomusu, email, nombre, apellidos, fnacimiento, fultvisita, dni, sexo, notificaciones, password, foto, alias)"
		. " VALUES ('$nomusu', '$correo1', '$nombre','$apellidos', '$fecha', '$hoy', '$dni', '$sexo', '$notas', '$password1', '$foto', '$alias')";
	
	echo "<p>$query</p>";

	

	$resultado = @mysqli_query($link, $query);
	echo "<p> Link--Insert :  </p>";
	if(!$resultado) 
	{	
		//echo "<p>Error al ejecutar la sentencia <b>$query</b>: " 
		//. mysqli_error($link)
		//. "</p>";
		echo "<p>Error al ejecutar la sentencia : " 
		. mysqli_error($link)
		. "</p>";
		echo "<p>Error : ". mysqli_error($link)."</p>";
		//echo "<script>alert('CAMPO E-MAIL DUPLICADO');</script>";
		$errorsql=mysqli_error($link);
		echo "<script languaje=\"javascript\">";
      		
      		echo "alert(\"Error en alta usuario : " .  $errorsql ."\");";
      	echo "</script>";

		//echo "<script>alert('CAMPO : ' .$errorsql);</script>";
		//alert("El 5 esta en la posiocion: " + y );
		//mysqli_errno----> nº error
		
		
		//echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
		
		return false;
	}

	return true;
}

function updateBD($nomusu, $correo1, $nombre, $apellidos, $fecha, $hoy, $dni, $sexo, $notas, $password1, $foto, $alias,$link)
{
//guardar los datos en la BD
	

	
	
	$query = "UPDATE usuarios SET" 
		. " nomusu ='$nomusu'" 
		. ", email = '$correo1'" 
		. ", nombre ='$nombre'" 
		. ", apellidos = '$apellidos'"
		. ", fnacimiento = '$fecha'" 
		. ", fultvisita = '$hoy'"
		. ", dni = '$dni'"
		. ", sexo = '$sexo'"
		. ", notificaciones = '$notas'"
		. ", password = '$password1'"
		. ", foto = '$foto'"
		. ", alias = '$alias'"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";
	//	. " WHERE nomusu = $nomusu"; 	

	echo "<p>$query</p>";

	

	$resultado = @mysqli_query($link, $query);
	echo "<p> Link--Insert :  </p>";
	if(!$resultado) 
	{	
		//echo "<p>Error al ejecutar la sentencia <b>$query</b>: " 
		//. mysqli_error($link)
		//. "</p>";
		echo "<p>Error al ejecutar la sentencia : " 
		. mysqli_error($link)
		. "</p>";
		echo "<p>Error : ". mysqli_error($link)."</p>";
		//echo "<script>alert('CAMPO E-MAIL DUPLICADO');</script>";
		$errorsql=mysqli_error($link);
		echo "<script languaje=\"javascript\">";
      		
      		echo "alert(\"Error en alta usuario : " .  $errorsql ."\");";
      	echo "</script>";

		//echo "<script>alert('CAMPO : ' .$errorsql);</script>";
		//alert("El 5 esta en la posiocion: " + y );
		//mysqli_errno----> nº error
		
		
		//echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
		
		return false;
	}

	return true;
}

//                       LEEMOS PARA COGER EL IDUSER DE LA BD		
function leerbd($nomusu,$password1)
{
	$link=abrirconexion();
$query = "SELECT * FROM usuarios"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";

echo "<p> Query : $query </p>";

echo "<p> Link--Select-Antes :  </p>";
$resultado = @mysqli_query($link, $query);
echo "<p> Link--Select-Despues :  </p>";

if (!$resultado) 
{
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error($link);
    echo "<p></p>";
    echo 'error : ' . $resultado;
    header("refresh: 27; url=index.php");
}




if($fila = mysqli_fetch_assoc($resultado))
{
	

	$codusu=$fila['codusu'];
      $nomusu=$fila['nomusu'];
      $email=$fila['email'];
      $nombre=$fila['nombre'];
      $apellidos=$fila['apellidos'];
      $fnacimiento=$fila['fnacimiento'];
      $fultvisita=$fila['fultvisita'];
      $dni=$fila['dni'];
      $sexo=$fila['sexo'];
      $notificaciones=$fila['notificaciones'];
      $password1=$fila['password'];
      $password2=$fila['password'];
      $foto=$fila['foto'];
      $alias=$fila['alias'];
   
		$_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;
    $_SESSION['foto'] = $foto;
}
	

echo $codusu; 					// codusu
 echo "<p></p>";
 echo $nomusu; 					// nomusu
 echo "<p></p>";
echo $email;			 	// email
 echo "<p></p>";
echo $fultvisita;		// fecha ultima visita
 echo "<p></p>";		

	$_SESSION['iduser'] = $codusu;
	$_SESSION['nombreusu']=$nomusu;
	$_SESSION['foto']=$foto;
	echo "Todo correcto, saltar a la página con usuario logado";

	$usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
	
 
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
	  		//echo $pantalla;
			//echo "<p></p>";
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
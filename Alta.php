<?php
session_start();
$_SESSION['mod'] = 0;
?>
<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- ALTA --</title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	<link href="css/base.css" 			rel="stylesheet" type="text/css" >
	<link href="css/great.css" 			rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" >
	<link href="css/medium.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" >
	<link href="css/mini.css" 			rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" >


	<script type="text/javascript" src="js/cocina.js"></script>
	<script type="text/javascript">


	function validar()
	{
		
		//....................................VALIDAR NOMBRE USUARIO
		var usu = '';
		usu = document.getElementById('nomusu').value;

		if(usu == null || usu.length<=3) //no cumple
		{
			alert("Nombre de usuario no valido " );
			return false;
		}

		//.......................................VALIDAR PASSWORD ............. QUE SEAN IGUALES
		var p1,p2='';	
		p1 = document.getElementById('password1').value;	
		p2 = document.getElementById('password2').value;	

		if (p1!=p2)
		{	
			alert("Password distinta " );
			return false;
		}	

		//.......................................VALIDAR CORREO ............. QUE SEAN IGUALES	
		var c1,c2='';
		c1 = document.getElementById('correo1').value;	
		c2 = document.getElementById('correo2').value;	

		if (c1!=c2)
		{	
			alert("Correos distintos " );
			return false;
		}	
		//....................................VALIDAR FECHA
		var fechai = '';
		var aaaa, mm, dd = 0;
		var d = 0;

		fechai = document.getElementById('fecha').value;
		
		aaaa = Number(fechai.substring(0,4));
		mm = fechai.substring(5,7);
		dd = Number(fechai.substring(8,10));
		mm = mm - 1;
		
		var d = new Date(aaaa,mm,dd);
		var f = new Date();

		
		if ( Object.prototype.toString.call(d) === "[object Date]" )
		{
  			// it is a date
  			if ( isNaN( d.getTime() ) ) 
  			{  // d.valueOf() could also work
    			// date is not valid
    			alert("Fecha invalida " );
    			return false;
  			}
			else 
			{
				//fecha valida
			    //return true;
			}
		}
		else
		{
			  // not a date
			  alert("No hay fecha " );
			  return false;
		}
	

		//.......................................VALIDAR DNI ............. 
		var dni = document.getElementById("dni");
		if(dni.value == null || dni.value.length != 9) //no cumple
		{
			alert("DNI Incorrecto" );
			return false;
		}

		var letra;
		letra = dni.value.charAt(8);
		if(!isALetter(letra))
		{
			alert("Letra DNI Incorrecta" );
			return false;
		}

		var numero;
		numero = dni.value.substr(0,8);
		if(isNaN(numero))
		{
			return false;
		}

		if(!letracorrecta(Number(numero), letra))
		{
			alert("Letra DNI Incorrecta" );
			return false;
		}


		return true;

		function letracorrecta(numero, letra)
{
	var resto;
	var c;

	resto = numero%23;

	switch(resto)
	{
		case 0:
			c = "T"; break;
		case 1:
			c = "R"; break;
		case 2:
			c = "W"; break;
		case 3:
			c = "A"; break;
		case 4:
			c = "G"; break;
		case 5:
			c = "M"; break;
		case 6:
			c = "Y"; break;
		case 7:
			c = "F"; break;
		case 8:
			c = "P"; break;
		case 9:
			c = "D"; break;
		case 10:
			c = "X"; break;
		case 11:
			c = "B"; break;
		case 12:
			c = "N"; break;
		case 13:
			c = "J"; break;
		case 14:
			c = "Z"; break;
		case 15:
			c = "S"; break;
		case 16:
			c = "Q"; break;
		case 17:
			c = "V"; break;
		case 18:
			c = "H"; break;
		case 19:
			c = "L"; break;
		case 20:
			c = "C"; break;
		case 21:
			c = "K"; break;
		case 22:
			c = "E"; break;
		default:
			c="Error";
	}

	if(c.toUpperCase() == letra.toUpperCase())
		return true;
	else
		return false;
}

function isALetter(charVal)
{
    if( charVal.toUpperCase() != charVal.toLowerCase() )
       return true;
    else
       return false;
}


	}
	</script>

</head>
	<BODY id="foto-pral">
		<div id="cabecera" class="grande mediano mini">
			 <!-- <img	src="Fotos/cuchara.jpg" alt="Logotipo" class="imglogo">  -->
			<!--                                                                                 AVATAR      -->
			<div id = "cajaavatar" >    
				<img	src="Fotos/cocina3.jpg"  alt="Avatar" 	class="imgavatar">  
			</div>    
		<!--                                                                                 FORMULARIO -->
			<div id="cajaformulario" >
				<!--<form action="http://192.168.1.190/Formularios/Ejercicio1/recibir.php" method ="get"> -->

				
				<!--<form action="http://192.168.1.195/validar/recibir.php" method ="get" onsubmit="return validar()"> -->
				<form action="recibir.php" method ="post" enctype="multipart/form-data" onsubmit="return validar()"> 
														  	
					<input type="text" autofocus=""  id="nomusu" placeholder="Nombre Usuario" name="nomusu"	value="" maxlength = "10" required>					<p><p>
					
					<input type="password" id="password1" placeholder="Contraseña  aaa123"	name="password1"	value="" maxlength = "6" pattern="[a-z]{3}[0-9]{3}" required>	<p></p>
					
					<input type="password" id="password2" placeholder="Confirmación Contraseña" name="password2" value="" maxlength = "6" pattern="[a-z]{3}[0-9]{3}" required>	<p></p>
					
					<input type="text" 	   id="correo1" placeholder="Correo"	name="correo1"	size="50" maxlength="30"	value="" required	
						pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p>
					
					<input type="text" 	   id="correo2" placeholder="Confirmacion Correo"	name="correo2"	size="50" maxlength="30"	value="" required	
						pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p>	
					
					<input type="text" 	   placeholder="Nombre"		name="nombre"		value="" required>	<p></p>
					
					<input type="text" 	   placeholder="Apellidos"	name="apellidos"	value="" required>	<p></p>
					
					<input type="text" 	   id="alias" placeholder="Alias" name="alias"	value="" >	<p><p>
					
					Fecha de Nacimiento <input type="Date" 	id="fecha" name="fecha" 	value"" required> <p></p>
					
					<input type="text"     id="dni" placeholder="DNI" name="dni" size="9" maxlength="9"> <p></p>
						<div id="datosf" >
						Sexo <br/>
							<input type="radio" name="sexo" value="Mujer"  checked="checked" /> Mujer
							<input type="radio" name="sexo" value="Hombre" /> Hombre 
						<p></p>
						<input name="notas" type="checkbox" value="Recibir" checked="checked"/> Recibir nuevas publicaciones	
						<p></p>
						
							Incluir mi foto <input  accept="image/jpeg, image/png" class="grande mediano mini botonG" type="file" name="foto" id="foto">
						
					</div>
					<p></p>
					
					<p></p>
					<p></p>
					<p></p>
					<p></p>	
					
					<input class="grande mediano mini botonL puntero" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Aceptar&nbsp;&nbsp;&nbsp;" />
					<p></p>	
					<input class="grande mediano mini botonL puntero" type="button" value="&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;" onclick="paginicio()"/> 
				</form>
			</div>	
		</div>
				
	</body>
</html>

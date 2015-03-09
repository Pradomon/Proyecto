<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> SIN QUEMAR LA COCINA   -- LOGIN --</title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	<link href="css/base.css" 			rel="stylesheet" type="text/css" >
	<link href="css/great.css" 			rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" >
	<link href="css/medium.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" >
	<link href="css/mini.css" 			rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" >

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


		var fechai = '';
		var aaaa, mm, dd = 0;
		var d = 0;

		var p1,p2='';
		//....................................VALIDAR FECHA

		fechai = document.getElementById('fecha').value;
		
		aaaa = Number(fechai.substring(0,4));
		mm = fechai.substring(5,7);
		dd = Number(fechai.substring(8,10));
		mm = mm - 1;
		
		var d = new Date(aaaa,mm,dd);

		
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
	

		//.......................................VALIDAR PASSWORD ............. QUE SEAN IGUALES	
		p1 = document.getElementById('password1').value;	
		p2 = document.getElementById('password2').value;	

		if (p1!=p2)
		{	
			alert("Password distinta " );
			return false;
		}	


		return true;

	}
	</script>

</head>
	<BODY id="foto-pral">
		<div id="cabecera" class="grande mediano mini">
			 <!-- <img	src="Fotos/cuchara.jpg" alt="Logotipo" class="imglogo">  -->
			<!--                                                                                 AVATAR      -->
			<div id = "cajaavatar" >    
				<img	src="Fotos/avatar.jpg"  alt="Avatar" 	class="imgavatar">  
			</div>    
		<!--                                                                                 FORMULARIO -->
			<div id="cajaformulario" >
				<!--<form action="http://192.168.1.190/Formularios/Ejercicio1/recibir.php" method ="get"> -->

				
				<!--<form action="http://192.168.1.195/validar/recibir.php" method ="get" onsubmit="return validar()"> -->
				<form action="recibir.php" method ="post" enctype="multipart/form-data" onsubmit="return validar()"> 
														  	
					<input type="text" 	   id="nomusu" placeholder="Nombre Usuario" name="nomusu"	value="" required>					<p><p>
					<input type="password" id="password1" placeholder="Contraseña  aaa123"	name="password1"	value="" maxlength = "6" pattern="[a-z]{3}[0-9]{3}" required>	<p></p>
					<input type="password" id="password2" placeholder="Confirmación Contraseña" name="password2" value="" maxlength = "6" pattern="[a-z]{3}[0-9]{3}" required>	<p></p>
					<input type="text" 	   placeholder="Correo"	name="correo"	size="50" maxlength="30"	value="" required	
						pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p>
					<input type="text" 	   placeholder="Nombre"		name="nombre"		value="" required>	<p></p>
					<input type="text" 	   placeholder="Apellidos"	name="apellidos"	value="" required>	<p></p>
					Fecha de Nacimiento <input type="Date" 	id="fecha" name="fecha" 	value"" required> <p></p>
					<input type="text"     id="dni" placeholder="DNI" name="dni" size="9" maxlength="9"> <p></p>
						<div id="datosf" >
						Sexo <br/>
							<input type="radio" name="sexo" value="mujer"  checked="checked" /> Mujer
							<input type="radio" name="sexo" value="hombre" /> Hombre 
						<p></p>
						<input name="Recibir" type="checkbox" value="Recibir" checked="checked"/> Recibir nuevas publicaciones	
						<p></p>
						
							Incluir mi foto <input  accept="image/jpeg, image/png" class="grande mediano mini botonG" type="file" name="foto" id="foto">
						
					</div>
					<p></p>
					
					<p></p>
					<p></p>
					<p></p>
					<p></p>	
					<input class="grande mediano mini botonL" type="submit" name="Aceptar" value="Aceptar" />
				</form>
			</div>	
		</div>
				
	</body>
</html>

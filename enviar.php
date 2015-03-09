<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style type="text/css">

form{
	width: 20%;
}

</style>

</head>

<body>

<br><br><br><br><br><br><br><br>	
<form action="recibir1.php" method="get">

<fieldset >
	<legend>Usuario</legend>
	<p>
	<label for="nombre">Nombre</label>
	<input type="text" id="nombre" name="nombre" size="9"/>
	</p>
	
	<p>
	<label>Apellidos
	<input type="text" name="apellidos" size="9"/>
	</label>
	</p>
	
	<p>
	<lable>DNI
	<input type="text" name="dni" size="9" maxlength="9"/></label>
	</p> 

	<p>
		<label> 
		<input type="checkbox" name="suscribir"> Quiero suscribirme
		</label>
	</p>

	<fieldset>
		<legend>Edad</legend>
		<p><label> menor de 18
			<input type="radio" name="edad" value="1"> 
		</label></p>
		<p><label> 18-45
			<input type="radio" name="edad" value="2">
		</label></p>
		<p><label>46-65
			<input type="radio" name="edad" value="3"> 
		</label></p>
		<p><label>mayores de 65
			<input type="radio" name="edad" value="4">
		</label></p>
	</fieldset>
</fieldset>

<P>
<input type="submit" value="Enviar" />
<input type="reset" value="Borrar" />
</p>
</form>

</body>
</html>

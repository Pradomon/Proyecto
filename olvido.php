<html>
<head>
  <title>RECIBIR</title>
</head>
<body>




<?php

session_start();

   $email = $_POST["correoo"];
  
   echo $email;  
 echo "<p></p>";
 echo "<p>login.php</p>";
  
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
//    . " usuarios (nomusu, email, fnacimiento)"
//    . " WHERE (nomusu='Pradomon')";

  
//$query="SELECT nomusu, email, fnacimiento FROM usuarios WHERE nomusu = '$nomusu'";  
//$query="SELECT * FROM usuarios WHERE codusu > 1"; 
$query = "SELECT * FROM usuarios"
    . " where email = '$email'";
    
echo "<p> Query : $query </p>";


$resultado = @mysqli_query($link, $query);

if (!$resultado) 
{
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    echo "<p></p>";
    echo 'error : ' . $resultado;
    exit;
}




if($fila = mysqli_fetch_assoc($resultado))
{
  $nomusu=$fila['nomusu'];
  $password=$fila['password'];
  $email=$fila['email'];
}
  ;


  echo $nomusu;
  echo "<p></p>";
  echo $password;
  echo "<p></p>";
  echo $email;
  echo "<p></p>";
  echo "Todo correcto, saltar a la página index con usuario logado";
$_SESSION['iduser'] = $codusu;

?>

</body>
</html>

<html>
<head>
  <title>OLVIDO</title>
</head>
<body>




<?php

session_start();



$email = "No llega nada";
if (isset($_POST['correoo'])) 
   $email = $_POST['correoo'];
  
   echo $email;  
 echo "<p></p>";
 
  
$link=abrirconexion();

  
//                       LEEMOS DE LA BD

//$query = "SELECT INTO" 
//    . " usuarios (nomusu, email, fnacimiento)"
//    . " WHERE (nomusu='Pradomon')";

  
//$query="SELECT nomusu, email, fnacimiento FROM usuarios WHERE nomusu = '$nomusu'";  

$query = "SELECT * FROM usuarios"
    . " where email = '$email'";
    
echo "<p> Query : $query </p>";


$resultado = leerusuarios2($link, $query);

$reg=mysqli_num_rows($resultado);
echo "<p> Reg : $reg </p>";

if (mysqli_num_rows($resultado)>0)
 {
  echo "Exite al menos un registro";
  if($fila = mysqli_fetch_assoc($resultado))
  {
    $codusu=$fila['codusu'];
    $nomusu=$fila['nomusu'];
    $password=$fila['password'];
    $email=$fila['email'];
  }
 

    $pag=basename($_SERVER['PHP_SELF']);
    echo "<p> Server : $pag </p>";

    echo $codusu;
    echo "<p></p>";
    echo $nomusu;
    echo "<p></p>";
    echo $password;
    echo "<p></p>";
    echo $email;
    echo "<p></p>";
    echo "Todo correcto, saltar a la página index con usuario logado";
    $_SESSION['iduser'] = $codusu;
  } 
else
 {
  echo "No existe usuario con este email : $email";
   echo "<p></p>";
  
  ob_start(); 
  header("refresh: 7; url = Cocina.php"); 
   
  echo 'Espere un momento y será redireccionado...'; 

ob_end_flush();  
 }


?>


</body>
</html>

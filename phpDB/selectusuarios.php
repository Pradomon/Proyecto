<?php
  
//                       LEEMOS DE LA BD  POR EMAIL  ---  olvido contraseña  accedemos por email

function leerusuarios1($link,$query)
{

$resultado = @mysqli_query($link, $query);

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
    $_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;
    header("refresh: 7; url = Cocina.php"); 
  } 
else
 {
  echo "No existe usuario con este email ";
   echo "<p></p>";
  
  ob_start(); 
  header("refresh: 7; url = Cocina.php"); 
   
  echo 'Espere un momento y será redireccionado...'; 

  ob_end_flush();  
 }
}

//                       LEEMOS DE LA BD  POR usuario y password  ---  LOGIN

function leerusuarios2($link,$query)
{

 $resultado = @mysqli_query($link, $query); 
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
    $_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;

    $usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    echo "<p></p>";
    echo "variables de session variables de session variables de session";
    echo "<p></p>";
    echo $usu;
    echo "<p></p>";
    echo $nomusu;
     echo "<p></p>";
    header("refresh: 3; url = Cocina.php"); 

  } 
else
 {
  echo "No existe usuario ";
   echo "<p></p>";
  
  ob_start(); 
  header("refresh: 7; url = Cocina.php"); 
   
  echo 'Espere un momento y será redireccionado...'; 

ob_end_flush();  
 }
}
?>
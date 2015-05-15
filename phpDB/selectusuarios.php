<?php
  
//                       LEEMOS DE LA BD  POR EMAIL  ---  olvido contraseña  accedemos por email

function leerusuarios1($link,$query)
{

  $resultado = @mysqli_query($link, $query);

  if (mysqli_num_rows($resultado)>0)
    {
    
      if($fila = mysqli_fetch_assoc($resultado))
      {
        $codusu=$fila['codusu'];
        $nomusu=$fila['nomusu'];
        $password=$fila['password'];
        $email=$fila['email'];
        $foto=$fila['foto'];
      
              $pag=basename($_SERVER['PHP_SELF']);
                $pag1=basename($_SERVER['REQUEST_URI']);
                $pag2=basename($_SERVER['SERVER_NAME']);
                $pag3=basename($_SERVER['HTTP_REFERER']);
            echo "<p> PHP : $pag </p>";
            echo "<p> REQ : $pag1 </p>";
            echo "<p> SER : $pag2 </p>";
            echo "<p> HTT : $pag3 </p>";
        echo "<p></p>";
        echo "Todo correcto, Espere un momento y será redireccionado...OLVIDO";
        //session_start();
        $_SESSION['nombreusu'] = $nomusu;
        $_SESSION['iduser'] = $codusu;
        $_SESSION['foto'] = $foto;
        //header("refresh: 3; url = Index.php/?usu=$codusu&nomusu=$nomusu&foto=$foto"); 
     
      }
      else
      {
        $_SESSION['iduser'] = -1;
         echo "ERRORRRRRRRRRRRRRRRRRRRRRR ";
       echo "<p></p>";
      } 
    }
  else
   {
     $_SESSION['iduser'] = -1;
     echo "No existe usuario con este email ";
     echo "<p></p>";
    
    ob_start(); 
    header("refresh: 3; url = index.php"); 
     
    echo "Espere un momento y será redireccionado..."; 

    ob_end_flush();  
   }
}

//                       LEEMOS DE LA BD  POR usuario y password  ---  LOGIN

function leerusuarios2($link,$query)
{
//session_start();
 $resultado = @mysqli_query($link, $query); 


if (mysqli_num_rows($resultado)>0)
 {
  
  if($fila = mysqli_fetch_assoc($resultado))
  {
    $codusu=$fila['codusu'];
    $nomusu=$fila['nomusu'];
    $password=$fila['password'];
    $email=$fila['email'];
    $foto=$fila['foto'];
    
            $pag=basename($_SERVER['PHP_SELF']);
            $pag1=basename($_SERVER['REQUEST_URI']);
            $pag2=basename($_SERVER['SERVER_NAME']);
            $pag3=basename($_SERVER['HTTP_REFERER']);
                   
                   

        echo "<p> PHP-LOG : $pag </p>";
        echo "<p> REQ-LOG : $pag1 </p>";
        echo "<p> SER-LOG : $pag2 </p>";
        echo "<p> HTT-LOG : $pag3 </p>";
   
    echo "<p></p>";
    echo "Todo correcto, Espere un momento y será redireccionado... LOGIN";
    session_start();
    
    $_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;
    $_SESSION['foto'] = $foto;
    
   }
   else 
   {
    
    echo "ERRORRRRRRRRRRRRRRRRRRRRRR ";
    echo "<p></p>";
    echo 'Espere un momento y será redireccionado...';
    header("refresh: 3; url = index.php"); 
   } 

  } 
else
 {
  
  echo "No existe usuario ";
  echo "<p></p>";
  echo 'Espere un momento y será redireccionado...';
  header("refresh: 3; url = index.php"); 
    

 }
}

function leerusuariosmod($link, $query)
{
  

  $resultado = @mysqli_query($link, $query);

  //echo "<P>Valor de resultado: $resultado</P>";

  if($resultado)
  {
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
      $password=$fila['password'];
      $password1=$fila['password'];
      $foto=$fila['foto'];
      $alias=$fila['alias'];
     


      $_SESSION['nombreusu'] = $nomusu;
      $_SESSION['iduser'] = $codusu;
      $_SESSION['foto'] = $foto;
      return $fila;
    }
    else
     { 
      echo "No existe usuario ";
      echo "<p></p>";
      echo 'Espere un momento y será redireccionado...';
      header("refresh: 3; url = index.php"); 
    }
  }

  //echo "foto: $foto";
echo "No existe usuario ";
      echo "<p></p>";
      echo 'Espere un momento y será redireccionado...';
      header("refresh: 3; url = index.php"); 
  //liberar memoria del resultado
  mysqli_free_result($resultado);

  return false;
}
?>
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
    $_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;
    $_SESSION['foto'] = $foto;
    
    //header("refresh: 3; url = Cocina.php/?usu=$codusu&nomusu=$nomusu&foto=$foto"); 
    header("refresh: 3; url =$pag/?usu=$codusu&nomusu=$nomusu&foto=$foto"); 
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
  header("refresh: 3; url = Cocina.php"); 
   
  echo "Espere un momento y será redireccionado..."; 

  ob_end_flush();  
 }
}

//                       LEEMOS DE LA BD  POR usuario y password  ---  LOGIN

function leerusuarios2($link,$query)
{
session_start();
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
    //session_start();
    $_POST["usu"]=$codusu;
    $_SESSION['nombreusu'] = $nomusu;
    $_SESSION['iduser'] = $codusu;
    $_SESSION['foto'] = $foto;
    $usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
    echo "<p></p>";
    echo $usu;
    echo "<p></p>";
    echo $nomusu;
    
   
    //header("refresh: 10; url = Cocina.php"); 
    //header("refresh: 10; url = Cocina.php/?usu=$usu"); 
   header("refresh: 3; url = Cocina.php/?usu=$codusu&nomusu=$nomusu&foto=$foto"); 
   // $url="$pag3"."./?usu=$codusu&nomusu=$nomusu&foto=$foto";
   // header("refresh: 10;Location: ".$url);
     //header("refresh: 3; url='$pag3'./?usu=$codusu&nomusu=$nomusu&foto=$foto"); 
     //header("Location:".$_SERVER['HTTP_REFERER']);  
     //header("Location:".$_SERVER['HTTP_REFERER']); 
   }
   else 
   {
    
    echo "ERRORRRRRRRRRRRRRRRRRRRRRR ";
    echo "<p></p>";
    header("refresh: 3; url = Cocina.php"); 
   } 

  } 
else
 {
  
  echo "No existe usuario ";
  echo "<p></p>";
  
  //ob_start(); 
  header("refresh: 3; url = Cocina.php"); 
   
  echo 'Espere un momento y será redireccionado...'; 

  //ob_end_flush();  
 }
}
?>
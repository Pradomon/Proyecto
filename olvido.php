<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <title> SIN QUEMAR LA COCINA   -- ALTA --</title>
  <!--                                                                                 PROPIOS    -->
  <link href="css/cocina.css"     rel="stylesheet" type="text/css" media="screen" > 
  <!--                                                                                 ADAPTACION -->
  <link href="css/base.css"       rel="stylesheet" type="text/css" >
  <link href="css/great.css"      rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" >
  <link href="css/medium.css"     rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" >
  <link href="css/mini.css"       rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" >


  <script type="text/javascript" src="js/cocina.js"></script>
  <BODY id="foto-pral">
  <a href"#" class="ex5 puntero" data-toggle="modal" data-target="#miventanaolv"> <h3><font color="#61380B"></font></h3></a>

      <div class="modal fade" id="miventanaolv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!--los tres contenedores tienen que estar siempre ya que será para el llamamiento-->
      <div class="modal-dialog imgtam3">
        <div class="modal-content imgtam2" >
          <div class="modal-header"><h4>Recordatorio contraseña</h4>  </div>
          <a href="Cocina.php" data-dismiss="modal" class="btn">Cerrar</a>
          <div class="modal-body">

              <section id="miSlideolv" class="carousel slide">
                    
                    <div class="carousel-inner pop">
                      <div class="item active">
                        <h2> Introduce tu email</h2>
                        <p> </p>
                        <input type="text"     id="correo1" placeholder="Correo"  name="correo1"  size="50" maxlength="30"  value="" required 
            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p>
                        <?php

   $email = $_POST["correo1"];
  
   
  
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
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    echo "<p></p>";
    echo 'error : ' . $resultado;
    exit;
}




if($fila = mysqli_fetch_assoc($resultado))
{
  $nomusu=$fila['nomusu'];
  $password=$fila['fnacimiento'];
}
  ;


  echo $nomusu;
  echo "<p></p>";
  echo $password1;
  echo "<p></p>";

?>
                      </div>
                      
                      
                    </div>
                    

          </section><br>    
        </div>        
      <div class="clear"></div>
    
   </div>
 </div>
</div>
   <div class="clear"></div>
        
 </body>
</html>

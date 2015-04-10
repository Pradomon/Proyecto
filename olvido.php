<html>
<head>
  <title>OLVIDO</title>
</head>
<body>




  <form  action="olvidobd.php" method="post" enctype="multipart/form-data" > 
    <input type="text"     id="correoo" placeholder="Correo"  name="correoo"  size="50" maxlength="30"  value="" required 
       pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p> 
                            
     <br>
     <br>
                  
     <input class="grande mediano mini botonL" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Aceptar&nbsp;&nbsp;&nbsp;" />
                       <!--onClick="location.href='olvido.php'" -->
  </form> 
</body>
</html>

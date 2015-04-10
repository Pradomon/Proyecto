



<!--<a href"#" class="ex5 puntero"  data-toggle="modal" data-target="#miventanaolv"> <h3><font color="#61380B"></font></h3></a>-->
<button class="grande mediano mini botonL" data-toggle="modal" data-target="#miventanaolv" type="button" >
  &nbsp;&nbsp;&nbsp;¿Has olvidado usuario/contraseña?&nbsp;&nbsp;&nbsp;
 </button> 
      <div class="modal fade" id="miventanaolv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!--los tres contenedores tienen que estar siempre ya que será para el llamamiento-->
      <div class="modal-dialog imgtam3">
        <div class="modal-content imgtam2 colorpop" >
          <div class="modal-header"><h3>Recordatorio contraseña</h3>  </div>
          <a href="Cocina.php" data-dismiss="modal" class="btn">Cerrar</a>
          <div class="modal-body">

              <section id="miSlideolv" class="carousel slide">
                    
                    <div class="carousel-inner pop">
                      <div class="item active">
                        <h4> Introduce tu email</h4>
                        <p> </p>
                        <form  action="olvidobd.php" method="post" enctype="multipart/form-data" > 
                          <input type="text"     id="correoo" placeholder="Correo"  name="correoo"  size="50" maxlength="30"  value="" required 
                            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" ><p></p> 
                            
                        <br>
                        <br>
                       
                        <input class="grande mediano mini botonL" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Aceptar&nbsp;&nbsp;&nbsp;" />
                        <!--onClick="location.href='olvido.php'" -->
                       </form> 
                      </div>
                      
                      
                    </div>
                    

          </section><br>    
        </div>        
      <div class="clear"></div>
    
   </div>
 </div>
</div>
   <div class="clear"></div>
     
 
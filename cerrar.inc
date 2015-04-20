


<!--<a href"#" class="ex5 puntero"  data-toggle="modal" data-target="#miventanaolv"> <h3><font color="#61380B"></font></h3></a>-->
<button class="grande mediano mini botonR" data-toggle="modal" data-target="#miventanacerr" type="button" >
  &nbsp;&nbsp;&nbsp;Cerrar Sesion&nbsp;&nbsp;&nbsp;
 </button> 
      <div class="modal fade" id="miventanacerr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!--los tres contenedores tienen que estar siempre ya que será para el llamamiento-->
      <div class="modal-dialog imgtam3">
        <div class="modal-content imgtam2 colorpop" >
          <div class="modal-header"><h3>Cerrar Sesion</h3>  </div>
          <a href="Cocina.php" data-dismiss="modal" class="btn">Cancelar</a>
          <div class="modal-body">

              <section id="miSlidecerr" class="carousel slide">
                    
                    <div class="carousel-inner pop">
                      <div class="item active">
                       
                        <p> </p>
                        <form  action="Cocina.php" method="post" enctype="multipart/form-data" > 
                          
                            <?php 
                          //                QUITAR
                                require_once("borrar.inc");
                            
                            ?>
                        <br>
                        <br>
                       
                        <input class="grande mediano mini botonL" type="submit" name="Aceptar" value="&nbsp;&nbsp;&nbsp;Confirmar&nbsp;&nbsp;&nbsp;" />
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
     
 
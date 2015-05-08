
<?php
  session_start();
  require_once("define.php");
  require_once("cab.inc");
  require_once("Listas.inc");
?>



  <div class="row">
    <div class="col-sm-12 jumbotronmio"></div>
   
      <!--<blockquote><blockquote><h1><font color="#61380B">ARROCES VARIOS</font></h1></blockquote></blockquote>     sangrar-->
      <h1><font color="#61380B">TRADICIONAL Y MAS.........</font></h1>
      
      <p>España tiene una gastronomía extensa, variada y sobre todo: ¡muy sabrosa! Por ello te proponemos que realices un tour a través de las recetas que únicamente encontrarás en nuestra tierra. Se trata de platos que han ido pasando de generación en generación creando un legado inigualable. Porque, al fin y al cabo, tenemos un país para comérselo. </p>
      <p>Por ello estos son 10 platos típicos de España que debes probar una vez en la vida...¡¡¡¡¡
      <a href="http://www.skyscanner.es/noticias/10-platos-tipicos-de-espana-que-debes-probar-una-vez-en-la-vida"  role="button" onclick="abrir(this.href);return false">Leer más....</a></p>
      
   </div>
   <div class="clear"></div>

  <div class="row">
    <div class="col-sm-4  cajachoco">
     <?php require_once("Abuela.inc");?>
     <ul>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Lentejas.pdf');return false">Lentejas</a></li>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Cazuela-Merluza.pdf');return false">Cazuela de Merluza</a></li>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Pollo-Salsa.pdf');return false">Pollo en salsa</a></li>
        
     </ul>	
    </div>
    <div class="col-sm-2 cajachoco">
     
     <ul>
        <img class="imgcajas" alt="Cocina de la abuela" src="fotos/cocina-abuela.jpg">
     </ul> 
    </div>
   
    <div class="col-sm-4  cajachoco">
      <?php require_once("Regional.inc");?>
      <ul>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Migas.pdf');return false">Migas</a></li>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Fabada.pdf');return false">Fabada Asturiana</a></li>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Cocido.pdf');return false">Cocido Madrileño</a></li>
     </ul>	
    </div>
     <div class="col-sm-2 cajachoco">
    
     <ul>
        <img class="imgcajas" alt="Regional" src="fotos/cocina-regional.jpg">
     </ul> 
    </div>
  </div>

  <div class="clear"></div>

<div class="row">
    <div class="col-sm-4  cajachoco">
     <h3><font color="#61380B">De cuchara</font></h3>
     <ul>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Sopa.pdf');return false">Sopa de Esparragos y ajo</a></li>
       	<li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Sopa-Ajo.pdf');return false">Sopa Castellana</a></li>
        <li><a class="ex5" href="#" onclick="abredoc('Recetas/Regional/Crema-Calabaza.pdf');return false">Crema de Calabaza</a></li>
     </ul>	
    </div>
    <div class="col-sm-2 cajachoco">
    
     <ul>
        <img class="imgcajas" alt="Cuchara" src="fotos/cocina-cuchara.jpg">
     </ul> 
    </div>
 
    <div class="col-sm-6  cajachoco">
     
      <ul>
        <img class="imgmapa" alt="Infografia - Mapa gastronomico de platos tipicos" src="fotos/cuchara.jpg">
        
     </ul>  
    </div>

</div>
				<script src="bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
        <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<?php
  require_once("pie.inc");
?>
			
		var arrp = new Array(10);
		var arrs = new Array(10);
		var arrt = new Array(10);
		var tabr = new Array(10);
		var tabg = new Array(10);
	
		
		var p = 0;
		var s = 0;
		var t = 0;

		var x = 0;
		var y = 0;
		var z = 0;


function cargarprimeros()
{
		
	
	//              BUENO .................................................................................
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';
	//arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" > Crema de calabacin </a>';

	
	arrp[0]='<a href="http://www.gallinablanca.es/receta/crema-de-calabacin/" onclick="abrir(this.href);return false"> Crema de Calabacin </a>';
	arrp[1]='<a href="http://www.recetasdiarias.com/recetas/arroz/arroz-a-la-cubana/" onclick="abrir(this.href);return false"> Arroz a la Cubana </a>';
	arrp[2]='<a href="http://www.recetasdemama.es/2011/01/crema-de-puerros/" onclick="abrir(this.href);return false"> Sopa de Puerros </a>';
	arrp[3]='<a href="http://www.lentejas.net/" onclick="abrir(this.href);return false"> Lentejas </a>';
	arrp[4]='<a href="http://www.vegetarianismo.net/recetas/habichuelas.html" onclick="abrir(this.href);return false"> Judias con Arroz </a>';
	arrp[5]='<a href="http://www.recetamacarrones.com/" onclick="abrir(this.href);return false"> Macarrones </a>';
	//arrp[6]='<a href="http://cocina.facilisimo.com/ensalada-murciana" onclick="abrir(this.href);return false"> Ensalada Murciana   </a>';
	arrp[6]='<a href="http://cocina.facilisimo.com/ensalada-murciana" onclick="abrir(this.href);return false"> <img	src="Fotos/EM.jpg"  alt="Ensalada Murciana" title="Ensalada Murciana" class="imgrecetas">   </a>';
	arrp[7]='<a href="http://www.recetasdiarias.com/recetas/ensalada/ensalada-de-pasta/" onclick="abrir(this.href);return false"> Ensalada de Pasta </a>';
	arrp[8]='<a href="http://placeralplato.com/sopas/sopa-fideos-casera" onclick="abrir(this.href);return false"> Sopa de Fideos </a>';
	arrp[9]='<a href="http://www.hogarutil.com/cocina/recetas/ensaladas-verduras/listado-1321.html" onclick="abrir(this.href);return false"> Menestra </a>';
		
}


function cargarsegundos()
{
	
	
	arrs[0]='<a href="http://www.recetasdiarias.com/recetas/pescado/atun-a-la-plancha/" onclick="abrir(this.href);return false"> Atun Plancha </a>';
	arrs[1]='<a href="http://www.recetatortilladepatatas.com/" onclick="abrir(this.href);return false"> Tortilla Española </a>';
	arrs[2]='<a href="http://www.marmitako.net/" onclick="abrir(this.href);return false"> Marmitako </a>';
	arrs[3]='<a href="http://www.hogarutil.com/cocina/recetas/lomo.html" onclick="abrir(this.href);return false"> Lomo </a>';
	arrs[4]='<a href="http://www.mis-recetas.org/recetas/search?text=boquerones" onclick="abrir(this.href);return false"> Boquerones </a>';
	arrs[5]='<a href="http://www.cocinaconmarta.com/2014/11/pollo-al-chilindron.html" onclick="abrir(this.href);return false"> Pollo al chilindron </a>';
	arrs[6]='<a href="http://www.recetasdiarias.com/recetas/huevo/huevos-fritos/" onclick="abrir(this.href);return false"> Huevos Fritos </a>';
	arrs[7]='<a href="http://www.hogarutil.com/cocina/recetas/carnes/listado-1425.html" onclick="abrir(this.href);return false"> Conejo </a>';
	arrs[8]='<a href="http://www.polloensalsa.net/" onclick="abrir(this.href);return false"> Pollo en salsa </a>';
	arrs[9]='<a href="http://www.cocinasalud.com/chuletas-cordero-plancha/" onclick="abrir(this.href);return false"> Chuletas de cordero </a>';

	
}
function cargarterceros()
{
	
	
	arrt[0]='<a href="http://cocina.facilisimo.com/pechuga-de-pollo-a-la-plancha" onclick="abrir(this.href);return false"> Pechuga a la plancha </a>';
	arrt[1]='<a href="http://www.recetafajitas.com/" onclick="abrir(this.href);return false"> Fajitas </a>';
	arrt[2]='<a href="http://www.hogarutil.com/cocina/recetas/queso-fresco.html" onclick="abrir(this.href);return false"> Queso Fresco </a>';
	arrt[3]='<a href="http://www.mis-recetas.org/recetas/search?text=sandwiches" onclick="abrir(this.href);return false"> Sandwich </a>';
	arrt[4]='<a href="http://www.mytaste.es/b/alitas-de-pollo-fritas.html" onclick="abrir(this.href);return false"> Alitas Fritas </a>';
	arrt[5]='<a href="http://www.mis-recetas.org/recetas/search?text=tortilla+francesa" onclick="abrir(this.href);return false"> Tortilla Francesa </a>';
	arrt[6]='<a href="http://cocina.facilisimo.com/macedonia-de-frutas" onclick="abrir(this.href);return false"> Macedonia de Frutas </a>';
	arrt[7]='<a href="http://www.recetasgratis.net/Huevos-rellenos-busqCate-1.html" onclick="abrir(this.href);return false"> Huevos Rellenos </a>';
	arrt[8]='<a href="http://www.recetasdiarias.com/recetas/sopas-cremas/crema-de-champinones/" onclick="abrir(this.href);return false"> Crema de Champiñones </a>';
	arrt[9]='<a href="http://www.mis-recetas.org/recetas/show/34612-revuelto-de-gulas?ref=search" onclick="abrir(this.href);return false"> Revuelto de Gulas </a>';
	
}
function cargarceldas()
	{
		
		
					/*Genera nº aleatorios */

			for (x=0;x<=10;x++)
			{
				tabr[x] = Math.round(Math.random()*9);
			}
					/*inicializamos tabg*/

			for (x=0;x<=10;x++)
			{
				tabg[x] = -1;
			}

			tabg[z]=tabr[z];

			for (x=1;x<=10;x++)
			{
				for(y=0;y<=10;y++)
				{
					if (tabg[y]==tabr[x])
					{
						tabr[x]=Math.round(Math.random()*9);
						y=0;
					}
					else
					{
						if (tabg[y+1]==-1)
						{
							z=z+1;
							tabg[z]=tabr[x];
							y=11;
						}
					}
					

				}
				
			}


			for (y=1;y<=3;y++)
			{
				

				for (x=1;x<=7;x++)
						
				{
					var p = tabg[x];				
					var s = tabg[x+1];					
					var t = tabg[x+2];
					switch(y)
					{
						case 1:
							document.getElementById("tablamenus").rows[y].cells[x].innerHTML = arrp[p];
							break;
						case 2:
							document.getElementById("tablamenus").rows[y].cells[x-1].innerHTML = arrs[s];
							break;
						case 3:
							document.getElementById("tablamenus").rows[y].cells[x].innerHTML = arrt[t];
							break;
						default:
							alert("Error al cargar tabla");
							break;
					}

							
				}	
			}	
	}
function abrir (URL)
{ 
  x = (screen.width / 2) - (1000/2);
  y = (screen.height / 2) - (750/2);

  window.open(URL,"ventana1","width=1000,height=750,scrollbars=NO,,left= "+ x + ",top=" + y +""); 
} 

function refrescar()
{
		location.reload(true);
}
function paginicio()
{
	window.location.href=("Cocina.php");
	/*    window.location("cocina.php");*/
}
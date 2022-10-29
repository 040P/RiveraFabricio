
<?php
include("head.php");
?>


<?php
include("marco-right.php");
?>
   
 <div style="float:left; width:60%; margin:60px auto; padding:1vw">
   <div  style="width: 100%;">     
    <div style="width: 100%; height:100%; margin: auto ; display:inline-block;" >
       <div style=" width:100%; height: 100%; top:0; font-size:20px; text-align:center; float:left;">
        	<h1>¿Quién es Fabricio Rivera?</h1>
       		 <hr>
             
          <div id="posteo" style="text-align: left; font-size:0.5vw;">
                Posteado por:  Fabricio Rivera<br>
                Fecha: 2022-10-25 <br>
          </div>
        </div>
    </div>
  </div>
  <div style="width: 100%; height:100%;" >
           <div  style="text-align:justify; font-size: 20px;">
                   <p class="eys-parrafo">Hola, yo soy Fabricio Rivera, estudiante de la carrera de Ingeniería en Tecnología de la Información 
                    esmeraldeño sigo formándome aun, mi estudio empecé hace 3 años en la Universidad Tecnica Luis Vargas Torres, mi anelo es seguir 
                    aprendiando muchas cosas más en el mundo  de la Tencnología y asi aportar en un futuro cercano para la sociedad con mis conocimientos adquiridos a lo largo de mi estudio. 

                  </p>
                   <p class="eys-parrafo">Desde mís estudios secundarios me llamo mucho el interes por las ciencias y la tecnología, quiezas quería saber con cierta exactitud como funcionaban en 
                    las tareas diarias que el hombre laboraba  y ver que capacidad que tiene estas 
                    dos áres del conocimiento de dar solución a muchos probemas de la sociedad; es por eso que desde que termine mis estudios estudios secudarios, decidí estudiar una carrera de interes 
                    en el mundo de la programación de computadoras. </p>
<p class="eys-parrafo"> El primer lenguaje con el cual empecé a programar en el segundo ciclo de universidad fue el <b><a href="https://es.wikipedia.org/wiki/C%2B%2B"> C++</a></b>  para ese tiempo programabamos en el teléfono con un  emulador llamado termux ya que no contabamos con computadoras para ese entonces.</p>

   <div id="blog-seccion2"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis estudios</h2> 
    
                   <p class="eys-parrafo">Mis estudios secundarios los realice en el colegio antes llamado "Experimental Luis Vargas Torres" donde me gradue en el año 2011, de la especialidad de Físico-Matemático, en cuanto me gradue viaje a Riobamba para rendir una prueba e ingresar a la universidad y  seguir mis estudios universitarios 
                    en la Escuela Politécnica de Chimborazo donde me fue imposible el ingreso a la universidad, gracias a la otra oportunidad que se me brindo en la  UTELVT, he dedicado mi tiempo y lo sigo haciendo con el fin de formarme  profesionalmente .</p>

   <div id="blog-seccion3"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mi perfil informático</h2>     
                   <p  class="eys-parrafo">Mi perfil tecnológico es la programación de computadoras, mi primer programa lo hice en el leguaje C++, utilizando mi propio computador, un pequeño Sistema de Facturacion e Inventario.</p> 
                   <p  class="eys-parrafo">Hoy en día sigo aprendiendo a programar aplicaciones web combinando HTML, CSS, JavaScrip,PHP y Java.</p>
   <div id="blog-seccion4"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis Hooby</h2> 
    

                   <p   class="eys-parrafo">Me gusta la lectura, así que en los ratos libres me encanta actualizar mis conocimientos leyendo manuales de los leguajes de progración que namejo, y tambien muchos noticias de las ultimas tendencias en tecnología.</p>
                   <p   class="eys-parrafo"> </p>
       

                   

               <hr>
               <div style=" bottom: 0; margin-bottom: 0;   width:100%; display: inline-block;" >
                  <div style="width: 40%;  float: left;">
                   <a href="#">&#171;   Previo</a>
                  </div>

                  <div style="width: 40%; float: right; text-align: right;">
                   <a href="apendiendo-cpp">Programa para aprender a programar &#187;</a>
                  </div>

                </div>
           </div>
  </div> 

  </div>




<?php
include("marco-left.php")
?>
 
<script >  

 document.title="Fabricio"; 
document.getElementById("foto").src="./images/stalin.png";
document.getElementById("elnombre").innerHTML="Fabricio Rivera";

 document.getElementById("blog-indice").innerHTML="<p><b>Contenido</b></p><hr> <p><a href='#'>inicio</a></p><p><a href='#blog-seccion2'>Estudios</a></p><p><a href='#blog-seccion3'>Conocimiento informático</a></p><p><a href='#blog-seccion4'>Hooby</a></p>";

 document.getElementById("blog-relacionados").innerHTML="<p><b>Temas relacionados:</b></p><hr> <p><a href='eys-kevin.php'>Kevin Aguilar</a></p><p><a href='eys-damaris.php'>Damaris Viallalva</a></p> ";
 </script>
 
<?php
include("foot.php")
?>

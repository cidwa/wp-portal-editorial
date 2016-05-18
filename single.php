<?php
get_header();
the_post();
?>



	    <div class="container">
	        <div class="row">
<ul class="nav nav-tabs">
  <li class="active"><a href="#tab_a" data-toggle="tab">DESCRIPCIÓN</a></li>
  <li><a href="#tab_b" data-toggle="tab">INFORMACIÓN ADICIONAL</a></li>
  <li><a href="#tab_c" data-toggle="tab">RESEÑAS</a></li>
</ul>
<div class="tab-content">
        <div class="tab-pane active" id="tab_a">
           <br>
            <p>"A tiro de fuego" surge en un contexto donde la crisis es una constante dentro de una compleja realidad marcada por la escisión y la desigualdad. Convencidos del poder de la unidad, la convocatoria de este Encuentro Nacional de Talleres de Gráfica busca reunir y mostrar la voz de distintos grupos que hablan desde las lógicas diferencias del lenguaje y las distintas coordenadas de la República Mexicana; conjunta desde las obras de artistas noveles, hasta de los de amplia trayectoria y reconocimiento. Confluyen ahora cuatro generaciones, mostrándose a partir de la singularidad (sin afanes exhaustivos) en maneras y modos de identidad colaborativa, unidas por el común denominador de la gráfica como entramado estructural y cultural.</p>
        </div>
        <div class="tab-pane" id="tab_b">
           <br>
            <h4>Pane B</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div>
        <div class="tab-pane" id="tab_c">
           <div class="row">
               <div class="col-lg-12">
                  <br>
                   <h5><strong>Escribe tu Propia Revisión</strong></h5>
                   <p>¿Cómo valoras este producto?</p>
                   <div class="form-control">
                    <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                       </label>
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                       </label>
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                       </label>
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox4" value="option4"> 4
                       </label>
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox5" value="option5"> 5
                       </label>

                   </div>
                </div>
           </div>
           <br><br>
                 <form>
                       <div class="row">
                           <div class="col-lg-6">
                               <div class="form-group">
                          <label for="Apodo">Apodo</label>
                          <input type="apodo" class="form-control" id="apodo" placeholder="Apodo">
                        </div>
                         <div class="form-group">
                           <label for="Resumen">Resumen</label>
                           <input type="resumen" class="form-control" id="resumen" placeholder="Resumen">
                         </div>
                           </div>
                           <div class="col-lg-6">
                              <label for="Revisión">Revisión</label>
                               <textarea class="form-control" rows="3"></textarea>
                               <br>
                               <button type="submit" class="btn btn-default">Enviar</button>
                           </div>
                       </div>
                     <br><br>   
                 </form>
        </div>
        
</div><!-- tab content -->
</div><!-- end of container -->
	    </div>

	
	
<!----Para cuando este el footer--->   
<?php get_footer(); ?>
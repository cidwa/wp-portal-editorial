<?php 
    get_header();
    the_post();
    /*Template Name: Formulario*/

?>
    <!--Formulario-->

    <div class="container">
        <div class="row">
           <h2 class="media-heading"><?php the_title(); ?></h2>  
           <?php the_content(); ?>  
        </div>
        <br>
    </div>
    <section class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="col-md-4">
                    <h3>Direccion</h3>
                    <br>
                    <span class="glyphicon glyphicon-flag btn-lg col-xs-1"></span>
                    <ul type="none" class="contacto col-xs-10">
                        <li>Av. de los alcalfores s/n</li>
                        <li>Col. Santa Cruz Acatlán, CP. 53150</li>
                        <li>Naucalpan de Juarez, México</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Telefonos</h3>
                    <br>
                    <span class="glyphicon glyphicon-earphone btn-lg col-xs-1"></span>
                    <ul type="none" class="contacto col-xs-10">
                        <li>55 5622-6189</li>
                        <li>01800-50-10-400</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Correo</h3>
                    <span class="glyphicon glyphicon-envelope btn-lg"></span>
                   
                    <a href="#">contacto.editorial@apolo.acatlan.unam.mx</a>
                        <!--<li><a href="#">htrujano@libros.unam.mx</a></li>-->
                    
                </div>

                <br>
            </div>
        </div>
        <br>
        <br>


        <div class="row">

            <div class="col-lg-8">
                <form action="#" method="post" class="contacto">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="nombre" name="nombre"  class="form-control" id="nombre" placeholder="Saul Salomon Ramirez Zuñiga">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="correo" name="correo" class="form-control" id="correo" placeholder="ejemplo@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="estudio">Tema del mensaje:</label>
                        <input type="tema" name="tema" class="form-control" id="estudio" placeholder="Sugerencias">
                    </div>
                    <label for="texto">Escribe tu opinion:</label>
                    <textarea name="opinion" class="form-control" rows="3" placeholder="Escribe algo que quieras compartir o que nos quieras decir"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


    </section>
    <br>
    <br>

<?php get_footer(); ?>
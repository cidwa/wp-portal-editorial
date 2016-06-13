<?php
get_header();
?>
    <div class="container">
        <div class="row">
           <h2 class="media-heading">Contacto</h2>    
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
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="nombre" class="form-control" id="nombre" placeholder="Saul Salomon Ramirez Zuñiga">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="correo" class="form-control" id="correo" placeholder="ejemplo@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="estudio">Tema del mensaje:</label>
                        <input type="estudio" class="form-control" id="estudio" placeholder="Sugerencias">
                    </div>
                    <label for="texto">Escribe tu opinion:</label>
                    <textarea class="form-control" rows="3" placeholder="Escribe algo que quieras compartir o que nos quieras decir"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <a href="http://derecho.posgrado.unam.mx/congresos/CurIntActDerAdmin/imgs/mapa100.PNG" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/img/croquis.PNG" alt="..." class="img img-responsive"></a>
                        <div class="caption">
                            <h3>Croquis</h3>
                            <p>Este croquis es una vez llegando a la FES ACATLAN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.3374991860273!2d-99.248562885889!3d19.484110286855095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2039fbdc5a7b3%3A0xc950aed67b794f8f!2sFES+Acatl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1459319997548" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>

    </section>
    <br>
    <br>

<?php get_footer(); ?>
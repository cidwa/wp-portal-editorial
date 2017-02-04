<?php 
    get_header();
    the_post();
    /*Template Name: Formulario*/

?>
    <!--Formulario-->

    <div class="container">
        <div class="row">
            <h2 class="media-heading">Ubicación de la FES Acatlán</h2> 
            <br><br>
            <div class="col-md-8 col-sm-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.3374991860273!2d-99.248562885889!3d19.484110286855095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2039fbdc5a7b3%3A0xc950aed67b794f8f!2sFES+Acatl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1459319997548" width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
                <div class="col-md-4 col-sm-5">
                    <div class="thumbnail">
                        <a href="http://derecho.posgrado.unam.mx/congresos/CurIntActDerAdmin/imgs/mapa100.PNG" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/img/croquis.PNG" alt="Croquis FES ACATLAN" class="img img-responsive"></a>
                        <div class="caption">
                            <h3>Croquis</h3>
                            <p>Este croquis es para llegar a la FES Acatlán</p>
                        </div>
                    </div>
                </div>
        </div>
        <br>
    </div>
    <br>
    <br>
    
    <section class="container">
       
            <div class="col-xs-12">
                  <h2 class="text-center">Ubicación de la librería dentro de la FES Acatlán</h2>
                  <br>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                 <a  target="_blank"> <img src="<?php echo get_template_directory_uri();?>/img/FOTO_LIBRERÍA_2.jpg" alt="Croquis Fes Acatlan" class="img img-responsive"></a>
            </div>
            <div class="col-sm-1"></div>
            
        <br>
        <br>
        <br>
        


    </section>
    <br>
    <br>



<?php get_footer(); ?>
<?php
/*
Template Name: Search Page
*/
?>
   <?php 
    get_header(); 
    the_post();
?>


    <!--estamos en page.php-->
    <h2>estamos en searchpage.php</h2>

    <div class="container">
        <section>

            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="page-tittle">
                    <h1>Ciencias Socioeconómicas</h1>
                </div>
                <div class="col-md-12">
                    <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">
                </div>
                <div class="col-md-12">

                    

                </div>
            </div>
            <br>
            <br>
            <br>



            <div class="col-lg-3">
                <h3 class="media-heading">Publicaciones</h3>

                     <?php wp_get_archives( $vector ); ?>

            </div>
        </section>
        <br>
        <br>
        <br>
    </div>










    <?php get_footer(); ?>
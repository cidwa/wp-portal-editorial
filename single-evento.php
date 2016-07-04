<?php get_header(); ?>



    <div id="conteiner">
           <!-- estamos en single-evento.php -->

        <h2>single-evento.php</h2>



        <?php if (have_posts()) : 
                        
            while (have_posts()) : the_post(); ?>


            <div class="container carac">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">

                        <?php if(has_post_thumbnail() ): ?>
                            <div class="imagen-post-thumbnail">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>

                            </div>
                            <?php endif; ?>

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <p>Disponibilidad: <small>En existencia</small></p>
                        <p>Mira otros productos de Dirección General de Publicaciones y Fomento Editorial</p>
                        <p><strong>Autor:</strong> Parra Toledo Araceli</p>
                        <p><strong>Tamaño:</strong> 16 X 19 cm</p>
                        <p><strong>ISBN/ISSN:</strong> 978-607-027-686-6</p>
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="img/libro.jpg" alt="libros">
                            </div>
                            <div class="col-lg-9">
                                <h2><strong>Libro Impreso</strong></h2>
                            </div>
                        </div>
                        <br>
                        <div class="linea"></div>

                        <p class="text-justify">
                            <?php the_content(); ?>
                        </p>
                        <br>
                        <!--Botones de vista previa y boton de compra-->
                        <div class="col-sm-12">

                            <div class="col-md-4 col-sm-6 col-xs-12 ">
                                <a href="pdf/gobernanza.pdf" target="_blank">
                                    <button class="btn btn-primary"><span></span>Ver muestra gratis</button>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 ">
                                <a href="http://www.libros.unam.mx/area-tematica/ciencias-sociales/derecho/la-lengua-del-derecho-y-el-derecho-de-la-lengua-direccion-general-de-publicaciones-y-fomento-editorial.html">
                                    <button class="btn btn-primary"><span></span>$250.00 Comprar</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>

            <?php endwhile; ?>


                <?php else :
      echo '<p>no content found</p>'
          
      ?>

                    <h2>Not Found</h2>

                    <?php endif; ?>
    </div>










    <?php get_footer(); ?>
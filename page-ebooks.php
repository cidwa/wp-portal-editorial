<?php get_header(); ?>


    <!--estamos en archive.php-->
    <h2>estamos en archive.php</h2>



    <div class="container">
        <section>

            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="page-tittle">
                </div>
                <div class="col-md-12">
                    <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">
                </div>
                <div class="col-md-12">
<?php
            $args = array(
                'post_type' => 'eventos',
                'posts_per_page' => '-1',
                'tag' =>'ebook',
            );     
            $the_query = new WP_Query($args); ?>

            <?php  if ( $the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>


                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="caracteres.html" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">
                    
                    <?php
                    if ( has_post_thumbnail() ) {
                         the_post_thumbnail('imagen-libro');
                    }?>
                </a>

                            <div class="col-md-12" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                <p class="text-center">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </p>

                            </div>



                            <div class="col-md-12">
                                <p class="text-center" style="font-weight: bold;">MXN$ 250</p>
                            </div>
                        </div>





                        <?php endwhile; ?>


                            <?php else :
      echo '<p>no content found</p>'
          
      ?>

                                <h2>Not Found</h2>

                                <?php endif; ?>

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
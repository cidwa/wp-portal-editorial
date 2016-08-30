<?php
    get_header();
    the_post();
?>

    <!--estamos en page-eventos.php-->
    <h2>estamos en archive-eventos.php</h2>








    <section class="container">
       
        <div class="col-md-12">
            <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">
        </div>
        <?php
            $args = array(
                'post_type' => 'eventos',
                'posts_per_page' => '-1',
                'tag' =>'EVENTO',
            );     
            $the_query = new WP_Query($args); ?>

            <?php  if ( $the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>



            <br>
            <div class="col-sm-12">
                <div class="col-sm-8">

                    <?php if(has_post_thumbnail() ): ?>
                        <div class="imagen-post-thumbnail">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-evento')); ?>

                        </div>
                        <?php endif; ?>


                </div>
                <div class="col-sm-4">
                    <h3>Informacion</h3>
                    <p><strong>Fechas: </strong> <?php echo get_post_meta($post->ID,'Fechas',true); ?></p>
                    <p><strong>Horario:</strong> <?php echo get_post_meta($post->ID,'Horarios',true); ?></p>
                    <p><strong>Entrada: </strong> <?php echo get_post_meta($post->ID,'Entrada',true); ?></p>
                    <a href="http://www.libros.unam.mx/ventasespecial"><?php echo get_post_meta($post->ID,'Link',true); ?></a>
                </div>
            </div>

            <div class="col-sm-12">
                <br>
                <br>
                <br>
            </div>





            <?php endwhile; ?>


                <?php else :
      echo '<p>no content found</p>'
          
      ?>

                    <h2>Not Found</h2>

                    <?php endif; ?>

                      
    </section>







<?php get_footer(); ?>
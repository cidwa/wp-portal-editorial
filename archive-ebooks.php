<?php get_header(); ?>


    <!--estamos en archive.php-->
    <h2>estamos en archive-ebooks.php</h2>



    <div class="container">
        <section>

            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="page-tittle">
                </div>
                <div class="col-md-12">
                    <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">
                </div>
                <div class="col-md-12 ">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="col-lg-4 col-sm-6 col-xs-12">
                             <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">
                               
                               
                                     <?php
                    if ( has_post_thumbnail() ) {
                         the_post_thumbnail('img img-responsive');
                    }?>
                                
                                
                                
                            </a>                        
                             <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden; text-overflow: ellipsis;">
                                <a href="<?php the_permalink() ?>" style="color:#504f4f;">
                                     <h4 class="text-center subtitulo"  ><?php the_title(); ?></h4>
                            <p class="text-center" >MXN$ 250</p>
                                </a>

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



            
             <div class="col-lg-3 col-md-3 col-sm-4">
                <h3 class="media-heading">Publicaciones</h3>

                                     <?php wp_get_archives( $vectorebooks ); ?>

            </div>
        </section>
        <br>
        <br>
        <br>
    </div>










    <?php get_footer(); ?>
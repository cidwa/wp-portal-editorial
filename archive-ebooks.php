<?php get_header(); ?>





    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-9 col-sm-9 ">
                <div class="page-tittle">
                                    <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">

                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        
                        
                    <?php 
                                     
                    if (have_posts()) : while (have_posts()) : the_post();
                        
                    ?>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12" >
                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">
                               
                               
                                     <?php
                    if ( has_post_thumbnail() ) {
                         the_post_thumbnail('img img-reduction');
                    }?>
                                
                                
                                
                            </a>  
                            </div>
                              
                                                    
                             <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden; text-overflow: ellipsis;">
                                <a href="<?php the_permalink() ?>" style="color:#504f4f;">
                                     <h4 class="text-center subtitulo"  ><?php the_title(); ?></h4>
                            <p class="text-center" >MXN$ <?php echo get_post_meta($post->ID,'Precio',true); ?></p>
                                </a>

                            </div>
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
               
                
            </div>
           

                  <?php get_template_part("partes/menu_year_ebooks"); ?>
            
        </div>
        <br>
        <br>
        <br>
    </div>










    <?php get_footer(); ?>
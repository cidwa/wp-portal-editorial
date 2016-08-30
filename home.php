<?php 
    get_header();
    the_post();
    /*Template Name: Formulario*/
?>
    <!--Formulario-->
    <header class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="media-heading">Noticias</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img class="img img-responsive" src="<?php echo get_template_directory_uri();?>/img/banner.jpg" alt="Slider-3">
            </div>
        </div>
        <br>
        <br>
        <br>
    </header>



    <div class="container">
        <div class="col-md-9">
            <div id="platillos">

                <?php
                $args = array(
                  'post_type' =>'post',
                  'posts_per_page' =>'-1'
              );
                  // the query
                      $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="media ">
                                <div class="media-left">

                                    <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">
                               
                               
                                     <?php
                    if ( has_post_thumbnail() ) {
                         the_post_thumbnail('medium');
                    }?>
                                
                                
                                
                            </a> 

                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary"><?php the_title(); ?></h4>
                                    <h5 class="text-warning"><?php echo get_the_date(); ?> - <small class="text-danger"><?php the_author(); ?></small></h5>
                                    <p class="text-justify">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>



                            <?php endwhile; ?>
                                <!-- end of the loop -->

                                <!-- pagination here -->

                                <?php wp_reset_postdata(); ?>

                                    <?php else : ?>
                                        <p>
                                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                                        </p>
                                        <?php endif; ?>
                                            <br>
            </div>
        </div>





        <div class="col-md-3">
            
        </div>
    </div>




    <br>
    <br>

    <?php get_footer(); ?>
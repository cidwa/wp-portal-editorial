<?php
  get_header();
  the_post(); 
?>
    <header class="container">
       <div class="row">
           <div class="col-lg-12">
               <h2 class="media-heading">Noticias</h2>
               <br>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <img class="img img-responsive" src="<?php echo get_template_directory_uri();?>img/banner.jpg" alt="Slider-3">
           </div>
       </div>
    </header>
    
    <br><br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
             <div id="publicaciones">
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
                <div class="media">
  <div class="col-sm-3 col-md-3 col-xs-12">
    <a href="#">
      <img class="media-object" src="<?php echo get_template_directory_uri();?>img/blog-1.jpg" alt="Bootstrap" class="img img-responsive">
    </a>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-8 col-md-9 col-xs-12">
    <h4 class="text-justify"><?php the_title(); ?></h4>
     <h5 class="text-warning"><?php echo get_the_date(); ?> - <small class="text-danger"><?php the_author(); ?></small></h5>
    <p class="text-justify"><span><?php the_excerpt(); ?></span><a href="<?php the_permalink();?>" class="btn btn-link">Ver más</a></p>
  </div>
  
  <br>
  <br>
  <br>
</div>
            <?php endwhile; ?>
                           <!-- end of the loop -->

                            <!-- pagination here -->

                             <?php wp_reset_postdata(); ?>

                              <?php else : ?>
                                  <p><?php _e( 'Lo sentimos, no se encontró el post. :(' ); ?></p>
                                <?php endif; ?>
                                <br>
            </div>
      </div>
            <div class="col-lg-3">
                <h3 class="media-heading">Publicaciones</h3>
                
                <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">1</span>
                    Mayo 2016
                  </li>
                 <li class="list-group-item">
                    <span class="badge">3</span>
                    Abril 2016
                  </li>
                  <li class="list-group-item">
                    <span class="badge">11</span>
                    Marzo 2016
                  </li>
                  <li class="list-group-item">
                    <span class="badge">0</span>
                    Febrero 2016
                  </li>
                  <li class="list-group-item">
                    <span class="badge">5</span>
                    Enero 2016
                  </li>
                </ul>
            </div>
        </div>
    </div>  
    <br>
    <br>
    <br>
<?php
  get_footer(); 
?>
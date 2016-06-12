<?php
get_header();
the_post(); //Pueda recibir los posts. 
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
               <img class="img img-responsive" src="img/banner.jpg" alt="Slider-3">
           </div>
       </div>
    </header>
    
    <br><br><br>

<div id="noticias">
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


    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="media">
  <div class="col-sm-3 col-md-3 col-xs-12">
    <a href="#">
      <img class="media-object" src="img/blog-1.jpg" alt="Bootstrap" class="img img-responsive">
    </a>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-8 col-md-9 col-xs-12">
    <h4 class="text-justify"><?php the_title(); ?></h4>
    <h5 class="text-warning"><?php echo get_the_date(); ?><small class="text-danger"><?php the_author(); ?></small></h5>
    <?php the_excerpt(); ?>
    <div class=" col-lg-offset-10"><a href="<?php the_permalink();?>"><buttom class="btn btn-link">Ver más</buttom></a></div>
  </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e('Lo sentimos, no se encontro el Post.'); ?></p>
  <?php endif; ?>
  <br>
  </div>
  <br>
  <br>
 
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
get_footer(); ?>
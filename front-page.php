<?php
get_header();
?>
    <div class="container-fluid" >



        <!--Slider de Diego-->
        <div class="container">
            <section class="row">
                
                <div class=" col-sm-1"></div>

                <div class=" col-sm-10">
                    <img id="header-img-logo" src="<?php echo get_template_directory_uri();?>/img/baner_portal_objetivo.jpg" alt="Edicion Acatlan" width="100%";>
                </div>
                <div class=" col-sm-1"></div>






            </section>
        </div>

        <!--//Slider de Diego-->

        <!--Empieza la sección de Bryan-->
        <div class="container espacio-bl">
           
            <div class="col-md-6">
               
               
               
               
                <div class=" titulo row">
                    <h3 class="col-md-10 col-sm-10 col-xs-8">Libros del Mes</h3>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    </div>
                </div>
                
                                  

            <?php
 $args2 = array(
            'post_type' =>array('libros'),
            	'posts_per_page'   => 5,
                'order' =>'DESC',

              );
 
                               
            $query2 = new WP_Query ($args2);



        if ($query2-> have_posts ()) {
               
                                                     
                      
                          
?>   
                
                <div class="row">
                    <div class="jcarousel">
                        <ul>
                           
                         
 <?php
                                    $key_1_value=' ';
                                    $hubolibros=0;
                                    
                                        
                                        while ( $query2->have_posts() ) 
                                        {
                                                $query2->the_post();
                                            
                                   
                            ?>
                            
                            
                            <?php
                                $key_1_value =   get_post_meta($post->ID,'Autor',true);
                                            
                                // Check if the custom field has a value.
                                           
                                           
                                ?>
                            
                            
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            
                
                            
                            
                           
                           
                             <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                   <div id="dos" class="imagen img img-responsive" style="background-image: url('<?php echo $thumb['0'];?>')">
                                       
                                        <div class="mask-slider">
                                            <a class="product-slider-a" href="<?php the_permalink() ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a><a class="product-slider-a" href="http://www.libros.unam.mx/libros-unam-participa-en-la-art-book-fair"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4 class="subtitulo"><?php the_title(); ?></h4>
                                        <p>MXN $<?php echo get_post_meta($post->ID,'Precio',true); ?></p>

                                    </div>
                                </div>
                            </li>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
 <?php
                                      
                                            
                                  $key_1_value=' ';
                                        }
                             
                            ?>
                               
                            

                           

                           

                        </ul>
                    </div>
                </div>
                
                
             
 <?php 
              
                         
                         } 
                                 wp_reset_query(); 

  ?>   
                
                
                
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="col-md-6">
                <div class=" titulo row">
                    <h3 class="col-md-10 col-sm-10 col-xs-8">Eventos</h3>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="jncarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jncarousel-control-next">&rsaquo;</a>
                    </div>
                </div>
                
                
                
                
                 <?php
 $args2 = array(
            'post_type' =>array('eventos'),
            	'posts_per_page'   => 4,
                'order' =>'DESC',

              );
 
                               
            $query2 = new WP_Query ($args2);



        if ($query2-> have_posts ()) {
               
                                                     
                      
                          
?>   
                
                
                
                
                
                <div class="row">
                    <div class="jncarousel">
                        <ul>
                           
                           <?php
                                    $key_1_value=' ';
                                    $hubolibros=0;
                                    
                                        
                                        while ( $query2->have_posts() ) 
                                        {
                                                $query2->the_post();
                                            
                                   
                            ?>
                            
                            
                            <?php
                                $key_1_value =   get_post_meta($post->ID,'Autor',true);
                                            
                                // Check if the custom field has a value.
                                           
                                           
                                ?>
                            
                            
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            
                
                            
                           

                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <div id="dos" class="imagen " style="background-image: url('<?php echo $thumb['0'];?>')">
                                        <div class="mask-slider">
                                            <a class="product-slider-a" href="<?php the_permalink() ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a><a class="product-slider-a" href="http://www.libros.unam.mx/libros-unam-participa-en-la-art-book-fair"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4 class="subtitulo"><?php the_title(); ?></h4>
                                        <p>MXN $0</p>

                                    </div>
                                </div>
                            </li>

                                               
                            
                         
                                
                            
                            
 <?php
                                      
                                            
                                  $key_1_value=' ';
                                        }
                             
                            ?>
                               
                            


                        </ul>
                    </div>
                </div>
                
                           
 <?php 
              
                         
                         } 
                                 wp_reset_query(); 

  ?>   
      
                
                
                
            </div>
            <!--  <div class="col-md-6">
            <div class=" titulo row">
                <h3>Últimas noticias</h3>
            </div>
            <div class="row noticias">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12    ">
                    <div class="thumbnail">
                        <div id="uno" class="imagen">
                            <div class="mask">
                                <a class="leermas" href="http://www.libros.unam.mx/libros-unam-participa-en-la-art-book-fair">Leer más</a>
                            </div>
                        </div>
                        <div class="caption">
                            <h4 class="subtitulo">Jóvenes cuentacuentos en la librería Jaime García Terrés</h4>
                            <p>Libros UNAM participa en la feria del libro de arte LA Art Book Fair, dentro del stand de la Fundación Alumnos 47, en The Geffen Contemporary at MOCA, en Los Angeles, California, del 12 al 14 de febrero de 2016.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12    ">
                    <div class="thumbnail">
                        <div id="dos" class="imagen">
                            <div class="mask">
                                <a class="leermas" href="http://www.libros.unam.mx/libros-unam-participa-en-la-art-book-fair">Leer más</a>
                            </div>
                        </div>
                        <div class="caption">
                            <h4 class="subtitulo">Jóvenes cuentacuentos en la librería Jaime García Terrés</h4>
                            <p>Libros UNAM participa en la feria del libro de arte LA Art Book Fair, dentro del stand de la Fundación Alumnos 47, en The Geffen Contemporary at MOCA, en Los Angeles, California, del 12 al 14 de febrero de 2016.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>-->
        </div>



    </div>

    <?php get_footer(); ?>
<?php 
    get_header(); 
?>



    <!--estamos en page.php-->
    <h2>estamos en search.php</h2>

            <?php
                   $s=get_search_query();
                    $hubolibrosyebooks=0;
                    $args = array(
                           's' =>$s,
                            'post_type' =>array('eventos','libros','ebooks')
                             );

                  
                                // The Query
                     $the_query = new WP_Query( $args );

           ?>

        
         <?php
                                if ( $the_query->have_posts() ) 
                                {
        ?>

        <div class="container">
            <section>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="page-tittle">
                        <h1></h1>
                    </div>
                    <div class="col-md-12">

                    </div>
                    <div class="col-md-12">




                       <?php
                                    
                                    _e("<h2 style='font-weight:bold;color:#000'>Resultados de la busqueda ''".get_query_var('s')."''</h2>");
                                        
                                        while ( $the_query->have_posts() ) 
                                        {
                                                $the_query->the_post();
                                            
                                     if( get_post_type() == 'libros' || get_post_type() == 'ebooks'   ) 
                                    {
                                            $hubolibrosyebooks=1;
                                   
                            ?>


                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">


                                    <?php
                                                            if ( has_post_thumbnail() ) {
                                                                the_post_thumbnail('img img-responsive');
                                                            }
                                                      ?>

                                </a>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden; text-overflow: ellipsis;">
                                    <a href="<?php the_permalink() ?>" style="color:#504f4f;">
                                        <h4 class="text-center subtitulo"><?php the_title(); ?></h4>
                                        <p class="text-center">MXN$ 250</p>
                                    </a>

                                </div>

                            </div>
                            <?php
                                        
                                
                                }
                             }
                                    
                                    if($hubolibros&ebooks==0)
                                {
                            ?>
                                <h2 style='font-weight:bold;color:#000'>No se ha encontrado ningún Libro ni E-book</h2>
                                <div class="alert alert-info">
                                    <p>Lo sentimos, por favor intente nuevamente o utilice una palabra diferente </p>
                                </div>
                                <?php 
                                          wp_reset_postdata(); 
                                } 
                        ?>







                    </div>
                </div>
                <br>
                <br>
                <br>



                <div class="col-lg-3">


                </div>
            </section>




            <br>
            <br>
            <br>
        </div>
              
                                                                                                                                   


        <section class="container">

            <div class="col-md-12">
            </div>


            <?php
                               
                                    
                                    
                                    
                                  $huboeventos=0;
                               
                                    
                                    _e("<h2 style='font-weight:bold;color:#000'>Resultados de la busqueda en eventos ''".get_query_var('s')."''</h2>");
                                    
                                        while ( $the_query->have_posts() ) 
                                        {
                                                $the_query->the_post();
                                            if( get_post_type() == 'eventos'  ) 
                                    {
                                        $huboeventos=1;
                            ?>

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
                        <p><strong>Fechas: </strong>
                            <?php echo get_post_meta($post->ID,'Fechas',true); ?>
                        </p>
                        <p><strong>Horario:</strong>
                            <?php echo get_post_meta($post->ID,'Horarios',true); ?>
                        </p>
                        <p><strong>Entrada: </strong>
                            <?php echo get_post_meta($post->ID,'Entrada',true); ?>
                        </p>
                        <a href="http://www.libros.unam.mx/ventasespecial"><?php echo get_post_meta($post->ID,'Link',true); ?></a>
                    </div>
                </div>



                <div class="col-sm-12">
                    <br>
                    <br>
                    <br>
                </div>




                <?php
                                       
                                    
                                    
                                }
                                    
                                            
                                }
            
                                if($huboeventos==0)
                                {
                            ?>
                    <h2 style='font-weight:bold;color:#000'>No se ha encontrado ningún Evento 1</h2>
                                <div class="alert alert-info">
                                    <p>Lo sentimos, por favor intente nuevamente o utilice una palabra diferente </p>
                                </div>
                    <?php 
                                } 
            
            ?>



        </section>

 <?php 
                                            wp_reset_postdata(); 
                
                                } 
 else
 { ?>
                  
                    <?php 
     
     
     
     
     
	wp_reset_postdata ();

                                } ?>

                   

      
      
      
      
      
     

            <?php
 $args2 = array(
            'post_type' =>array('libros','ebooks')
              );
 
                               
            $query2 = new WP_Query ($args2);



        if ($query2-> have_posts ()) {
               
                                                     
                      
                          
?>                   

          

                                                                                                                                                                                                                                                                                                                                                                                                                                                        
          <div class="container">
            <section>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="page-tittle">
                        <h1></h1>
                    </div>
                    <div class="col-md-12">

                    </div>
                    <div class="col-md-12">


                     <h2 style='font-weight:bold;color:#000'>Resultados de la busqueda del autor "
                     <?php echo $s; ?> "
                     </h2>


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
                                            if (  $key_1_value == $s ) {
                                $hubolibros=1;
                                                
                                            
                                           
                                ?>
                            
                            
                            


                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">


                                    <?php
                                                            if ( has_post_thumbnail() ) {
                                                                the_post_thumbnail('img img-responsive');
                                                            }
                                                      ?>

                                </a>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden; text-overflow: ellipsis;">
                                    <a href="<?php the_permalink() ?>" style="color:#504f4f;">
                                        <h4 class="text-center subtitulo"><?php the_title(); ?></h4>
                                        <p class="text-center">MXN$ 250</p>
                                    </a>

                                </div>
                               
                               
                                

                            </div>
                           
                            <?php
                                        }
                                            
                                  $key_1_value=' ';
                                          wp_reset_query();  
                                        }
                             
                            ?>
                                
                               






                    </div>
                </div>
                <br>
                <br>
                <br>



                <div class="col-lg-3">


                </div>
           
        <br>
            <br>
            <br>
       
       
       
       
       
       
       
        

 <?php 
              
                         
                         } 
 if($hubolibros==0)
 { ?>
                    <h4 style='font-weight:bold;color:#000'>No se ha encontrado nada</h4>
                                <div class="alert alert-info">
                                    <p>Lo sentimos, por favor intente nuevamente o utilice una palabra diferente </p>
                                </div>
                    <?php 
                                } ?>

                   



         </section>




            <br>
            <br>
            <br>
        </div>
              
       
        
        
        
        

        <?php get_footer(); ?>
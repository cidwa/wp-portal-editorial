
   <?php 
 
    get_header(); 
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $tofind = explode('/', $url);
?>

    <!--estamos en page-year.php-->


     

            <?php
 $args2 = array(
            'post_type' =>array('libros')
              );
 
                               
            $query2 = new WP_Query ($args2);



        if ($query2-> have_posts ()) {
               
                                                     
                      
                          
?>                   

          

                                                                                                                                                                                                                                                                                                                                                                                                                                                        
          <div class="container">
        <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="page-tittle">
                    <h1>Libros publicados en   <?php echo $tofind[2]; ?> </h1>
                     <img src="http://www.libros.unam.mx/media//NOVEDADES.jpg" alt="" class="img img-responsive">

                    </div>
                    <div class="row">
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 ">




                       <?php
                                    
                                    $key_1_value=' ';
                                    $hubolibros=0;
                                   
                    
                                    while ($query2->have_posts()) : $query2->the_post(); 
             
                                
                                   
                            ?>
                            
                            
                            <?php
                                $key_1_value =   get_post_meta($post->ID,'año_de_publicación',true);
                                            
                                // Check if the custom field has a value.
                                            if (  $key_1_value ==  $tofind[2] ) {
                                $hubolibros=1;
                                                
                                            
                                           
                                ?>
                            
                            
                            


                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12" >
                                         <a href="<?php the_permalink() ?>" data-toggle="tooltip" title="<?php the_title(); ?>" data-placement="bottom">


                                    <?php
                                                            if ( has_post_thumbnail() ) {
                                                                the_post_thumbnail('img img-reduction');
                                                            }
                                                      ?>

                                </a>
                                    </div>
 <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: hidden; text-overflow: ellipsis;">
                                    <a href="<?php the_permalink() ?>" style="color:#504f4f;">
                                        <h4 class="text-center subtitulo"><?php the_title(); ?></h4>
                                        <p class="text-center">MXN$ 250</p>
                                    </a>

                                </div>
                                    
                                </div>

                               
                               
                               
                               
                                

                            </div>
                           
                            <?php
                                        }
                                            
                                  $key_1_value=' ';
            
            
                    
                               endwhile; 
                                                                       wp_reset_query();  

                            ?>
                                
                               






                    </div>
                        
                        
                    </div>

                    
                    
                    
                    
                    
                </div>
                <br>
                <br>
                <br>



                                 

           
        <br>
            <br>
            <br>
       
       
       
       
       
       
       
        

 <?php 
              
                         
                         } 
                
 if($hubolibros==0)
 { 
                ?>
                    <h4 style='font-weight:bold;color:#000'>No se ha encontrado nada</h4>
                                <div class="alert alert-info">
                                    <p>Lo sentimos, por favor intente nuevamente o utilice una palabra diferente </p>
                                </div>
                    <?php 
                                } ?>

                   


              
              
              
              
                   <?php get_template_part("partes/menu_year"); ?>


              </div>



            <br>
            <br>
            <br>
        </div>
              
        
        
        




    <?php get_footer(); ?>
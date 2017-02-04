



 	

            <?php

               wp_reset_query(); 
wp_reset_postdata(); 


 $args2 = array(
            'post_type' =>array('libros'),
            'posts_per_page' => -1 
              );
 
                               
            $query2 = new WP_Query ($args2);



        if ($query2-> have_posts ()) {
               
                                                     
                      
                          
?>                   



                       <?php
                                    $key_1_value=' ';
                                    $hubolibros=0;
                                    $contador=0;
                                    $bandera=0;
                                        
                                    while ($query2->have_posts()) : $query2->the_post(); 
                                   
                                            
                                  $key_1_value=' ';
            
            
            
                    for ($i = 0; $i <= $contador; $i++)
                 {
                    

                        if(  $arrayaños[$i][0] == get_post_meta($post->ID,'año_de_publicación',true) ){
                            $bandera=1;
                            $arrayaños[$i][1]+=1;
                            
                            
                            break;
                            
                        }
                 }

                           if($bandera==0){
                                $contador++;
                                $arrayaños[][] = get_post_meta($post->ID,'año_de_publicación',true);
                               
                           }
                           
                $bandera=0;
                    
                                            
                                       endwhile; 
                             
                            ?>
                                
                               






                 <div class="col-lg-3 col-md-3 col-sm-4">
                <h3 class="media-heading">Publicaciones</h3>

                <ul class="list-group">
                   
                   <?php 
                   for ($i = 0; $i <$contador; $i++){
                       ?>
                        <a href='http://localhost/year/<?php echo $arrayaños[$i][0]; ?>'>     
                        <li class="list-group-item">
                        <span class="badge"><?php echo  ($arrayaños[$i][1] +1) ; ?></span> <?php echo  $arrayaños[$i][0] ; ?>
                        </li></a>
                            
                        <?php       
                    
                       
                   }
                       
                   ?>
                   
                   
                  
                </ul>
            </div> 
           
        
       
       
       
       
       
        

 <?php 
              
                         
                         } 
                

                ?>
                   



        
        





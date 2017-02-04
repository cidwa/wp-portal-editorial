
            <?php
 $args2 = array(
            'post_type' =>array('ebooks')
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
                                   
                            ?>
                            
                            
                            <?php
                                $key_1_value =   get_post_meta($post->ID,'año_de_publicación',true);
                                            
                                // Check if the custom field has a value.
                                            if (  $key_1_value ==  $tofind[2] ) {
                                $hubolibros=1;
                                                
                                            
                                           
                                ?>
                            
                            
                            
                           
                            <?php
                                        }
                                            
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
                                $contador = $contador+1;
                                $arrayaños[][] = get_post_meta($post->ID,'año_de_publicación',true);
                               
                           }
                           
                $bandera=0;
                    
                                            
                                       endwhile; 
                             
                            ?>
                                
                               






                 <div class="col-lg-3 col-md-3 col-sm-4">
                <h3 class="media-heading">Publicaciones</h3>

                <ul class="list-group">
                   
                   <?php 
                   for ($i = 0; $i < $contador; $i++){
                       ?>
                        <a href='http://localhost/year_ebooks/<?php echo $arrayaños[$i][0]; ?>'>     
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
                   



        
        
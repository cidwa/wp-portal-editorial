<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta marset="<?php  bloginfo('charset')?> ">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head();?>
</head>
    <body <?php body_class(); ?>  >
    
    

<div class="container-fluid"  id="header-div" >
    
     <?php get_template_part("partes/menu"); ?>

        <div class="container">
            <div title="Logo" class="row">
                <div class="col-sm-6 col-xs-10 col-md-5">
                    <img src="<?php echo get_template_directory_uri();?>/img/Fes-Acatlan.png" alt="" class="img img-responsive">
                    
                </div>
                <div class="col-sm-5 col-md-6"></div>
                <div class="col-sm-1 col-xs-2 super col-md-1">
                    <img src="<?php echo get_template_directory_uri();?>/img/ediciones-actlan.png" alt="" class="img img-responsive">
                </div>
            </div>
        </div>
        
        
        <br>
        <div class="container-fluid">
                    <?php get_template_part("partes/menu_2"); ?>

        </div>


</div>
       

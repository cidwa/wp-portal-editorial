<!DOCTYPE html>
<html lang="es" style="">

<head>
    <meta charset="utf-8" />
    <title>Libreria Acatlán</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    
        
        <?php get_template_part("partes/menu"); ?>


        <div class="container">
            <div title="Logo" class="row">
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri();?>/img/unaam-u.jpg" alt="" class="img img-responsive">
                </div>
                <div class="col-md-2 super">
                    <img src="<?php echo get_template_directory_uri();?>/img/libunam.jpg" alt="" class="img img-responsive">
                </div>
            </div>
        </div>

        <!--//Primer menu de navegación por Cairo -->
        <br>
        
        <div class="container">
                    <?php get_template_part("partes/menu_2"); ?>

        </div>


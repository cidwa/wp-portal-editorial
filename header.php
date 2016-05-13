<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title><?php bloginfo("name")?> | <?php bloginfo("description") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/style_footer.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/style_body2.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/style_body4.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/styles-navbar-principal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?> css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?> css/styles-header.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/styles_slider.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> css/s/tyles-navbar-toggle.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?> 
</head>
<body> 
	<?php get_template_part("partes/menu"); ?>
	
<!--Walter segundo menu-->
<div class="container" style="padding-right: 0px;padding-left: 0px;">
    <nav class="navbar navbar-default navbar-principal ">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php get_search_form(); ?>


            <div class="navbar-collapse collapse nav-menu-principal">
                <?php /* Primary navigation */
                    wp_nav_menu( array(
                        'theme_location'=>'menu_principal',
                    'menu' => 'menu_principal',
                    'depth' => 3,
                    'container' => 'navbar-collapse collapse nav-menu-principal',
                    'menu_class' => 'nav navbar-nav',
                     'menu_id' => 'bs-example-navbar',
                    'walker' => new wp_bootstrap_navwalker()
                    ));

                    ?>

            </div>
    </nav>
</div>
<!--//Walter segundo menu-->
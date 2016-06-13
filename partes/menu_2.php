

<!--Walter segundo menu-->
<div class="container">
    <nav class="navbar navbar-default navbar-principal ">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" class="  search-query form-control" placeholder="Buscar en la tienda" />
                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </div>

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
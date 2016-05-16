 <!--Walter segundo menu-->
            <nav class="navbar navbar-default navbar-principal ">
                <div class="container-fluid">
                    <ul class="container">



                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="botton-hamburguer">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Buscar en toda la tienda" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </div>




                        <div class="container nav-menu-principal">
                            
                            <?php /* Primary navigation */
                    wp_nav_menu( array(
                        'theme_location'=>'menu_principal',
                    'menu' => 'menu_principal',
                    'depth' => 3,
                    'container' => 'container nav-menu-principal',
                    'menu_class' => 'nav navbar-nav collapse navbar-collapse',
                     'menu_id' => 'bs-example-navbar',
                    'walker' => new wp_bootstrap_navwalker()
                    ));

                    ?>
                        </div>


                    </ul>

                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        <!--//Walter segundo menu-->

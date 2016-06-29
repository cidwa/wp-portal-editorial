<?php get_header(); ?>
    <!--Esto es index.php-->
    <div id="conteiner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           
            <div id="entrada">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="postmetadata">
                    Por
                    <?php the_author(', '); ?> el
                        <?php the_time('F jS, Y'); ?> en
                            <?php the_category(', ') ?> |
                                <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </p>
                <div class="imagen-post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                    <div class="entry">
                        <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink(); ?>"> Leer mas...</a>
                    </div>
            </div>

            <?php endwhile; ?>


                    <?php else :
      echo '<p>no content found</p>'
          
      ?>

                        <h2>Not Found</h2>

                        <?php endif; ?>
    </div>



    <? php get_sidebar(); ?>

        <?php get_footer(); ?>










            <section class="container-fluid background aire">
                <!--Sección principal-->
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 titulo-texto">
                            <div class="type-wrap color">
                                <div id="typed-strings">
                                    <p>En <strong>CIDWA</strong> somos una gran familia</p>
                                    <p>Nos encanta el <strong>desarrollo web</strong></p>
                                    <p>Unete a construir un mejor <strong>Futuro</strong></p>
                                    <p>Juntos <strong>cambiaremos</strong> al mundo</p>
                                </div>
                                <span id="typed" style="white-space:pre;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row margen">
            <div class="container centro">
                <h1><span class="glyphicon glyphicon-menu-down"></span></h1>
            </div>
        </div>-->
            </section>

            <section class="container aire">
                <div class="row">
                    <h2 class="media-heading">Noticias recientes</h2>
                </div>
                <div class="row">
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/wp-2.png" alt="" class="img img-responsive">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates esse necessitatibus excepturi rerum alias repellat. Atque natus deserunt non et perferendis, eligendi, nam quo? Voluptatem commodi, rerum consequuntur harum repudiandae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/twitter-bootstrap.jpg" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates esse necessitatibus excepturi rerum alias repellat. Atque natus deserunt non et perferendis, eligendi, nam quo? Voluptatem commodi, rerum consequuntur harum repudiandae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/twitter-bootstrap.jpg" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates esse necessitatibus excepturi rerum alias repellat. Atque natus deserunt non et perferendis, eligendi, nam quo? Voluptatem commodi, rerum consequuntur harum repudiandae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/wp-2.png" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates esse necessitatibus excepturi rerum alias repellat. Atque natus deserunt non et perferendis, eligendi, nam quo? Voluptatem commodi, rerum consequuntur harum repudiandae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>

                        </div>
                    </article>
                </div>
            </section>

            <section class="container aire">
                <div class="row">
                    <h2 class="media-heading">Entradas populares</h2>
                </div>
                <div class="row">
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/wp-2.png" alt="" class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae architecto voluptatibus magnam sint cumque quos, quibusdam quis porro? Recusandae maxime suscipit pariatur tempore ad ex, reiciendis sapiente dicta itaque vitae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/twitter-bootstrap.jpg" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae architecto voluptatibus magnam sint cumque quos, quibusdam quis porro? Recusandae maxime suscipit pariatur tempore ad ex, reiciendis sapiente dicta itaque vitae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/twitter-bootstrap.jpg" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae architecto voluptatibus magnam sint cumque quos, quibusdam quis porro? Recusandae maxime suscipit pariatur tempore ad ex, reiciendis sapiente dicta itaque vitae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php print IMG;?>/wp-2.png" alt="..." class="">
                            <div class="caption">
                                <h3>Noticia noticia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae architecto voluptatibus magnam sint cumque quos, quibusdam quis porro? Recusandae maxime suscipit pariatur tempore ad ex, reiciendis sapiente dicta itaque vitae.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ver más</a>
                            </div>
                        </div>

                    </article>
                </div>
            </section>

            <section class="container aire">
                <div class="row">
                    <h2 class="media-heading">Colaboradores</h2>
                </div>
                <div class="row aire">
                    <article class="col-md-3">
                        <img src="<?php print IMG;?>/wut.png" alt="" class="img img-responsive img-circle">
                        <h3>Nombre Apellido</h3>
                    </article>
                    <article class="col-md-3">
                        <img src="<?php print IMG;?>/wut.png" alt="" class="img img-responsive img-circle">
                        <h3>Nombre Apellido</h3>
                    </article>
                    <article class="col-md-3">
                        <img src="<?php print IMG;?>/wut.png" alt="" class="img img-responsive img-circle">
                        <h3>Nombre Apellido</h3>
                    </article>
                    <article class="col-md-3">
                        <img src="<?php print IMG;?>/wut.png" alt="" class="img img-responsive img-circle">
                        <h3>Nombre Apellido</h3>

                    </article>
                </div>
            </section>
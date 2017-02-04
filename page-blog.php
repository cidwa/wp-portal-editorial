<?php get_header(); ?>


    <!--estamos en page-Blog.php-->
    <h2>estamos en page-Blog.php</h2>




    <header class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="media-heading">Noticias</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img class="img img-responsive" src="http://localhost:8080/wp-content/uploads/2016/07/banner.jpg" alt="Slider-3">
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="media">
                    <div class="col-sm-3 col-md-3 col-xs-12">
                        <a href="#">
                            <img class="media-object" src="img/blog-1.jpg" alt="Bootstrap" class="img img-responsive">
                        </a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8 col-md-9 col-xs-12">
                        <h4 class="text-justify">Una pequeña reseña de mi nuevo libro</h4>
                        <h5 class="text-warning">2 de Mayo 2016 - <small class="text-danger">Parra Toledo Araceli </small></h5>
                        <p class="text-justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, placeat dolore minus beatae sed. Sapiente inventore mollitia, autem temporibus velit dolore, repudiandae voluptates quo facilis non a facere veniam maiores.</span>
                            <span>Rerum maiores deleniti quas corrupti id repellat consequatur quos? Voluptatibus at quidem sint tempora illum optio molestiae totam dolore, unde provident libero aliquam, beatae assumenda itaque error quasi blanditiis minima.</span>
                            <span>Alias asperiores, eos reprehenderit. Repudiandae sequi dolorum laudantium, corporis ipsam impedit incidunt veritatis officiis, harum ea animi excepturi consectetur iure tenetur assumenda delectus amet nisi dolorem! Culpa illo iusto eum.</span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste consectetur, mollitia, minima necessitatibus possimus sint, dolorum laborum sed reprehenderit velit, cum suscipit laudantium quia? Quibusdam autem totam sint iste est.</span><a href="#" class="btn btn-link">Ver más</a></p>
                    </div>

                    <br>
                    <br>
                    <br>
                    <div class="col-sm-3 col-md-3 col-xs-12">
                        <a href="#">
                            <img class="media-object img img-responsive" src="img/go.jpg" alt="Bootstrap">
                        </a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8 col-md-9 col-xs-12">
                        <h4 class="media-heading text-justify">Una pequeña reseña de mi nuevo libro</h4>
                        <h5 class="text-warning">23 de Abril 2016 - <small class="text-danger">Parra Toledo Araceli </small></h5>
                        <p class="text-justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, placeat dolore minus beatae sed. Sapiente inventore mollitia, autem temporibus velit dolore, repudiandae voluptates quo facilis non a facere veniam maiores.</span>
                            <span>Rerum maiores deleniti quas corrupti id repellat consequatur quos? Voluptatibus at quidem sint tempora illum optio molestiae totam dolore, unde provident libero aliquam, beatae assumenda itaque error quasi blanditiis minima.</span>
                            <span>Alias asperiores, eos reprehenderit. Repudiandae sequi dolorum laudantium, corporis ipsam impedit incidunt veritatis officiis, harum ea animi excepturi consectetur iure tenetur assumenda delectus amet nisi dolorem! Culpa illo iusto eum.</span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste consectetur, mollitia, minima necessitatibus possimus sint, dolorum laborum sed reprehenderit velit, cum suscipit laudantium quia? Quibusdam autem totam sint iste est.</span><a href="#" class="btn btn-link">Ver más</a></p>
                    </div>

                    <div class="col-xs-12">
                        <h4 class="media-heading text-justify">Una pequeña reseña de mi nuevo libro</h4>
                        <h5 class="text-warning">23 de Abril 2016 - <small class="text-danger">Parra Toledo Araceli </small></h5>
                        <p class="text-justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, placeat dolore minus beatae sed. Sapiente inventore mollitia, autem temporibus velit dolore, repudiandae voluptates quo facilis non a facere veniam maiores.</span>
                            <span>Rerum maiores deleniti quas corrupti id repellat consequatur quos? Voluptatibus at quidem sint tempora illum optio molestiae totam dolore, unde provident libero aliquam, beatae assumenda itaque error quasi blanditiis minima.</span>
                            <span>Alias asperiores, eos reprehenderit. Repudiandae sequi dolorum laudantium, corporis ipsam impedit incidunt veritatis officiis, harum ea animi excepturi consectetur iure tenetur assumenda delectus amet nisi dolorem! Culpa illo iusto eum.</span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste consectetur, mollitia, minima necessitatibus possimus sint, dolorum laborum sed reprehenderit velit, cum suscipit laudantium quia? Quibusdam autem totam sint iste est.</span><a href="#" class="btn btn-link">Ver más</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h3 class="media-heading">Publicaciones</h3>

                     <?php wp_get_archives( $vector ); ?>

            </div>
        </div>
    </div>





    <?php get_footer(); ?>
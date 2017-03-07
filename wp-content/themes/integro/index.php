<?php get_header(); ?>
<body>
    <h1 class="page-heading max-width"> <?php bloginfo(name); ?></h1>
    <div class="grid max-width">
            <div class="block grid--item-9">
                 <div class="block__title">
                    Últimos trabajos
                </div>
                 <div class="block__body grid">
                    <p>Integ.ro una organización especializada en diseñar, estructurar y desarrollar soluciones integrales de tecnología web.</p>
                    <?php 
                        if( have_posts()){
                            while(have_posts()){
                                the_post();
                                ?>
                                <article class="block grid--item-4">
                                    <h2 class="block__title"><?php the_title(); ?><h2>
                                    <div class="block__body">
                                        <!-- Informacion de cada post-->
                                        <p><?php the_excerpt(); ?></p>

                                        <!-- tags de nuetros post-->
                                        <footer><small><?php the_tags(); ?></small></footer>
                                    </div>
                                </article>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <?php  get_sidebar(); ?>
        </div>
        <?php  get_footer(); ?>

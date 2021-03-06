<?php get_header(); ?>
    <h1 class="page-heading max-width"> <?php bloginfo(name); ?></h1>
    <div class="grid max-width">
            <div class="block grid--item-9">
                <div class="block__title">
                    Últimos trabajos
                </div>
                 <div class="block__body grid">
                    <p>Integ.ro una organización especializada en diseñar, estructurar y desarrollar soluciones integrales de tecnología web.</p>
                    <?php
                        if(have_posts()) :
                            while(have_posts()) :
                                the_post();
                    ?>
                                <article class="block grid--item-4 back-gris">
                                    <h2 class="block__subtitle"><?php the_title(); ?><h2>
								<?php 
									if ( has_post_thumbnail()) { ?>
										<picture>
                                            <source srcset="<?php the_post_thumbnail_url('full'); ?>" media="(min-width: 600px)">
                                            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
										</picture>
									<?php
									}
								?>
                                    <div class="block__body2">
                                        <!-- Informacion de cada post-->
                                        <p><?php the_excerpt(); ?></p>
                                        <footer>
                                            <div>
                                            <small><?php the_tags(); ?></small>
                                            </div>
                                            <div>
                                            <b><?php the_author(); ?></b>
                                            </div>
                                                <small><a href="<?php the_permalink(); ?>">Leer Más</a></small>
                                        </footer>
                                    </div>
                                </article>
                    <?php 
                        endwhile;
                        else:
                    ?>
                        <h4>Sin resultados</h4>
                    <?php
                        endif
                    ?>   
                </div>
            </div>
            <?php  get_sidebar(); ?>
    </div>
    
    <div class="max-width">
     <div class="block max-width">
        <div class="block__body">
            <!-- Div de disqus -->
            <div id="disqus_thread"></div>
            <!-- Fin Div de disqus -->
        </div>
    </div>
<div>
    <?php  get_footer();

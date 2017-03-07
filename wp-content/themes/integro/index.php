<?php get_header(); ?>
<body>
    <h1 class="page-heading max-width"> <?php bloginfo(name); ?></h1>
    <div class="grid max-width">
            <div class="block grid--item-9">
                 <div class="block__title">
                    Bloque principal
                </div>
                 <div class="block__body">
                    <p>Integ.ro una organización especializada en diseñar, estructurar y desarrollar soluciones integrales de tecnología web.</p>
                </div>
            </div>
            <?php  get_sidebar(); ?>
        </div>
        <?php  get_footer(); ?>
</body>
</html>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role= "main">

        <?php

        while (have_posts()) : the_post();
        the_title();
        the_content();


        endwhile;
        ?>

        </main><!-- .site-main -->

    </div><!-- .content-area -->

<?php get_footer(); ?>
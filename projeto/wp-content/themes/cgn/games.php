<?php
    /*
        Template Name: Página Games
    */

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;

?>

<?php get_header(); ?>

<main>

    <div class="container-categoria">
        <div class="container">
            <h1 class="titulo-categoria-home"><?php the_title() ?></h1>
            <?php 
                echo do_shortcode('[grid-posts numberposts="6" post_type="games"]');
            ?>
        </div>
    </div>
   
    <?php

        $args = array(
            'post_type'      => 'games',
            'posts_per_page' => 6,
            'category' => 0,
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'date',
        );

        $custom_query = new WP_Query( $args );

    ?>
    
    <?php wpbeginner_numeric_posts_nav($custom_query); ?>

</main>

<?php get_footer(); ?>
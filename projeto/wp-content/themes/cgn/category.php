<?php get_header(); ?>

<main>

    <div class="container-categoria">
        <div class="container">
            <h1 class="titulo-categoria-home"><?php echo get_cat_name($cat); ?></h1>
            <?php 
                echo do_shortcode('[grid-posts category="'.$cat.'" numberposts="6"]');
            ?>
        </div>
    </div>

    <?php wpbeginner_numeric_posts_nav(); ?>

</main>

<?php get_footer(); ?>
<?php
    /*
        Template Name: Home
    */

    get_header();
?>

<main>

    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Cascavel</h2>
            <?php 
                echo do_shortcode('[grid-posts category="2"]');
            ?>
        </div>
    </div>

    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Paraná</h2>
            <?php 
                echo do_shortcode('[grid-posts category="3"]');
            ?>
        </div>
    </div>

    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Entretenimento</h2>
            <?php 
                echo do_shortcode('[grid-posts category="4"]');
            ?>
        </div>
    </div>

    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Economia</h2>
            <?php 
                echo do_shortcode('[grid-posts category="5"]');
            ?>
        </div>
    </div>

    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Brasil</h2>
            <?php 
                echo do_shortcode('[grid-posts category="6"]');
            ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
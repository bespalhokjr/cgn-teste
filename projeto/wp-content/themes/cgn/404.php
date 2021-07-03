<?php get_header(); ?>
    <main>
        <div class="container">
            <div style="margin-top: 20px;" class="conteudo-post">
            <h1 style="font-size: 50px; text-align: center;">404</h1>
            <p style="font-size: 30px;">Parece que o conteúdo que procura não existe ou foi removido.</p>
            </div>
        </div>
    </main>

    <?php
        $categoria = get_the_category();
        $categoria = $categoria[0]->term_id;
    ?>
    
    <div class="container-categoria">
        <div class="container">
            <h2 class="titulo-categoria-home">Veja Também</h2>
            <?php 
                echo do_shortcode('[grid-posts post_type="'. $post_type .'" category="'.$categoria.'" numberposts="6"]');
            ?>
        </div>
    </div>
<?php get_footer(); ?>
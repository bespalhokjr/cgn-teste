<?php get_header(); 

    $post_type = get_post_type( $post->ID );
    $video = get_field('youtube_video');

?>
    <main>
        <div class="container-categoria">
            <div class="container">         

                <div class="conteudo-post">
                    
                    <h1 class="titulo-post"><?php the_title(); ?></h1>
                    
                    <div class="imagem-post">
                        <?php 
                            the_post_thumbnail();
                            if(! has_post_thumbnail(get_the_ID())){
                                echo '<style>.imagem-post{display: none;}</style>';
                            }
                        ?>
                    </div>

                    <?php echo do_shortcode('[youtube video="'.$video.'"]');  ?>

                    <?php  the_content(); ?>

                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
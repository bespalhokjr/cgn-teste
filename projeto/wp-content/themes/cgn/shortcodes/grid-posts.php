<?php

    add_shortcode('grid-posts', function($atts){

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
        $postsPerPage = ($atts['numberposts']) ? $atts['numberposts'] : 3;
        $postOffset = $paged * $postsPerPage;
        
        // var_dump($paged, $postOffset);
        
        $atts = shortcode_atts([
            'post_type' => 'post',
            'category' => 0,
            'paged' => $paged,
            'numberposts' => $postsPerPage,
            'order' => 'DESC',
            'orderby' => 'date',
        ], $atts);
        
        // var_dump($atts);
        
        $html = '';
        
        $posts = get_posts($atts);
        
        // var_dump($posts);
        
        $html .= ' <div class="listagem-da-categoria grids-slider">';
            foreach($posts as $p){
        
                $imagem_url = get_the_post_thumbnail_url($p->ID, 'medium');
                $background_imagem = $imagem_url ? 'background-image: url('. $imagem_url . ');' :  'background-image: url('. get_template_directory_uri()  . '/screenshot.png' . ');';
                // var_dump($imagem_url);'
        
                // var_dump($p); break;
                $data = date('H:i:s - d/m', strtotime($p->post_date));
                $link_post = get_permalink($p->ID);
        
        
                $html .= '<a href="'.$link_post.'" class="listagem-da-categoria--post-container grids-slider-grid-row2-grid1">';
                    $html .= ' <div class="grid-img2" style="'.$background_imagem.' background-size: cover; background-position: center center; " ></div>';
                    $html .= ' <div class="grid-tags">';
                        $html .= '<div class="grid-top-tags">';
                            $html .= '
                                <ul>
                                    <li class="data_pub">'.$data.'</li>
                                    <div class="clear"> </div>
                                </ul>
                            ';
                        $html .= '</div>';
                        
                        $html .= '<div class="grid-top-tags-qt" onclick="location.href="#";">';
                            $html .= '<p class="categoria-listagem-titulo-post">'.$p->post_title.'</p>';
                        $html .= '</div>';
        
                    $html .= ' </div>';
                $html .= '</a>';
        
            }
        $html .= ' </div>';
        
        return $html;
    });
<?php

    add_shortcode('menu-categorias', function(){
            
        $html = '';

        $menu = wp_get_nav_menu_items('menu-categorias');

        global $wp_query;
        $pagina_atual = $wp_query->post->ID;

        if(is_array($menu)){

            $html .= '<ul>';

            foreach($menu as $k => $i){

                $ativo = ($pagina_atual == $i->object_id) ? 'class="active"' : '';

                $html .= '<li '.$ativo.' >';
                    $html .= '<a href="'.$i->url.'" id="pagina-'.$i->object_id.'">';
                        $html .= $i->title;
                    $html .= '</a>';
                $html .= '</li>';

            }

            $html .= '</ul>';
        }

        // var_dump($menu);
        
        return $html;
    });
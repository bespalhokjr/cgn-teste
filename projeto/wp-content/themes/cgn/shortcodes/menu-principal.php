<?php

    add_shortcode('menu-principal', function(){
            
        $html = '';

        $menu = wp_get_nav_menu_items('menu-principal');

        global $wp_query;
        $pagina_atual = $wp_query->post->ID;

        if(is_array($menu)){

            $html .= '<ul>';

            foreach($menu as $k => $i){

                $ativo = ($pagina_atual == $i->object_id) ? 'class="active"' : '';

                $html .= '<li '.$ativo.' >';
                    $html .= '<a href="'.$i->url.'" class="pagina-'.$i->object_id.'" >';
                        $html .= $i->title;
                    $html .= '</a>';
                $html .= '</li>';

            }

            $html .= '</ul>';
        }

        // var_dump($menu);
        
        return $html;
    });
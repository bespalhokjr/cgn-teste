<?php

    add_shortcode('youtube', function($atts){

        $html = '';
        
        $atts = shortcode_atts([
            'video' => false,
        ], $atts);
        
        if($atts['video']){
            $video = str_replace('watch?v=', 'embed/', $atts['video']);
        
            $html .= '<div class="video-post">';
            $html .= '<h2 style="font-size: 20px;">Vídeo</h2>';
                $html .= '<iframe style="width: 100%; height: 400px;" src="'.$video.'"></iframe>';
            $html .= '</div>';
        }
        
        return $html;
    });
<?php
    function wpbeginner_numeric_posts_nav($custom_query = false) {

        if( $custom_query ){
            $wp_query = $custom_query ;
        }else{
            global $wp_query;
        }
        // var_dump($wp_query);
        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;
        
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        // var_dump($paged);
        $max   = intval( $wp_query->max_num_pages );
        
        /** Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;
        
        /** Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }
        
        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
        
        echo '<div class="navigation big-pagenate container">';
        
        echo '<ul class="pagenate-frist">';
            printf( '<li class="frist">%s</li>' . "\n", get_previous_posts_link() );
        echo '</ul>';
        
        echo '<ul class="pagenate-center">' . "\n";
        
        /** Previous Post Link */
        if ( get_previous_posts_link() )
            
        
        /** Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';
        
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        
            if ( ! in_array( 2, $links ) )
                echo '<li style="font-size: 30px; color: #fff;">…</li>';
        }
        
        /** Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }
        
        /** Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li style="font-size: 30px; color: #fff;">…</li>' . "\n";
        
            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }
        
        echo '</ul>';
        if ( get_next_posts_link_custom(null,0, $wp_query) ){
            echo '<ul class="pagenate-last">';
                printf( '<li class="frist">%s</li>' . "\n", get_next_posts_link_custom(null,0, $wp_query) );
            echo '</ul>';
        }
        
        echo '</div>';
    }
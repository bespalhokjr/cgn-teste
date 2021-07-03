<?php

    function get_next_posts_link_custom( $label = null, $max_page = 0 , $wp_query) {
        global $paged;

        if ( ! $max_page ) {
            $max_page = $wp_query->max_num_pages;
        }

        if ( ! $paged ) {
            $paged = 1;
        }

        $nextpage = (int) $paged + 1;

        if ( null === $label ) {
            $label = __( 'Next Page &raquo;' );
        }

        if ( ! is_single() && ( $nextpage <= $max_page ) ) {
            /**
             * Filters the anchor tag attributes for the next posts page link.
             *
             * @since 2.7.0
             *
             * @param string $attributes Attributes for the anchor tag.
             */
            $attr = apply_filters( 'next_posts_link_attributes', '' );

            return '<a href="' . next_posts( $max_page, false ) . "\" $attr>" . preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '</a>';
        }
    }
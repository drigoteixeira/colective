<?php

add_action('after_setup_theme','colective_setup' );

if ( ! function_exists( 'colective_setup' ) ):

function colective_setup() {

	// Habilita o editor visual
	add_editor_style();

	// Habilita Imagens e Thumbs Customizáveis
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 600, 9999 ); 

    // Remove itens da função wp_head();        
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
    remove_action('wp_head', 'check_and_publish_future_post');
    remove_action('wp_head', 'wp_print_styles');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    // Remover barra de admin das paginais
    show_admin_bar(false);

}

endif;


// PAGINACAO

function pagination($prev = '&larr; ', $next = '&rarr;') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
};

// LINK CANONICAL
function fix_links($input) {
    $normalized = str_replace( home_url() . '/', '/', $input);
    $normalized = str_replace( home_url(), '/', '/', $normalized);
    return $normalized;
}

// DELAY PUBLISHING POSTS ON RSS FEEDS

function publish_later_on_feed($where) {
global $wpdb;
if ( is_feed() ) {
    $time_now = gmdate('Y-m-d H:i:s');
    $time_delay = '15'; // integer
    $time_span = 'MINUTE'; //MINUTE, HOUR, DAY, WEEK, MONTH, YEAR
    $where = " AND TIMESTAMPDIFF($device, $wpdb->posts.post_date_gmt, '$time_now') > $time_delay ";
    }
    return $where;
}
add_filter('posts_where', 'publish_later_on_feed');


?>
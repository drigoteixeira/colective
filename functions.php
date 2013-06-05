<?php

// CONFIGURAÇÕES DO TEMA

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


    /* Remove a Barra de Estilo de Admin */
    add_filter( 'show_admin_bar', '__return_false' );
    remove_action('wp_head', '_admin_bar_bump_cb');
    wp_deregister_script('admin-bar');
    wp_deregister_style('admin-bar');

}

add_action('after_setup_theme','colective_setup' );

?>

<?php

// PAGINACAO D

function pagination($prev = '«', $next = '»') {
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
?>
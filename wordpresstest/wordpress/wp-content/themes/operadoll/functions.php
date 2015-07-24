<?php
function register_my_menus() {
    register_nav_menus(
        array( 'header-menu' => __( 'Header Menu' ) )
        );
}
add_action( 'init', 'register_my_menus' );

function operadoll_widgets_init() {
  register_sidebar (array(
    'name'          => __('Sidebar','operadoll'),
    'id'            => "sidebar-widget-area",
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' )
    );
  register_sidebar (array(
    'name'          => __('Left Footer','operadoll'),
    'id'            => "footer-left-widget-area",
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' )
    );
  register_sidebar (array(
    'name'          => __('Right Footer','operadoll'),
    'id'            => "footer-right-widget-area",
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' )
    );
}
add_action('init', 'operadoll_widgets_init');

//Disable comment section in the gallery slider
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

function modify_jquery() {
        if (!is_admin()) {
                // comment out the next two lines to load the local copy of jQuery
                wp_deregister_script('jquery');
                wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');
                wp_enqueue_script('jquery');
        }
}
add_action('init', 'modify_jquery');

//helper function to wire proper url for language setting
function get_relative_permalink( $url ) {
    return str_replace( home_url(), "", $url );
}

?>
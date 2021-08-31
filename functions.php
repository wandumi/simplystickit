<?php 
 /**
     * The main template file
     * 
     * This is the most generic template file in a Wordpress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used t display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @packadge Simplystickit
     * @since 1.0.0
     */

    function simply_stickit_scripts()
    {
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/boostrap.min.js', array( 'jquery' ), '4.6.0', true );
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/boostrap.min.css', array(), '4.6.0', 'all' );

        // Theme main style
        wp_enqueue_style( 'simply-stickit-style', get_stylesheet_uri(), array(), filemtime( get_template_directory().'/style.css' ), 'all' );
    }

    add_action('wp_enqueue_scripts', 'simply_stickit_scripts');

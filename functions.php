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
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array( 'jquery' ), '4.6.0', true );
        wp_enqueue_style( 'main-css', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '4.6.0', 'all' );

        // Theme main style
        wp_enqueue_style( 'simply-stickit-style', get_stylesheet_uri(), array(), filemtime( get_template_directory().'/inc/css/style.css' ), 'all' );
    }

    add_action('wp_enqueue_scripts', 'simply_stickit_scripts');

    /**
     * [simply_stickit_config description]
     *
     * Menus sections
     * @return  [type]  [return description]
     */
    function simply_stickit_config()
    {
        /**
         * Configurations for the menu
         */
        register_nav_menus(
            array(
                'simply_stickit_main_menu' => 'Simply Stickit Main Menu',
                'simply_stickit_top_menu'  => 'Simply Stickit Top Menu',
                'simply_stickit_footer_menu' => 'Simply Stickit Footer Menu'
            )
        );

        /**
         * Adding support for woocommerce
         */
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 255,
            'single_image_width' => 255,
            'product_grid' => array(
                'default_rows' => 2,
                'min_rows' => 1,
                'max_rows' => 10,
                'default_columns' => 2,
                'min_columns' => 1,
                'max_columns' => 4
            )
        ) );

        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        if( !isset( $content_width ))
        {
            $content_width = 600;
        }
    }

    /**
     * Require the woocommerce modifications
     * Check if woocommerce is installed 
     */
    if( class_exists('WooCommerce' ))
    {
        require get_template_directory() . '/inc/woocommerce/wc-modifications.php';
    }
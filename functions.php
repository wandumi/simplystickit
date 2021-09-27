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

    
    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }
    
    add_action( 'after_setup_theme', 'register_navwalker' );

    /**
     * Register Customizer file
     */
    require_once get_template_directory() . '/inc/customizer.php';

    /**
     * Add Scripts and Styles
     */
    
    function simply_stickit_scripts()
    {
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array( 'jquery' ), '4.6.0', true );
        wp_enqueue_style( 'main-css', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '4.6.0', 'all' );

        wp_enqueue_style( 'simply-stickit-fonts', get_stylesheet_uri(), 
            'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet 
            | https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet');
        // Theme main style
        wp_enqueue_style( 'simply-stickit-style', get_stylesheet_uri(), array(), filemtime( get_template_directory().'/inc/css/style.css' ), 'all' );

        wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
        wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
        wp_enqueue_script( 'flexslider.js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', '', true );
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

        // woocommerce image size
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        // custome log sizez
        add_theme_support( 'custom-logo', array(
            'height'      => 152,
            'width'       => 200,
            'flex_height' => true,
            'flex_width'  => true
        ));

        // Error page on the title
        add_theme_support( 'title-tag' );

        // flexslider image sizes
        add_image_size( 'simply-stickit-slider', 1980, 800, array( 'center', 'center'));

        if( !isset( $content_width ))
        {
            $content_width = 600;
        }
    }

    add_action( 'after_setup_theme', 'simply_stickit_config' );

    /**
     * Require the woocommerce modifications
     * Check if woocommerce is installed 
     */
    if( class_exists('WooCommerce' ))
    {
        require get_template_directory() . '/inc/woocommerce/wc-modifications.php';
    }

    
    function simply_stickit_woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

        ?>
        <span class="items"><?php echo WC()->cart->get_cart_contents_count() ?></span>
        <?php
        $fragments['span.items'] = ob_get_clean();
        return $fragments;
    }

    /**
     * Show cart contents / total Ajax
     */
    add_filter( 'woocommerce_add_to_cart_fragments', 'simply_stickit_woocommerce_header_add_to_cart_fragment' );

    /**
     * Widgets and Sidebars
     */

    add_action( 'widgets_init','simply_stickit_sidebars');

    function simply_stickit_sidebars()
    {
        register_sidebar(
            array(
                'name'             => 'Simply Stickit Main Sidebar',
                'id'               => 'simply-stickit-sidebar-1',
                'description'      => 'Drag and drop your widgets here',
                'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'     => '</div>',
                'before_title'     => '<h4 class="widget-title',
                'after_title'      => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'             => 'Sidebar Shop',
                'id'               => 'simply-stickit-sidebar-shop',
                'description'      => 'Drag and drop your WooCommerce widgets here',
                'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'     => '</div>',
                'before_title'     => '<h4 class="widget-title',
                'after_title'      => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'             => 'Footer Sidebar 1',
                'id'               => 'simply-stickit-footer-1',
                'description'      => 'Drag and drop your Footer Sidebar here',
                'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'     => '</div>',
                'before_title'     => '<h4 class="widget-title',
                'after_title'      => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'             => 'Footer Sidebar 2',
                'id'               => 'simply-stickit-footer-2',
                'description'      => 'Drag and drop your Footer Sidebar here',
                'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'     => '</div>',
                'before_title'     => '<h4 class="widget-title',
                'after_title'      => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'             => 'Footer Sidebar 3',
                'id'               => 'simply-stickit-footer-3',
                'description'      => 'Drag and drop your Footer Sidebar here',
                'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'     => '</div>',
                'before_title'     => '<h4 class="widget-title',
                'after_title'      => '</h4>',
            )
        );
    }

    /**
     * Replace the home link URL
     */
    add_filter( 'woocommerce_breadcrumb_home_url', 'simply_stickit_breadcrumb_home_url');
    function simply_stickit_breadcrumb_home_url() {
        return 'https://simplytest.questweb.co.za/products';
    }

    /**
     * Rename "home" in breadcrumb
     */
    add_filter( 'woocommerce_breadcrumb_defaults', 'simply_stickit_breadcrumb_home_text');
    function simply_stickit_breadcrumb_home_text( $defaults ) {
        // Change the breadcrumb home text from 'Home' to 'Products'
        $defaults['home'] = 'Products';
        return $defaults;
    }
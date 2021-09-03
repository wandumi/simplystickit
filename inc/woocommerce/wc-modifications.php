<?php
/*
    * @link https://developer.wordpress.org/document/woocommerce-theme-developer-handbook/#section-3
    * 
    * @packadge Simplystickit
    * @since 1.0.0
    */

    function simply_stickit_wc_modify()
    {
        /**
         * Woocommerce page edits
         */
        add_action( 'after_setup_theme', 'simply_stickit_config', 0);

        add_action( 'woocommerce_before_main_content', 'simply_stickit_open_container_row', 5);
        function simply_stickit_open_container_row()
        {
            echo '<div class="container shop-content"><div class="row">';
        }

        add_action( 'woocommerce_after_main_content', 'simply_stickit_close_container_row', 5);
        function simply_stickit_close_container_row()
        {
            echo '</div></div>';
        }
        
       

        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar');

        //check if the page is the shop page
        if( is_shop() ) 
        {
            add_action( 'woocommerce_before_main_content', 'simply_stickit_add_sidebar_tags', 6 );
            function simply_stickit_add_sidebar_tags()
            {
                echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
            }
            
            add_action('woocommerce_before_main_content','woocommerce_get_sidebar', 7);
    
            add_action( 'woocommerce_before_main_content', 'simply_stickit_close_sidebar_tags', 8 );
            function simply_stickit_close_sidebar_tags()
            {
                echo '</div>';
            }

            add_action( 'woocommerce_shop_loop_item_title', 'the_excerpt', 1);
        }

        add_action('woocommerce_before_main_content','simply_stickit_add_shop_tags', 9 );
        function simply_stickit_add_shop_tags()
        {
            if( is_shop() )
            {
                echo '<div class="col-lg-9 col-md-8 order-1 order-md-2"> ';
            } else {
                echo '<div class="col">';
            }
        }

        add_action('woocommerce_after_main_content', 'simply_stickit_close_shop_tags', 4);
        function simply_stickit_close_shop_tags()
        {
            echo '</div>';
        }
    }

    //fire the function in wp
    add_action( 'wp', 'simply_stickit_wc_modify');

    
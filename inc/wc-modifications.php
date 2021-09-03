<?php
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
    
    add_action( 'woocommerce_before_main_content', 'simply_stickit_add_sidebar_tags', 6 );
    function simply_stickit_add_sidebar_tags()
    {
        echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar');
    add_action('woocommerce_before_main_content','woocommerce_get_sidebar', 7);

    add_action( 'woocommerce_before_main_content', 'simply_stickit_close_sidebar_tags', 8 );
    function simply_stickit_close_sidebar_tags()
    {
        echo '</div>';
    }

    add_action('woocommerce_before_main_content','simply_stickit_add_shop_tags', 9 );
    function simply_stickit_add_shop_tags()
    {
        echo '<div class="col-lg-9 col-md-8 order-1 order-md-2"> ';
    }

    add_action('woocommerce_after_main_content', 'simply_stickit_close_shop_tags', 4);
    function simply_stickit_close_shop_tags()
    {
        echo '</div>';
    }
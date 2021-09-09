<?php
    /**
     * The template for the sidebar containing the shop widget area
     * 
     * @package Simplystickit
     */
?>

<?php if( is_active_sidebar('simply-stickit-sidebar-shop') ): ?>
    
        <?php dynamic_sidebar('simply-stickit-sidebar-shop'); ?>
    
<?php endif; ?>
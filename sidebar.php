<?php
    /**
     * The template for the sidebar containing the main widget area
     * 
     * @package Simplystickit
     */
?>

<?php if( is_active_sidebar('simply-stickit-sidebar-1') ): ?>
    <div class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar('simply-stickit-sidebar-1'); ?>
    </div>
<?php endif; ?>
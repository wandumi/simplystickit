<?php
    /**
     * The footer page
     * 
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @packadge Simplystickit

    */
?>
    <footer  >
       
        <section class="footer-widgets">
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar('simply-stickit-footer-1') ): ?>
                        <div class="col-md-4 col-lg-12">
                            <?php dynamic_sidebar('simply-stickit-footer-1') ?>

                        </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar('simply-stickit-footer-2') ): ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar('simply-stickit-footer-2') ?>

                        </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar('simply-stickit-footer-3') ): ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar('simply-stickit-footer-3') ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-lg-6 col-md-4 col-sm-12">
                        <?php echo get_theme_mod( 'set_copyright', 'Copyright QuestCom - All Rights Reserved' ); ?>
                    </div>
                    <nav class="footer-menu col-lg-6 col-md-8 col-sm-12 text-left text-md-right">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'simply_stickit_footer_menu',
                                )
                            )
                        ?>
                    </nav>

                </div>
            </div>
        </section>
    </footer>
            
    </div>
    <?php wp_footer(); ?>
</body>
</html>
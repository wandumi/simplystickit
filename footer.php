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
    <footer >
       
        <section class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Footer Widget</p>

                    </div>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-lg-6 col-md-6 col-sm-12">
                        <?php echo get_theme_mod( 'set_copyright', 'Copyright QuestCom - All Rights Reserved' ); ?>
                    </div>
                    <nav class="footer-menu col-lg-6 col-md-6 col-sm-12 text-left text-md-right">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'simply_stickit_footer_menu  '
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
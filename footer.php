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
    <footer>
        <section class="footer-widgets">
            <div class="container">
                <div class="row">
                    Footer Widgets
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-12 col-md-6">Copyright</div>
                    <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'simply_stickit_footer_menu'
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
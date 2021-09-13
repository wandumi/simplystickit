<?php
    /**
     * The template for the sidebar containing the main widget area
     * 
     * @package Simplystickit
     */
    get_header(); 

?>
    <div id="primary" class="content-area">
        <div id="main">
            <div class="container">
                <div class="row mt-5">
                   <div class="col-12 col-lg-8 col-md-8">
                        <?php 
                            while( have_posts() ): the_post() ;
                      
                                get_template_part('template-parts/content/content','single');
                        
                                if( comments_open() || get_comments_number() ) : 
                                    comments_template();
                                endif;

                            endwhile;
                        ?>

                    </div>

                    <?php get_sidebar(); ?>

                </div>
                
            </div>
        </div>
    </div>

<?php get_footer(); ?>
<?php
    /**
     * The template for the sidebar containing the main widget area
     * 
     * @package Simplystickit
     */
    get_header(); 

?>
    <div class="content-area">
      
            <mai>
                <div class="container">
                    <div class="row mt-5">
                       
                       
                       
                       <div class="col-12 col-lg-12 col-md-8">
                            <?php 
                             
                                while( have_posts() ): the_post();

                                    get_template_part( 'template-parts/content/content', 'page');
                                    
                                endwhile;
                            ?>

                       </div>

                       
                       
                       
                    </div>
                </div>
            </main>

    </div>

<?php get_footer(); ?>
 
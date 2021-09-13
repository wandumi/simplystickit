<?php
    /**
     * The template for the sidebar containing the main widget area
     * 
     * @package Simplystickit
     */
    get_header(); 

?>
    <div class="content-area">
        <main>
            <section class="default_posts">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 col-lg-9 col-md-8">
                            <?php 
                                the_archive_title( '<h1 class="archive-title>','</h1>');
    
                                if( have_posts() ) :
                                    while( have_posts() ): the_post();
                            
    
                                        get_template_part('template-parts/content/content', 'archive');
    
                            
                                    endwhile;
                                // Pagination for posts 
                                the_posts_pagination( array(
                                    'prev_text' => 'Previous',
                                    'next_text' => 'Next'
                                ) );
                                
                                else:
                            ?>
                            <?php endif ?>

                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section> <!-- end of the featured product -->
            
        </main>
    </div>

<?php get_footer(); ?>
 
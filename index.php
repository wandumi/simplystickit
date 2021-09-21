<?php 
    /**
     * The main template file
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package WordPress
     * @subpackage Simply Stickit
     * @since Simply Stickit 1.0
     */

    get_header(); 

?>
    <div class="content-area">
        <main>
           
            <section class="default_posts">
                <div class="container">
                   
                    <div class="row">
                        
                        <div class="col-12 col-lg-9 col-md-8">

                            <?php 
                                if( have_posts() ) : while( have_posts() ): the_post(); 
                            
                                     get_template_part( 'template-parts/content/content' );

                                endwhile;
                                // Pagination for posts 
                                the_posts_pagination( array(
                                    'prev_text' => 'Previous',
                                    'next_text' => 'Next'
                                ) );
                            else: ?>
    
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>

                    
                    
                </div>
            </section> <!-- end of the featured product -->
            
            
        </main>
    </div>
<?php get_footer(); ?>
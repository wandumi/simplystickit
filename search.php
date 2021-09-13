<?php 
    /**
     * The template for displaying search results pages
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                   
                    <div class="row mt-5">
                        <div class="col-12">
                            <div  class="d-flex mb-5">
                                <div class="col- col-lg-6 col-md-12 col-sm-12 text-left">

                                    <h2>Search results for: <span style="color: blue"> <?php echo get_search_query(); ?> </span> </h2>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                                    <?php get_search_form(); ?>
                                </div>

                            </div>
                            
                            <?php

                                if( have_posts() ) : while( have_posts() ): the_post(); 
                                    get_template_part('template-parts/content/content', 'search');
                                endwhile;
                                // Pagination for posts 
                                the_posts_pagination( array(
                                    'prev_text' => 'Previous',
                                    'next_text' => 'Next'
                                ) );
                            else: ?>
    
                                <p><?php esc_html_e( 'There are no results for your query.' ); ?></p>
    
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section> <!-- end of the featured product -->
            
            
        </main>
    </div>
<?php get_footer(); ?>
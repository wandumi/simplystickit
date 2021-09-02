<?php 
    /**
     * The main template file
     * 
     * This is the most generic template file in a Wordpress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used t display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @packadge Simplystickit
     * @since 1.0.0
     */

    get_header(); 

?>
    <div class="content-area">
        <main>
            <section class="slider">
                <div class="container">
                    <div class="row">
                        Slider
                    </div>
                </div>
            </section><!-- end of the slider --> 

            <section class="categories">
                <div class="container">
                    <div class="row">
                        List of the categories
                    </div>
                </div>
            </section> <!--end of the main page -->

            <section class="featured_product">
                <div class="container">
                    <div class="row">
                        Featured Product
                    </div>
                </div>
            </section> <!-- end of the featured product -->

            <section class="default_posts">
                <div class="container">
                    <div class="row">
                        <article>
                            <p class="font-weight-bold">The posts should show here</p>
                        </article>
                    </div>
                    <div class="row">
                        
                        <?php 
                            if( have_posts() ) : while( have_posts() ): the_post(); ?>

                                <article>
                                    <h2 class="text-black"><?php the_title(); ?></h2>
                                    <div><?php the_content(); ?></div>
                                </article>

                        <?php endwhile; else: ?>

                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

                        <?php endif; ?>
                    </div>
                </div>
            </section> <!-- end of the featured product -->
            
            
        </main>
    </div>
<?php get_footer(); ?>
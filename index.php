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
                   
                    <div class="row mt-5">
                        <div class="col-12">

                            <?php 
                                if( have_posts() ) : while( have_posts() ): the_post(); ?>
    
                                    <article <?php post_class(); ?> >
                                        <h2 class="text-black">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>    
                                        </h2>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php 
                                                    if( has_post_thumbnail() ) :
                                                        the_post_thumbnail('full');
                                                    endif;
                                                ?>
                                            </a> 
                                        </div>
                                        <div class="meta">
                                            <p>Publish by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
                                            <?php if( has_category() ) : ?>
                                                <br /><span><?php the_category( ' ' ); ?></span>
                                            <?php endif; ?>
                                            <?php if( has_tag( has_tag() ) ): ?>
                                                Tags: <span><?php the_tags('', ','); ?></span>
                                            <?php endif; ?>
                                        </p>
                                        </div>
                                        <div><?php the_excerpt(); ?></div>
                                    </article>
    
                            <?php endwhile;
                                // Pagination for posts 
                                the_posts_pagination( array(
                                    'prev_text' => 'Previous',
                                    'next_text' => 'Next'
                                ) );
                            else: ?>
    
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section> <!-- end of the featured product -->
            
            
        </main>
    </div>
<?php get_footer(); ?>
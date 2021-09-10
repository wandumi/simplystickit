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
                        <div class="col-12">
                            <?php 
                                the_archive_title( '<h1 class="archive-title>','</h1>');
    
                                if( have_posts() ) :
                                    while( have_posts() ): the_post();
                            ?>
    
                                    <article <?php post_class() ?>>
                                        <h2>
                                            <a  href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        <div class="post-thumbnail">
                                            <?php 
                                                if( has_post_thumbnail() ): 
                                                    the_post_thumbnail('full');
                                                endif;
                                            ?>
                                        </div>
                                        <div class="meta">
                                            <p>
                                                Publish by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
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
    
                            <?php
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
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </section> <!-- end of the featured product -->
            
        </main>
    </div>

<?php get_footer(); ?>
 
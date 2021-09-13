<?php
/**
 * Template part for displaying page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simply Stickit

 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
            <h1><?php the_title(); ?></h1>
            <div class="meta">
                <p>Publish by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
                    
                    <br /><span><?php the_category( ' ' ); ?></span>
                    
                    <?php if( has_tag( has_tag() ) ): ?>
                        Tags: <span><?php the_tags('', ','); ?></span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="post-thumbnail">
                <?php 
                    if( has_post_thumbnail() ): 
                        the_post_thumbnail( 'full');
                    endif;
                ?>
            </div>
    </header>
    <div>
        <!-- Long content pagination -->
        <?php wp_link_pages(
            array(
                'before' => '<p class="pagination">'.'Pages',
                'after'  => '</p>'
            )
        ); ?>
        <?php the_content(); ?>
    </div>
</article>
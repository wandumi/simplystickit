<?php
/**
 * Template part for displaying page content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simply Stickit

 */

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
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simply Stickit

 */

?>


<article class="col">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <?php 
        if( comments_open() || get_comments_number() ): 
            comments_template();
        endif;

    ?>
</article>
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
                       
                            <?php 
                             
                                while( have_posts() ): the_post();
                            ?>
    
                                    <article class="col">
                                        <h1><?php the_title(); ?></h1>
                                        <div><?php the_content(); ?></div>
                                    </article>
    
                            <?php
                                endwhile;
                            ?>
                       
                    </div>
                </div>
            </main>

    </div>

<?php get_footer(); ?>
 
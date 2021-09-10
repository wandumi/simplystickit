<?php

    /**
     * Template Name: Home Page
     */

    get_header(); 

?>
    <div >
        <main >
            
            <section class="slider mb-5">
                <!-- Flex slider  -->
                <div class="flexslider">
                    <ul class="slides">
                        <?php 
                            /**
                             * loop through the slider stored in the database 
                             * Reference the customizer
                             * */
                            for ($i=1; $i < 4; $i++) : 
                                $slider_page[$i]            = get_theme_mod( 'set_slider_page'. $i );
                                $slider_button_text[$i]     = get_theme_mod( 'set_slider_button_text'. $i );
                                $slider_button_url[$i]      = get_theme_mod( 'set_slider_button_url'. $i );
                            endfor;

                            // query parameters of the slider
                            $args = array(
                                'post_type'     => 'page',
                                'post_per_page' => 3,
                                'post__in'      => $slider_page,
                                'orderby'       => 'post__in',
                            );

                            // query the database
                            $slider_loop = new WP_Query( $args );

                            // var_dump($slider_loop);

                            $j = 0;

                            // loop through the result
                            if (  $slider_loop->have_posts() ):
                                while(  $slider_loop->have_posts() ):
                                     $slider_loop->the_post();
                        ?>
                            <li>
                                <!-- Calling the Settings of the images from the functions.php settings -->
                                <?php the_post_thumbnail( 'medium')  ; ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle">
                                                <?php the_content(); ?>
                                            </div>
                                            <a href="<?php echo $slider_button_url[$j]; ?>" class="link">
                                                <?php echo $slider_button_text[$j]; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                            $j++;
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                    </ul>
                </div>
            </section><!-- end of the slider --> 

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <section class="categories mt-4">
                            
                            <?php
                                $number_of_categories = get_theme_mod('set_categories_max_num', 4);
                                $columns_of_categories = get_theme_mod('set_categories_max_col',4);
                            ?>
                            <div class="container">
                                <div class="row">
                                    <h2>Product Categories</h2>
                                    
                                  
                                    <?php echo do_shortcode( '[product_categories limit=" '. $number_of_categories .' " columns=" '. $columns_of_categories .' " orderby="popularity" ]' ) ?>
            
                                </div>
            
                               
                                
                            </div>
                        </section> <!--end of the main page -->
                    </div>
                </div>

            </div>

          
            
            
        </main>
    </div>

<?php get_footer(); ?>
 
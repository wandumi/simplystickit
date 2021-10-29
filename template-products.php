<?php

    /**
     * Template Name: Products Page
     */

    get_header(); 

?>
    <div class="container">
        <main>

                <section>
                    
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <h2>Product Categories</h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 main-woocommerce">
                            

                                <?php
                                    $children = get_categories( array(
                                        'taxonomy'     => 'product_cat',
                                        'orderby'      => 'name',
                                        'pad_counts'   => false,
                                        'hierarchical' => 1,
                                        'hide_empty'   => false
                                    ) );

                                    if ($children) {
                                        foreach ($children as $subcat) {
                                            
                                            echo '<h2><a href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' . // Display child taxonomy name
                                            
                                            $subcat->name . ' (' . $subcat->count . ')' . '</a></h2>' . $subcat->description; // Display child taxonomy item count
                                            
                                            $category = $subcat->slug; // Set child category slug for each query of products
                                            
                                            $args = array(
                                                'post_type' => 'product',
                                                'product_cat' => $category, 
                                            );

                                            $loop = new WP_Query($args);

                                ?>

                                            <div class="row">
                                                <?php
                                                if ($loop->have_posts()) {
                                                    while ($loop->have_posts()) : $loop->the_post(); ?> 
                                                        <div class="col-md-3 ">
                                                            <div>
                                                                <?php the_post_thumbnail( 'medium' ); ?>
                                                                
                                                            </div>
                                                            <div>
                                                                <h4>
                                                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                                                    <?php the_title(); //Display product title ?></a>
                                                                </h4>
                                                        
                                                                <?php $product = wc_get_product(get_the_ID()); // get the WC_Product Object ?>
                                                                <p><?php echo $product->get_price_html(); // Display product Price ?></p>
        
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                    <?php
                                                } else { ?>

                                                
                                                    <div class="col-md-12">
                                                        <div class="d-flex">
                                                            <?php echo __('No products found'); ?>

                                                        </div>

                                                    </div>
                                                
                                                <?php
                                                }
                                                    wp_reset_postdata(); // Reset Query
                                                ?>
                                                    <!--/.products-->
                                                

                                            </div>
                                        <?php

                                        }
                                    }
                                ?>

                        </div>
                                    
                    </div>
                
                </section>
                
        </main>   
        
    </div>

<?php get_footer(); ?>
 
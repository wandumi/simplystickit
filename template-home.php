<?php

    /**
     * Template Name: Home Page
     */

    get_header(); 

?>
    <div class="">
        <main>
            <div class="mt-5">
                
                <section>
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-lg-12">

                                    <?php
                                        $homepage_image = get_theme_mod('simply_stickit_welcome_img_settings', 4);
                       
                                    ?>
                                    
                                <?php if($homepage_image) : ?>
                                    <div class="d-flex justify-content-center">
                                        <img src="<?php echo $homepage_image ?>" 
                                        class="attachment-thumbnail size-thumbnail aligncenter" ... />

                                    </div>
                                <?php else: ?>
                                    <div class="d-flex justify-content-center">Please upload the homepage image on the Customizer Section</div>
                                <?php endif ?>
                            </div>
                        </div>

                    </div>
                </section>

           
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mt-5">
        
                                <div class="categories ">
                                    
                                    <?php
                                        $number_of_categories = get_theme_mod('set_categories_max_num', 4);
                                        $columns_of_categories = get_theme_mod('set_categories_max_col',4);
                                    ?>
                                    
                                        <div>
                                            <h2>Product Categories</h2>
                                            
                                          
                                            <?php echo do_shortcode( '[product_categories limit=" '. $number_of_categories .' " columns=" '. $columns_of_categories .' " orderby="" hide_empty=1 parent="0"]' ) ?>
                                             
                                        
                                        </div>
                                </div> <!--end of the main page -->
                            </div>
                        </div>

                    </div>
                </section>

            </div> 


        </main>   
        
    </div>

<?php get_footer(); ?>
 
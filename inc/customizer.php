<?php 

  /**
   * Simply Stickit Theme Customizer
   * 
   * @package Simply Stickit
   */

   function simply_stickit_customizer( $wp_customize )
   {
            /**
             * Customize the copyright
             */
            $wp_customize->add_section(
                'sec_copyright', array(
                    'title'       => 'Copyright Settings',
                    'description' => 'Copyright Section'
                )
            );

            //Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_copyright', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'sanitize_text_field' 
                )
            );

            //add the control to the customizer
            $wp_customize->add_control(
                'set_copyright', array(
                    'label'         => 'Copyright',
                    'description'   => 'Please, add your copyright information here',
                    'section'       => 'sec_copyright',
                    'type'          => 'text'
                )
            );

             /**
             * Woocommerce homepage for categories
             */
            $wp_customize->add_section(
                'sec_home_page', array(
                    'title'       => 'Homepage Product Categories',
                    'description' => 'Homepage Section'
                )
            );

            //Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_categories_max_num', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'absint' 
                )
            );

            //add the control to the customizer
            $wp_customize->add_control(
                'set_categories_max_num', array(
                    'label'             => 'Number of Categories to show',
                    'description'       => 'How many categories',
                    'section'           => 'sec_home_page',
                    'type'              => 'number'
                )
            );

            //Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_categories_max_col', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'absint' 
                )
            );

            //add the control to the customizer
            $wp_customize->add_control(
                'set_categories_max_col', array(
                    'label'             => 'Number columns of Categories to show',
                    'description'       => 'How many columns of categories',
                    'section'           => 'sec_home_page',
                    'type'              => 'number'
                )
            );

            /**
             * Customizer for the slider 
             *
             * @var Slider
             */
            $wp_customize->add_section(
                'sec_slider', array(
                    'title'       => 'Slider Settings',
                    'description' => 'Slider Section'
                )
            );

            /**************ONE****************** */
            //Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_slider_page1', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'absint' 
                )
            );


            $wp_customize->add_control(
                'set_slider_page1', array(
                    'label'         => 'Set slider page 1',
                    'description'   => 'Set slider page 1',
                    'section'       => 'sec_slider',
                    'type'          => 'dropdown-pages'
                )
            );

            /**
             * Slider settings for Buttons
             */
            $wp_customize->add_setting(
                'set_slider_button_text1', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'sanitize_text_field' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_text1', array(
                        'label'         => 'Button Text for Page 1',
                        'description'   => 'Button Text for Page 1',
                        'section'       => 'sec_slider',
                        'type'          => 'text'
                )
            );

            /**
             * Slider settings for URL
             */
            $wp_customize->add_setting(
                'set_slider_button_url1', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'esc_url_raw' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_url1', array(
                        'label'         => 'URL Text for Page 1',
                        'description'   => 'URL Text for Page 1',
                        'section'       => 'sec_slider',
                        'type'          => 'url'
                )
            );

            /**************TWO****************** */

            //Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_slider_page2', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'absint' 
                )
            );


            $wp_customize->add_control(
                'set_slider_page2', array(
                    'label'         => 'Set slider page 2',
                    'description'   => 'Set slider page 2',
                    'section'       => 'sec_slider',
                    'type'          => 'dropdown-pages'
                )
            );

            /**
             * Slider settings for Buttons
             */
            $wp_customize->add_setting(
                'set_slider_button_text2', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'sanitize_text_field' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_text2', array(
                        'label'         => 'Button Text for Page 2',
                        'description'   => 'Button Text for Page 2',
                        'section'       => 'sec_slider',
                        'type'          => 'text'
                )
            );

            /**
             * Slider settings for URL
             */
            $wp_customize->add_setting(
                'set_slider_button_url2', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'esc_url_raw' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_url2', array(
                        'label'         => 'URL Text for Page 2',
                        'description'   => 'URL Text for Page 2',
                        'section'       => 'sec_slider',
                        'type'          => 'url'
                )
            );

            /**************THREE****************** */

            //Field 3 - Copyright Text Box
            $wp_customize->add_setting(
                'set_slider_page3', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'absint' 
                )
            );


            $wp_customize->add_control(
                'set_slider_page3', array(
                    'label'         => 'Set slider page 3',
                    'description'   => 'Set slider page 3',
                    'section'       => 'sec_slider',
                    'type'          => 'dropdown-pages'
                )
            );

            /**
             * Slider settings for Buttons
             */
            $wp_customize->add_setting(
                'set_slider_button_text3', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'sanitize_text_field' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_text3', array(
                        'label'         => 'Button Text for Page 3',
                        'description'   => 'Button Text for Page 3',
                        'section'       => 'sec_slider',
                        'type'          => 'text'
                )
            );

            /**
             * Slider settings for URL
             */
            $wp_customize->add_setting(
                'set_slider_button_url3', array(
                    'type'                => 'theme_mod',
                    'default'             => '',
                    'sanitize_callback'   => 'esc_url_raw' 
                )
            );


            $wp_customize->add_control(
                'set_slider_button_url3', array(
                        'label'         => 'URL Text for Page 3',
                        'description'   => 'URL Text for Page 3',
                        'section'       => 'sec_slider',
                        'type'          => 'url'
                )
            );

            /**
             * Adding homepage welcome image to the settings
             *
             */
            $wp_customize->add_section(
                'simply_stickit_welcome_img_section', array(
                    'title'         => 'Homepage Image',
                    'description'   => 'Homepage welcome image settings'
                )
            );

            $wp_customize->add_setting(
                'simply_stickit_welcome_img_settings', array(
                    //default value
                )
            );

            $wp_customize->add_control(
               new WP_Customize_Image_Control( $wp_customize, 'simply_stickit_welcome_img_control', array(
                 'label'    => 'Edit the welcome page image',
                 'settings' => 'simply_stickit_welcome_img_settings',
                 'section'  => 'simply_stickit_welcome_img_section'
               ))
            );



   }

   add_action( 'customize_register', 'simply_stickit_customizer');

//    add_filter( 'woocommerce_breadcrumb_defaults', 'my_change_breadcrumb_delimiter' );

//     function my_change_breadcrumb_delimiter( $defaults ) {
//         // Change the breadcrumb delimiter from '/' to '>'
//         $defaults['delimiter'] = ' | ';
//         return $defaults;
//     }

    
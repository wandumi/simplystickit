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
                        'label'         => 'Button Text for Page 1 ',
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
                        'label'         => 'URL Text for Page 1 ',
                        'description'   => 'URL Text for Page 1',
                        'section'       => 'sec_slider',
                        'type'          => 'url'
                )
            );


   }

   add_action( 'customize_register', 'simply_stickit_customizer');

    
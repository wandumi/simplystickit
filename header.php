<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Simplystickit
 * @since Simplystickit 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div id="page" class="site">
        <header>
            <section class="search container mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <form action="" method="post">
                                <div class="form-control">
                                    <label for="search">Search</label>
                                    <input type="search" name="search" id="search">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </section>
            <section class="top-bar mt-4">
                <div class="container">
                    <div class="row">
                        <div class="brand col-3">Logo</div>
                        <div class="main-menu col-6">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'simply_stickit_main_menu'
                                    )
                                );
                            ?>
                        </div>
                        <div class="account col-3 text-md-right text-center">SignIn / SignOut</div>
                    </div>
                </div>
            </section>
        </header>
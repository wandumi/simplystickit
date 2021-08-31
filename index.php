<?php 
    /**
     * The main template file
     * 
     * This is the most generic template file in a Wordpress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used t display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @packadge Simplystickit
     * @since 1.0.0
     */

    get_header(); 

?>
    <div class="content-area">
        <main>
            <section class="slider">Slider</section>
            <section class="content-header">Categories</section>
            
        </main>
    </div>
<?php get_footer(); ?>
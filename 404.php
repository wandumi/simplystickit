<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Simply Stickit
 * @since Simply Stickit 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1>Page not found</h1>
					<p>Unfortunately, the page you tried to reach does not exist on this site</p>
				</header><!-- .page-header -->

				<?php 
					the_widget( 'WP_Widget_Recent_Posts', array(
						'title' => 'Take a Look at Our Latest Posts',
						'number' => 3
					) )
				?>


			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
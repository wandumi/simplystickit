<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage simplystickit
 * @since simplystickit 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$simplystickit_unique_id = wp_unique_id( 'search-form-' );

$simplystickit_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';?>

<form role="search" <?php echo $simplystickit_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<!-- <label class="display:none;" for="<?php echo esc_attr( $simplystickit_unique_id ); ?>"><?php _e( 'Search&hellip;', 'simplystickit' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label> -->
	<input type="search" id="<?php echo esc_attr( $simplystickit_unique_id ); ?>" 
	       class="search-field" 
		   value="<?php echo get_search_query(); ?>" 
		   name="s" />
	<input type="submit" class="search-submit" 
	       value="<?php echo esc_attr_x( 'Search', 'submit button', 'simplystickit' ); ?>" />
</form>

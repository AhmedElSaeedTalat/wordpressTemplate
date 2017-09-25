<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humescore
 */

if ( ! is_active_sidebar( 'search-2' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'search-2' ); ?>
</aside><!-- #secondary -->

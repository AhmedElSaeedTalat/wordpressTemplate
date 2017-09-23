<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

?>

<section class="no-results not-found">
	

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'humescore' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>
		<div class="container search-non mt-5">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<p class="searchTitle">SEARCH RESULTS FOR</p>
						<span><?php echo  get_search_query() ;?></span>
					</div>	
				</div><!-- col-12 -->
				<div class="col-12 searchFrom mt-4">
					<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'humescore' ); ?></h1>
					</header><!-- .page-header -->
				</div><!-- col-12 -->
				<div class="col-12 searchFrom inputHeight">
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'humescore' ); ?></p>
							<?php
								get_search_form();

						else : ?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'humescore' ); ?></p>
							<?php
								get_search_form();

						endif; ?>
				</div><!-- col-12 -->
			</div><!-- row -->
		</div><!-- container -->
			
	</div><!-- .page-content -->
</section><!-- .no-results -->

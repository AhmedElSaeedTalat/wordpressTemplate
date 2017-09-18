<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

?>
										<!-- thumbnail -->
<?php	
	if(!is_active_sidebar('sidebar-1')):?>									
<div class="thumbnails">
		<div class="thumbnailWrapper">	
				<?php the_post_thumbnail('thumbnails');?> 
		</div>
		 
</div>
<?php 
  else :?>
  	<div class="thumbnails">
  			<div class="thumbnailWrapper2 d-flex justify-content-center">	
 				 <?php the_post_thumbnail('thumbnails1');?> 
			</div>
	</div>
<?php 
	endif;?>
<div class="category d-flex justify-content-center">	
				<?php 
						$categories_list = get_the_category_list( esc_html__( ', ', 'humescore' ) );
						if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'humescore' ) . '</span>', $categories_list ); // WPCS: XSS OK.
							}
				;?>
			</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">	
				<div class="row d-flex justify-content-center">	
						<div class="col-12 content-width">	
									<header class="entry-header">
			
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'humescore' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'humescore' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php humescore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php humescore_posted_on(); ?>
				<span class="commentsNumber">	
					<span>-</span><?php comments_number("no comments") ;?>
				</span>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
				</div><!-- col -->
				<?php if(is_singular()):?>
					
				<div class="col-12 text-center">	
					<div class="share">	
							<h2>Share</h2>
					</div><!-- share -->
					<div class="menu2">	
							<?php
									$xx= wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_id'        => 'Primary2-menu',
										'echo'			=> false,

									) );
									 if($xx):
									$menu_items = wp_get_nav_menu_items('social');

								?>
									
							<div class="menuWrapper">	
									<?php foreach($menu_items as $items_menu):?>
										
										<div class="menuWrapper2">
										
										<a href="<?php echo $items_menu->url;?>"><?php 
										if(!empty($items_menu->post_title)){
											echo "<span>".humescores_get_svg(['icon'=>$items_menu->post_title])."</span>";
										}
											echo  $items_menu->post_title;

										
												?>
												</a>
										</div>
									<?php endforeach;
										  endif;
									?>
							</div>
					</div>

				</div>	<!-- col -->
				<div class="col-12">
					<img src="" alt="">
				</div>
			<?php endif ;?>
		</div>
	</div>
		
	
</article><!-- #post-<?php the_ID(); ?> -->

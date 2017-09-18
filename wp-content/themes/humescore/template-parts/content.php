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
<?php if(has_post_thumbnail()):?>
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
	endif;
	endif;
	?>

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
					
				<div class="col-12 text-center content-width">	
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
				<div class="col-12 mt-5 content-width">
					<div class="border">
						<div class="row">
							<div class="col-3 ">
								<img src='<?php echo get_template_directory_uri()."/images/bla.jpeg" ;?>' alt="" class="content-image1">
							</div>
							<div class="col-9">
								<h2>ROOTLAYERS</h2>
								<p>But that crowd of people had a far narrower escape than mine. Only the fact that a hummock of heathery sand inter- cepted the lower part of the Heat-Ray saved them. Had the elevation of the parabolic mirror been a few yards higher.</p>
								<div class="iconsWrapper"><a href=""><?php echo humescores_get_svg(['icon'=>'facebook']);?></a>
									<a href=""><?php echo humescores_get_svg(['icon'=>'google-plus']);?></a>
									<a href=""><?php echo humescores_get_svg(['icon'=>'twitter']);?></a>		
									<a href=""><?php echo humescores_get_svg(['icon'=>'vk']);?></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			
			<div class="col-12 mt-5 content-width">
				<div class="row">
					<h2 class="mx-auto RelatedPostHeaderStyle">Related Posts</h2>
						<div class="col-12 relatedPosts d-flex justify-content-around ">
					<?php
						$title = get_the_title();
						$category = get_the_category();
						$the_category = $category[0]->name;
						$x = new WP_Query(
								[
									'category_name'=>$the_category 
								]
							);
						if($x->have_posts()){
							while($x->have_posts()){
								$x->the_post();
								// echo the_post_thumbnail();
								if($title !== get_the_title()) :?>
								<div class="relatedPosts_blog">
									<?php if(has_post_thumbnail()) :?>
									<div class="image">
										<?php echo the_post_thumbnail() ;?>	
									</div>	
									<?php else:?>
									<div class="image">
										<img src="<?php echo get_template_directory_uri().'/images/logo-minimalo.png' ;?>	" alt="">
									</div>	

								<?php endif;?>
									<div class="title">
										<a href="<?php echo get_permalink();?>"><?php echo get_the_title() ;?>	</a>
									</div>
									<div class="date">
										<?php echo get_the_date() ;?>			
									</div>	
								</div>
							<?php 
								endif;
								}
								}
								?>		
						</div>										
					</div>
				</div>


				<div class="col-12 content-width mt-5">
					<?php 
							if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
				</div>
				
		<?php endif ;
			?>








		</div>
	</div>
		
	
</article><!-- #post-<?php the_ID(); ?> -->

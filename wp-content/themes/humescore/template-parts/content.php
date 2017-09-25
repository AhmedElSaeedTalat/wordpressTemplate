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
<div class="arrow-UP" id="xx">
	<?php echo humescores_get_svg(['icon'=>'chevron-up']);?>
</div>


<div class="container">
	<div class="row">
		<?php if(is_active_sidebar('sidebar-1')):?>
			<div class="col-lg-8 contentMargin" >
			<?php else :?>
			<div class="col-12">
		<?php endif;?>
				<section id="allContent">
		
				
	<div class="content1">
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
  			<div class="thumbnailWrapper2 d-flex ">	
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
	<div class="wrapper_content">
		<div class="container">	
				<div class="row d-flex justify-content-center">	
						<div class="col-12 blaidth">	
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
					
				<div class="col-12 text-center blaidth">	
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
								<?php if(!empty($menu_items)):?>
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
										endif;
									?>
							</div>
					</div>

				</div>	<!-- col -->
				<div class="col-12 mt-5 blaidth">
					<div class="border">
						<div class="row">
							<div class="hidden-sm-down col-md-4 col-lg-3 d-flex justify-content-center">
								<img src='<?php echo get_template_directory_uri()."/images/bla.jpeg" ;?>' alt="" class="content-image1">
							</div>
							<div class="col-12 col-md-8 col-lg-9">
								<h2><?php 
									if ( is_front_page() && is_home() ) : ?>
													<h1 id="siteDesc"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php else : ?>
													<p id="siteDesc"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
												<?php
												endif;?>

																	</h2>
								<?php
			
				$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p ><?php echo $description; ?></p>
			<?php
			endif; ?>


								<div class="iconsWrapper"><a href=""><?php echo humescores_get_svg(['icon'=>'facebook']);?></a>
									<a href=""><?php echo humescores_get_svg(['icon'=>'google-plus']);?></a>
									<a href=""><?php echo humescores_get_svg(['icon'=>'twitter']);?></a>		
									<a href=""><?php echo humescores_get_svg(['icon'=>'vk']);?></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			
			<div class="col-12 mt-5 blaidth relatedPosts">
						<h2 class="mx-auto RelatedPostHeaderStyle">Related Posts</h2>
<?php 
						$title = get_the_title();
						$category = get_the_category();
						$the_category = $category[0]->name;
						$x = new WP_Query(
								[
									'category_name'=>$the_category 
								]
							); ?>
				<div class="row">
					<?php
						if($x->have_posts()){
							while($x->have_posts()){
								$x->the_post();?>
									<?php
								// echo the_post_thumbnail();
								if($title !== get_the_title()) :?>
								<div class="col-lg-3">
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
									<div class="title ">
										<a href="<?php echo get_permalink();?>"><?php echo get_the_title() ;?>	</a>
									</div>
									<div class="date">
										<?php echo get_the_date() ;?>			
									</div>	
								</div>
</div>


							<?php 
								endif;
								}
										 wp_reset_postdata();

								}
								?>		
					</div>
				</div>


				<div class="col-12 blaidth mt-5">
					<?php 
							if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					      		$previous_post = get_previous_post();
								 $next_post = get_next_post();		
										

						?>
				</div>
				<div class="all">
					
			 	<a href="<?php echo get_permalink($previous_post->ID) ;?>" class="prev_linkFixed">PREV POST</a>


					 <div class="prev-link">
				 		<div class="img">
						<?php $previous_post = get_previous_post();?>
						<a href="<?php echo get_permalink($previous_post->ID) ;?>"><?php 
						if(!empty(get_the_post_thumbnail($previous_post->ID,'thumbnail'))){
						echo   get_the_post_thumbnail($previous_post->ID,'thumbnail');}else{ ?>
								<img src="<?php echo get_template_directory_uri().'/images/logo-minimalo.png' ;?>" alt="" class="img-1">
							<?php }
						?></a>

					</div>
					<p><?php  previous_post_link();?></p>
				 	
					
				 </div><!-- prev-link -->
				</div>



			 	

				<div class="all1">
					
			 	<a href="<?php echo get_permalink($next_post->ID) ;?>" class="next_linkFixed">NEXT POST</a>

					<div class="next-link">
					<div class="img">
						<?php  $next_post = get_next_post();?>
								<a href="<?php echo get_permalink($next_post->ID) ;?>"><?php 
								if(!empty(get_the_post_thumbnail($next_post->ID,'thumbnail'))){
								echo get_the_post_thumbnail($next_post->ID,'thumbnail');
							}
							else{ ;?>
								<img src="<?php echo get_template_directory_uri().'/images/logo-minimalo.png' ;?>" alt="" class="img-1">
							<?php }
						?></a>
					</div>
					<p><?php  next_post_link();?></p>
				 </div>
				</div>

				 
		<?php endif ;
			?>










		</div>
	</div>
	</div>
		
		

</article><!-- #post-<?php the_ID(); ?> -->
	</div>

		</div><!-- col-8 -->
		<div class="col-lg-4 mt-5">


			<?php get_sidebar();?>
		</div>
	</div><!-- row -->
</div><!-- container -->
<div id="xxx"></div>






	
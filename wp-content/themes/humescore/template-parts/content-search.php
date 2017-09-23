<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container searchPage mt-5">
			<div class="row applyBorderSearch">
				<div class="col-6">
					<?php if (has_post_thumbnail()):?>
					<a href="<?php echo get_permalink() ;?>"><?php the_post_thumbnail('thumbnails1') ;?></a>
					<?php else :?>
						<a href="<?php echo get_permalink() ;?>"><img src="<?php echo get_template_directory_uri().'/images/3.jpg' ;?>" alt="" class="img"></a>
					<?php endif;?>
				</div>
				<div class="col-6">
					<section id="content1">
						<div class="cat" >
						<?php the_category() ;?>
					</div>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="content">
						<?php the_excerpt() ;?>
					</div>
					</section>
					
					<div class="links">
						<div class="linkMore">
							<a href="<?php  echo get_permalink()?>">Read More</a>
						</div>
						<?php 
								setup_postdata('');
								?>
							<div class="entry-meta">
								<?php humescore_posted_on(); ?>
									<span class="commentsNumber">	
										<span>-</span><?php comments_number("no comments") ;?>
									</span>
							</div><!-- .entry-meta -->
					</div>
				</div>
		</div>
		</div>

		
	</header><!-- .entry-header -->

	

</article><!-- #post-<?php the_ID(); ?> -->

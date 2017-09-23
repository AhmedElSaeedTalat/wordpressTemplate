<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

get_header(); ?>
			<header class="page-header">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<div class="container " id="Title">
							<div class="row">
								<div class="col-12  d-flex justify-content-center">
									<p class="text-uppercase text-Title">Browsing Category</p>
								</div>	
								<div class="col-12  d-flex justify-content-center">
									<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
								</div>	
							</div>
						</div><!-- container -->
				
			</header><!-- .page-header -->
			
			<div class="container" >
				<div class="row">
					<div class="col-8 mt-4" id="posts_categories">
						<div class="row" id="tags">

							<?php 
								$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
								$args = array(
									'tags' => get_the_archive_title(),
									 'paged'               => $paged
								);
								$query = new WP_Query($args);
								$queries = $query->posts;
								// var_dump(get_the_archive_title());
								while($query->have_posts()){
									$query->the_post();
										;?>

									<!-- <section > -->
									
										<div class="col-6 ">
											<?php if (has_post_thumbnail()):?>
												<?php the_post_thumbnail(); ?>
											<?php else :?>
												<img src="<?php echo get_template_directory_uri().'/images/3.jpg' ;?>" alt="" class="img">
											<?php endif;?>	
										<div id="content1">
											<div >
												<?php the_category() ;?>
											</div>
											<div class="title">
												<a href="<?php  echo get_permalink()?>"><?php the_title();?></a>
											</div>
											<div class="content">
												<?php the_excerpt();?>
											</div>
										</div>
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
										
									</div><!-- col-6 -->
									<!-- </section> -->
									
										
									<?php
									}
									wp_reset_postdata();
										;?>

						</div>													
					</div><!-- col-8 -->

					<div class="col-4">
						<?php get_sidebar();?>
					</div><!-- col-4 -->
				</div><!-- row -->
				
			</div><!-- container -->
			<div class="container">
				<div class="row adjust">
					<div class="col-12 d-flex justify-content-center">
						<?php  the_posts_pagination() ;
					?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

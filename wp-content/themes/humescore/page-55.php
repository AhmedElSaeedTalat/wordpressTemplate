<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-5">
						<?php the_post_thumbnail('thumbnails');?>
							<section id="content">
								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>
							</section>
						</div>
								<section class="formWrapper">
									<form action="" id="form"  class="container">
										<div class="row">
											<div class="form col-lg-4">
												<p class="text">Your Name (required)</p>
												<input type="text" class="input" required>
											</div>
											<div class="form col-lg-4">
												<p class="text">Your Email (required)</p>
												<input type="email" class="input" required>
											</div>
											<div class="form col-lg-4">
												<p class="text">Subject</p>
												<input type="text" class="input">
											</div>			
										</div>
										<div class="row">
											<div class="form textarea col-12">
												<p class="text">Your Message</p>
												<textarea name="" class="input area"></textarea> 
												<button class="btn btn-contact"> send message</button>
										</div>	
										</div>
																									
									</form>
								</section>
								
							</section>
								
				</div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

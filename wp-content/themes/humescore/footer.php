<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humescore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer mt-5">
		<div class="container">
				
				
	
			<div class="row mt-5">
				<div class="col-12 col-lg-4  mb-5">
					<div class="site-info">
							<p class="text-uppercase mb-4">Minimalo</p>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescore' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Minimalo – is a minimal blog WordPress theme for creative websites. With four different post layouts, support for WordPress post formats, and support WooCommerce plugin, you can get your blog and shop running in minutes. %s', 'humescore' ), 'WordPress' );
						?></a>
					</div><!-- .site-info -->
				</div><!-- col -->
				<div class="col-12 col-lg-4  mb-5">
					<p class="text-uppercase mb-4">browse tags</p>
					<div class="row">
						

						<?php
							$tags = get_tags(array(
								"number" => 12
							));

							foreach ($tags as $key => $tagTexts):?>
							<div class="col-4 col-sm-3 mb-2">
								<div class="tagsWrapper">
									<p><a href="<?php 
									$url = $tagTexts->term_id;
									echo get_tag_link($url)?>"><?php echo $tagTexts->name;?></a></p>
								</div>
							</div>									
					<?php endforeach;?>
					</div><!-- row-child -->

				</div>
				<div class="col-12 col-lg-4">
					<?php 
					$argument = [
							'posts_per_page' => 2
						];
						$arg = get_posts($argument);	
						?>
					<p class="text-uppercase mb-4">latest posts</p>
					
						<?php
							foreach ($arg as $key => $value) :
									setup_postdata( $value );
								?>
								
							
							<div class="block">
								<div class="image">
									<?php
									$xx =  wp_get_attachment_image_src(get_post_thumbnail_id($value->ID));
										?>
										<?php if(!empty($xx)):?>
											<img src="<?php echo $xx[0] ;?>" alt="">
										<?php else :?>
											<img src="<?php echo get_template_directory_uri().'/images/yes.jpg' ;?>" alt="">
										<?php endif ;?>
								</div>
								<div class="title">
									<a href="<?php echo get_permalink($value->ID) ; ?>"><?php echo $value->post_title ;?></a>
									<p><?php $x  = new DateTime($value->post_date);
											$y = $x->format("M d, 20y");
											echo $y;
													?>	</p>
								</div>
							</div>
							
			<?php
									

			endforeach;
wp_reset_postdata();
		?>
				</div><!-- col -->
			</div><!-- ROW -->
			<div class="row mt-5">
				<div class="col-12 footerImages">
					<ul class="list-inline ">
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/1.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/2.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/3.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/4.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/5.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/6.jpg' ;?>" alt="" class="images"></li>
						<li class="list-inline-item m-0"><img src="<?php echo get_template_directory_uri().'/images/7.jpg' ;?>" alt="" class="images"></li>
					</ul>
					<div class="button">
						<p class="text-uppercase"><span class="instagram"><?php echo humescores_get_svg(['icon'=>'instagram']);?></span> <a href="http://instagram.com">follow in instagram</a></p>
					</div>
				</div>
			</div><!-- row -->
			<div class="row mt-5">
				<div class="col-5 ">
					<div class="footerBorders"></div>
				</div><!-- col -->
				<div class=" col-2 d-flex justify-content-around">
					<?php
									$xx= wp_nav_menu( array(
										'theme_location' => 'footer',
										'menu_id'        => 'Primary3-menu',
										'echo'			=> false,

									) );
									 if($xx):
									$menu_items = wp_get_nav_menu_items('xx');

								?>
									
							<?php if(!empty($menu_items)):?>

									<?php foreach($menu_items as $items_menu):?>
										
								<div id="menuWrapper">	

										<a href="<?php echo $items_menu->url;?>"><?php 
										if(!empty($items_menu->post_title)){
											echo humescores_get_svg(['icon'=>$items_menu->post_title]);
										}

										
												?>
												</a>
										</div>
									<?php endforeach;
										  endif;
										endif;
									?>
				</div><!-- col -->
				<div class="col-5">
					<div class="footerBorders"></div>
				</div><!-- col -->
			</div><!-- row -->
			<div class="row">
				<div class="col-12">
					<p class="text-center fontCopyRight">&copy;  2017 Rootlayers. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->
 <?php wp_footer(); ?>
<script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.js"></script>
</body>
</html>

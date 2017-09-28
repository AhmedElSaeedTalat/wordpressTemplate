<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humescore
 */

get_header(); ?>
<div class="arrow-UP" id="xx">
	<?php echo humescores_get_svg(['icon'=>'chevron-up']);?>
</div>
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
	
			<div class="frontPage-content">
				<div class="container borderCategories">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<?php $terms = apply_filters( 'taxonomy-images-get-terms', '');
							foreach( (array) $terms as $term ):?>
								<div class="col-6 col-md-3 mb-4">
									<div class="block_categories">
										<div class="image">
											<a href="<?php echo "/wp-1/category/".$term->name ;?>">	<?php print wp_get_attachment_image( $term->image_id, 'thumbnail' ); ;?></a>
										</div>
										<a href="<?php echo "/wp-1/category/".$term->name ;?>">	<div class="extraLayer">	
										</div></a>
										<div class="text">
											<a href="<?php echo "/wp-1/category/".$term->name ;?>"><?php   echo $term->name;?></a>
										</div>
									</div><!-- block-categories -->
								</div><!-- col-3 -->
								
							  <?php endforeach ;?>
							</div><!-- row-child -->
							
						</div><!-- col-12 -->
					</div><!-- row -->
				</div><!-- container -->
				<div class="container borderCategories mt-4" id="popPost">
					<div class="row">
						<div class="col-12">
							<p class="text-center text-uppercase" id="fontInfo">Popular Posts</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<?php 
						$args = array(
								  'posts_per_page'  => 4, 
								  'meta_query'		=> array(
								  	'key' =>'wpb_post_views_count'
								  ),
								   
								);
								$myposts = new WP_Query( $args );
								if ($myposts->have_posts()) {
								  while ($myposts->have_posts()) {
								    $myposts->the_post(); ?>
								
								<div class="col-md-6 col-lg-3 mb-4">
									<div class="row">
										<div class="col-4 pr-0">
											<?php if (has_post_thumbnail()):?>
												<a href="<?php  echo get_permalink()?>"><?php the_post_thumbnail('popular'); ?></a>
										<?php else :?>
											<a href="<?php  echo get_permalink()?>">	<img src="<?php echo get_template_directory_uri().'/images/3.jpg' ;?>" alt="" class="img">
										<?php endif;?>	</a>
										</div>
										<div class="col-8 ">
											<div class="title">
												<a href="<?php  echo get_permalink()?>"><?php the_title();?></a>
											</div>
											<div class="date">
												<?php echo  get_the_date() ;?>
											</div>
										</div>
									</div>
											
										
									
								</div>
							<?php 
						}
					}
						?>
							</div>
						</div>
						
					</div>					
				</div><!-- container -->
			</div><!-- frontPage -->

			<section class="postsFrontPage">
				<div class="container">
					<div class="row">
						<?php if(is_active_sidebar('sidebar-1')):?>
						<div class="col-12 col-lg-8">
						<?php else :?>
							<div class="col-12">
						<?php endif ;?>
							<div class="row">
								<div class="col-12">
									<?php
										$arguments = array(
											"posts_per_page" => 1
										);
										$query1 = new WP_Query($arguments);
										if($query1->have_posts())

											:?>
												<div class="img">
													<?php 
													$postID = [];
													foreach ($query1 as $key => $valueX) {
														$postID[] = $valueX->ID;
													}
													if(has_post_thumbnail()):?>
														<a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('thumbnails1');?></a>
													<?php else:?>
													<a href="<?php echo get_permalink();?>">	<img src='<?php echo get_template_directory_uri() . "/images/tvl.jpg" ?>' alt=""></a>
													<?php endif ;?>
												</div>
												<div class="category ">	
													<?php 
															$categories_list = get_the_category_list( esc_html__( ', ', 'humescore' ) );
															if ( $categories_list ) {
															/* translators: 1: list of categories. */
															printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'humescore' ) . '</span>', $categories_list ); // WPCS: XSS OK.
																}
													;?>
												</div>
												<div class="firstPostTitle mt-1">
													<a href="<?php echo get_permalink()?>"><?php the_title();?></a>
												</div>
												<div class="firstPostContent">
													<?php  foreach ($query1 as $key => $value) {
														?>
														<span class="mt-1"><?php $postContent=  $value->post_content;
																 $content = substr($postContent, 0,250);
																 echo $content;
														?></span>
														<?php
													}
													echo "....";
													;?>
													
												</div>
												<a href="<?php echo get_permalink()?>" class="firstPostLink">read more</a>
												<?	if ( 'post' === get_post_type() ) : ?>
											<?php 
											setup_postdata('');
											?>

													<div class="entry-meta">
														<?php humescore_posted_on(); ?>
														<span class="commentsNumber">	
															<span>-</span><a href="<?php echo get_permalink()?>/#comments"><?php comments_number("no comments") ;?></a>
														</span>
													</div><!-- .entry-meta -->
												<?php endif;?>
											<?php
										endif;
											 wp_reset_postdata();
											  wp_reset_query();
									?>
										
								</div><!-- col-12 -->
							</div><!-- row0child -->
							<div class="row otherPosts">
								<?php
								$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

										$arguments2 = array(
											"post__not_in"	=>[ $postID[10]],
											 'paged'               => $paged
										);
										$wp_query = new WP_Query($arguments2);
										if($wp_query->have_posts()){
											while($wp_query->have_posts()){
												$wp_query->the_post();
											
												?>
												
								<div class=" col-12 col-lg-6">
										<div class="thumbnails">
											<?php	if(has_post_thumbnail()):?>
											<a href="<?php echo get_permalink();?>"><?php	the_post_thumbnail('thumbnails1'); ?></a>
												<?php else:?>
											
											<a href="<?php echo get_permalink();?>"><img src='<?php echo get_template_directory_uri() . "/images/tvl.jpg" ?>' alt=""></a>
												<?php endif ;?>
										</div>
										<section class="postTitle">
											<div class="category mb-3 ">	
											<?php 
													$categories_list = get_the_category_list( esc_html__( ', ', 'humescore' ) );
													if ( $categories_list ) {
													/* translators: 1: list of categories. */
													printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'humescore' ) . '</span>', $categories_list ); // WPCS: XSS OK.
														}
											;?>
										</div>
										<div class="postTitles mt-1 mb-3">
											<a href="<?php echo get_permalink()?>"><?php the_title();?></a>
										</div>
										</section>
										
										<div class="firstPostContent">
											<span class="mt-1 contentOfPosts"><?php the_excerpt();?></span>
											<a href="<?php echo get_permalink()?>" class="firstPostLink">read more</a>
												<?php if( 'post' === get_post_type() ) : ?>
												<?php 
												setup_postdata('');
												?>
											<div class="entry-meta">
												<?php humescore_posted_on(); ?>
													<span class="commentsNumber">	
														<span>-</span><a href="<?php echo get_permalink()?>/#comments"><?php comments_number("no comments") ;?></a>
													</span>
												</div><!-- .entry-meta -->
											
											<?php
										endif;
											

									?>
											</div>
								</div><!-- col-6 child-->
								
						<?php
							}


;?>

					<div class="col-12 d-flex justify-content-center">
								<?php  the_posts_pagination() ;
										 wp_reset_query();
					?>
												</div>
							<?php
							
																 	
																	  

												}
						?>

							</div><!-- row0child -->
						</div><!-- col-8 -->
						<div class="col-12 col-lg-4">
							<?php get_sidebar() ;?>

						</div>
					</div><!-- row -->
				</div><!-- container -->
			</section>

		

<?php
get_footer();


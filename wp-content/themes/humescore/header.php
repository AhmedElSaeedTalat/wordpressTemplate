<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humescore
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 -->	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- <div class="menuMobile">
		<?php //wp_nav_menu() ;?>
	</div> -->
	<section id="search_section">
		<div class="cls"><?php echo humescores_get_svg(['icon' => 'close']);?></div>
		<?php get_sidebar('search');?>
	</section>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'humescore' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<!-- ######  header_edit   ###### -->
						
				<div class="headWrapper">
					<div class="container ">
						<div class="row ">
							<div class="col-sm-4 d-flex align-items-center header_account">
								<span><?php echo humescores_get_svg(['icon'=>'tags']) ;?></span><p class="mainStyleText1">Summer Sales Discount Learn More</p>
							</div>
							<div class="col-sm-8 d-flex align-items-center justify-content-end header_account">
								<p class="mainStyleText1"> My account <span class="headerTextSpanPadding">Checkout</span></p>
							</div>
						</div>
					</div>
				</div>
						<!-- header-Logo -->
				<div class="header_logo">
					<div class="container h-100" id="infoHeader">
						<div class="row headerRowAdjustment">
							<div class="col-12 d-flex justify-content-center header_logo_style align-items-center">
								<?php the_custom_logo();?>
							</div>
						</div>
						<!-- site Header Menu -->
						
						
						
					</div>
				</div>
					<div id="headerMenu">
						<div class="container h-100" >
							<div class="row h-100 d-flex align-items-center"  >
								<div class="col-2 d-flex justify-content-center">
									<?php get_sidebar('menu');?>
								</div>
							<div class="col-8 d-flex justify-content-center" >
								<nav id="site-navigation" class="main-navigation "  >
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'depth' 		=> '3',
											'after'			=> humescores_get_svg(['icon'=>'angle-down'])
										) );
										
									?>
								</nav>
							</div>
							<div class="col-2 d-flex ">
								<div class="shopping-bag pr-3">
									<?php echo humescores_get_svg(['icon' => 'shopping-bag']) ;?>
								</div>
								<div class="searchIcon">
									<?php echo humescores_get_svg(['icon' => 'search']) ;?>
								</div>
							</div>
						</div><!-- row -->
					</div>
				</div><!-- headerMenu -->
		<!-- ######  end_header_edit   ###### -->

			
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
	<div id="content" class="site-content">

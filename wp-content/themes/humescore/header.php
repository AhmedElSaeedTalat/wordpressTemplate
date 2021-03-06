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
	<div class="menuMobile">
		
		
		<section class="ml-5 classWidth">
			<div class="cls1">
				<?php echo humescores_get_svg(['icon' => "close" ]) ; ?>
			</div>
			<div class="searchSmMenu">
			<div class="searchIconSM">
			<?php echo humescores_get_svg(["icon" => "search"]);?>
			</div>
			<?php get_sidebar("search2");?>
		</div>
		<?php wp_nav_menu() ;?>
			<div class="borderCart_account">
			<p class="text-uppercase font-sizes pt-4">my account</p>
			<p class="text-uppercase font-sizes">cart</p>
		</div>
		<div>
			<?php get_sidebar("icon");?>
		</div>
		<div class="pt-4">&copy; 2017 Rootlayers. All Rights Reserved.</div>
		</section>
		
	</div>
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
							<div class=" col-lg-12 col-xl-4 d-flex align-items-center header_account">
								<span class="tags"><i class="fa fa-tags" aria-hidden="true"></i></span><a href="#"><p class="mainStyleText1">Summer Sales Discount Learn More</p></a>
							</div>
							<div class="col-lg-12 col-xl-8 d-flex align-items-center justify-content-end header_account" id="changeDirectionDiv">
								<a href="#"><span class="mainStyleText1">My account </span></a>
								<a href="#"><span class="mainStyleText1 headerTextSpanPadding">Checkout</span></a>
							</div>
						</div>
					</div>
				</div>
						<!-- header-Logo -->
				<div class="header_logo">
					<div class="container h-100" id="infoHeader">
						<div class="row ">
							<div class="col-12 d-flex justify-content-center header_logo_style align-items-center">
								<?php the_custom_logo();?>
							</div>
						</div>
						<!-- site Header Menu -->
						
						
						
					</div>
				</div>
					<div id="headerMenu">
						<div class="container h-100" >
							<div class="row  d-flex align-items-center"  >
								<div class="col-3  visible-md-down hidden-lg-up menuSmall">
									<?php echo humescores_get_svg(['icon'=> 'menu']);?>
									<?php echo humescores_get_svg(['icon'=> 'share2']);?>
								</div>
								<div class="col-5 col-sm-7 col-lg-2  d-flex justify-content-start" id="headerMenuContent">
								<div class="smallMenuSocialWrapper"><span class="smallMenuSocial">	<?php get_sidebar('menu');?></span></div>
								</div>
							<div class="col-8 hidden-md-down d-flex justify-content-center" >
								<nav id="site-navigation" class="main-navigation text-uppercase"  >
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'depth' 		=> '3',
											'after'			=> '<i class="fa fa-angle-down" aria-hidden="true"></i>'
										) );
										
									?>
								</nav>
							</div>
							<div class="col-3 col-sm-2 d-flex align-items-center  justify-content-end adjustIcons">
								<div class="shopping-bag pr-3">
									<a href="#"><i class="ion-bag"" aria-hidden="true"></i></a> 
								</div>
								<div class="searchIcon">
									<i class="ion-ios-search-strong" aria-hidden="true"></i>
								</div>
							</div>
						</div><!-- row -->
					</div>
				</div><!-- headerMenu -->
		<!-- ######  end_header_edit   ###### -->

			
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
	<div id="content" class="site-content">

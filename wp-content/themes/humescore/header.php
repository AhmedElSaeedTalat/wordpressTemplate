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
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'humescore' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<!-- ######  header_edit   ###### -->
						
				<div class="headWrapper">
					<div class="container ">
						<div class="row ">
							<div class="col-sm-4 d-flex align-items-center header_account">
								<p class="mainStyleText1">Summer Sales Discount Learn More</p>
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
						<div class="row d-flex justify-content-center" id="headerMenu" >
							<nav id="site-navigation" class="main-navigation "  
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'depth' 		=> '3',
										'after'			=> humescores_get_svg(['icon'=>'angle-down'])
									) );
									
								?>
							</nav><!-- #site-navigation -->	
						</div>
					</div>
				</div>

		<!-- ######  end_header_edit   ###### -->

			<?php
			
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
	<div id="content" class="site-content">

<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oncanvas
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container">
	<a class="skip-link screen-reader-text" href="#site-main"><?php esc_html_e( 'Skip to content', 'oncanvas' ); ?></a>
	<header class="site-header clearfix" role="banner">
	
		<div class="wrapper wrapper-header clearfix">
		
			<div class="site-branding clearfix">
				<?php
				if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
					jetpack_the_site_logo();
				} elseif ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
					oncanvas_the_custom_logo();
				} ?>
				<?php if ( 1 == get_theme_mod( 'oncanvas_header_display_tagline', 1 ) ) { ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div><!-- .site-branding --><?php if ( has_nav_menu( 'primary' ) ) { ?><div class="navbar-header">

				<?php wp_nav_menu( array(
					'container_id'   => 'menu-main-slick',
					'menu_id' => 'menu-slide-in',
					'sort_column' => 'menu_order', 
					'theme_location' => 'primary'
				) ); 
				?>

	        </div><!-- .navbar-header --><?php } ?><?php if ( has_nav_menu( 'primary' ) ) : ?><nav id="menu-main" role="navigation">
				<div class="wrapper-header-menu clearfix">
					<?php
					wp_nav_menu( array(
						'container' => '', 
						'container_class' => '', 
						'menu_class' => 'nav navbar-nav dropdown sf-menu', 
						'menu_id' => 'menu-main-menu', 
						'sort_column' => 'menu_order', 
						'theme_location' => 'primary', 
						'link_after' => '', 
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
					?>
				</div><!-- .wrapper-header-menu .clearfix -->
			</nav><!-- #menu-main -->
			<?php endif; ?>

			<div class="site-header-sep"></div>

		</div><!-- .wrapper .wrapper-header -->

	</header><!-- .site-header -->
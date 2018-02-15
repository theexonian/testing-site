<?php
// Get layout set in Customizer and override if post has its own layout selected via meta box
$layout_post = apply_filters( 'ct_mission_news_layout_filter', get_theme_mod( 'layout_posts' ) );
$layout_page = apply_filters( 'ct_mission_news_layout_filter', get_theme_mod( 'layout_pages' ) );
$layout_archives = get_theme_mod( 'layout_archives' );
$layout_blog = get_theme_mod( 'layout_blog' );
$layout_bbpress = get_theme_mod( 'layout_bbpress' );

if ( !function_exists('is_bbpress') ) {
	function is_bbpress() {
			return false;
	}
}

if (
	// Posts 
	(is_singular('post') && ($layout_post == 'left-sidebar' || $layout_post == 'left-sidebar-wide' || $layout_post == 'no-sidebar' || $layout_post == 'no-sidebar-wide') && !is_bbpress())
	// Pages
	|| (is_singular('page') && ($layout_page == 'left-sidebar' || $layout_page == 'left-sidebar-wide' || $layout_page == 'no-sidebar' || $layout_page == 'no-sidebar-wide') && !is_bbpress())
	// Archives
	|| (is_archive() && ($layout_archives == 'left-sidebar' || $layout_archives == 'left-sidebar-wide' || $layout_archives == 'no-sidebar' || $layout_archives == 'no-sidebar-wide') && !is_bbpress())
	// Blog
	|| (is_home() && ($layout_blog == 'left-sidebar' || $layout_blog == 'left-sidebar-wide' || $layout_blog == 'no-sidebar' || $layout_blog == 'no-sidebar-wide'))
	// bbPress
	|| (is_bbpress() && ($layout_bbpress == 'left-sidebar' || $layout_bbpress == 'left-sidebar-wide' || $layout_bbpress == 'no-sidebar' || $layout_bbpress == 'no-sidebar-wide'))
	) {
			return;
}
if ( is_active_sidebar( 'right' ) ) : ?>
	<aside class="sidebar sidebar-right" id="sidebar-right" role="complementary">
		<div class="inner">
			<?php dynamic_sidebar( 'right' ); ?>
		</div>
	</aside>
<?php endif;
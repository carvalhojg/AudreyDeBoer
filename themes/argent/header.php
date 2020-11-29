<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<img src="https://static.thenounproject.com/png/659803-200.png" alt="menu icon">
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );?>
				</nav> <!-- site-navigation -->
					
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>">
							<img src="https://imagery.zoogletools.com/u/328471/4f6d77195abe651bc35cada56139fd7eae23a87c/original/audreydeboer-wordmark-black.png" alt="Logo">
						</a>
					</div><!-- logo -->
				</header><!-- #masthead -->

			<div id="content" class="site-content">

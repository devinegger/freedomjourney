<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FreedomJourney
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'freedomjourney' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	    <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '+', 'freedomjourney' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu') ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
		    <div class="site-logo">
		        <?php the_custom_logo(); ?>
		    </div>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
			    <div class="site-description">
				    <p><?php echo $description; /* WPCS: xss ok. */ ?></p>
				</div>
			<?php
			endif; ?>	
		</div><!-- .site-branding -->	
	</header><!-- #masthead -->
	<div id="content" class="site-content">

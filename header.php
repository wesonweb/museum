<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanilla_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93994388-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-93994388-1');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vanilla' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="navigation-container">
			<div class="logo-nav">
				<a href="<?php bloginfo('url');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cheshammuseum.jpg" alt=""
				width="" height="" id="logo-link"></a>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><div class="line-one"></div><div class="line-two"></div><div class="line-three"></div></button>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location'	=> 'menu-1',
					'menu_class'		=> 'nav-menu',
					'menu_id'			=> 'nav-menu',
					'container'			=> 'nav',
					'container_class'	=> 'main-navigation',
					'container_id'		=>	'main-navigation',
					'echo'				=> true,
					'walker'			=> new Clean_Walker_Nav()
					
				));
			?>
		</div>
	</header>
	<div id="content" class="site-content">

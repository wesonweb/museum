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
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vanilla' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="social-media">
			<ul class="header-wrap social-media-links clearfix">
				<li>
					<a href="https://mydonate.bt.com/charities/cheshammuseum" class="donate-button">Donate</a>
				</li>
				<li>
					<a href="http://www.twitter.com/cheshammuseum">
					<img src="<?php echo get_template_directory_uri(); ?>/images/social-media/32-twitter.png" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.facebook.com/cheshammuseum">
						<img src="<?php echo get_template_directory_uri(); ?>/images/social-media/32-facebook.png" alt="">
					</a>
				</li>
			</ul>
		</div> <!-- end .social-media -->

		<div class="header-wrap clearfix">
			<div class="logo">
				<h1><a href="<?php bloginfo('url');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cheshammuseum.jpg" alt=""
				width="" height=""></a></h1>

			</div>
			<!-- end logo div  -->
			<!-- main nav -->
			<nav id="site-navigation" class="main-navigation container clearfix">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Open Menu', 'update' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'walker'				 => new Clean_Walker_Nav
					) );
				?>
			</nav><!-- #site-navigation -->


		</div>
		<!-- end header wrap -->


		<?php //get_template_part('template-parts/address'); ?>
		<?php //get_template_part('template-parts/donate'); ?>


	</header>

	<div id="content" class="site-content">

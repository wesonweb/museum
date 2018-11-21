<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cheshammuseum
 */
?>
		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="container">
					<!-- footer menu -->
					<nav aria-controls="secondary-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
								'walker'				 => new Clean_Walker_Nav
							) );
						?>
					</nav>

					<!-- copyright info -->
					<section class="legal-info">
						<p><?php echo theme_copyright(); ?> Chesham museum | Registered Charity Number: 1172671 | <a href="https://cheshammuseum.org.uk/privacy-policy/" class="footer-link">view our privacy policy</a></p>
					</section>

				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		<script src="<?php bloginfo('template_url'); ?>/js/cmscripts.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>

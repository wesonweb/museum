<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanilla_theme
 */

?>

	<footer id="colophon" class="site-footer clearfix">
		<div class="site-info container">
			<section class="legal-info">
				<p><?php echo theme_copyright(); ?> Chesham museum | Registered Charity Number: 1172671 | <a href="http://cheshammuseum.org.uk/privacy-policy/" class="footer-link">privacy policy</a></p>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<script src="<?php bloginfo('template_url'); ?>/js/cmscripts.js"></script>

<?php wp_footer(); ?>
</body>
</html>

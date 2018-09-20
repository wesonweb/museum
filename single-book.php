<?php
/**
 * The template for displaying all single book posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vanilla_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) : the_post();
		//get_template_part( 'template-parts/content', get_post_format() ); ?>
			<h1><?php the_title();?></h1>

			<?php
			the_post_thumbnail();
			the_field('book_synopsis');

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php get_header(); ?>
	<main id="main" class="content clearfix" role="main">
		<div class="container clearfix">
			<aside class="image-taxonomies">
				<h2>Photo taxonomies</h2>
				<?php
				$tax = 'photo-category';

				// get the terms of taxonomy
				$terms = get_terms( $tax );

				// loop through all terms
				foreach( $terms as $term ) {

					// if no entries attached to the term
					if( 0 == $term->count )
						// display only the term name
						echo '<li>' . $term->name . '</li>';

					// if term has more than 0 entries
					elseif( $term->count > 0 )
						// display link to the term archive
						echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';

				}

				?>

			</ul>
			</aside>
			<!-- end aside -->
			<article class="chesham-galleries">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_field('insert_gallery'); ?>
			<?php endwhile; ?>
			</article>
		<?php endif; ?>
		</div><!-- end .single-event -->
	</main><!-- #main -->
<?php get_footer(); ?>

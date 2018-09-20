<?php get_header(); ?>
	<main id="main" class="content clearfix" role="main">
		<div class="container clearfix">
			<!-- end aside -->
			<article class="chesham-galleries">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2>Photos of <?php the_title(); ?></h2>
				<?php the_field('insert_gallery'); ?>
				<?php endwhile; ?>
			</article>
				<?php endif; ?>

		<?php //wp_reset_postdata(); ?>
		<?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php if (is_single('689')) :
					the_field('train_info') ;  ?>
				<?php endif; ?>
		</div>
		<!-- show links to all the photo categories -->
		<?php rewind_posts(); ?>
			<div class="image-copyright">
				<div class="container">
					<h3>Copyright information</h3>
					<p><?php the_field('photo_copyright_text'); ?></p>
				</div>
			</div>
				<aside class="photo-category-list-container">
					<div class="">
						<h3>View more images of Chesham</h3>
							<ul class="photo-category-list">
							<?php
							// Get the 'image' post type
							$args = array(
						    'post_type' => 'imagetemplate'
							);
							$loop = new WP_Query($args); ?>
							<?php while($loop->have_posts()): $loop->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('chesham-images-thumb'); ?><span><?php	the_title(); ?></span></a>
								</li>
							<?php	endwhile;
								wp_reset_query();	?>
							</div>
						</ul>
				</aside>
				<div class="cross-sell">
					<div class="container">
						<h3>Read the life stories of Chesham's residents</h3>
						<p>Choose from the categories below</p>
						<?php
						// Get a list of all terms in a taxonomy
						$tax = array('story-category'
						);

						// get the terms of taxonomy
						$terms = get_terms( $tax, [
						  'hide_empty' => true, // do not hide empty terms
						]);
						?><ul class="tax-list"><?php
						// loop through all terms
						foreach( $terms as $term ) {

						  // if no entries attached to the term
						  if( 0 == $term->count )
						    // display only the term name
						    echo
								'<li>' . $term->name . '</li>';

						  // if term has more than 0 entries
						  elseif( $term->count > 0 )
						    // display link to the term archive
						    echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';

						} ?>
						</ul>
				</div>
			</div>
		<!-- </div> -->
		<!-- end .single-event -->
	</main><!-- #main -->
<?php get_footer(); ?>

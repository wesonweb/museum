<?php /* Template Name: Chesham stories */ ?>

<?php get_header();?>


	<main id="main" class="content" role="main">

		<section class="around-chesham-intro">
			<div class="welcome-message">
				<h2>Chesham stories</h2>
			</div>
		</section>


		<div class="container">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

		  <!-- <h2><span class="story-list-title">Chesham stories</span></h2> -->
			<p><span class="sentence-summary">Read the stories by clicking on the topics below</span></p>
		  <ul class="around-chesham-story-theme-list clearfix">
		  <?php
		    // Start the loop.
		    // while ( have_posts() ) : the_post();
		    // your taxonomy name
		    $tax = 'story-category';

		    // get the terms of taxonomy
		    $terms = get_terms( $tax, [
		    'hide_empty' => false, // do not hide empty terms
		    ]);

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
		    } ?>
		    <?php	//endwhile;?>
		  </ul>
		</div> <!-- end .story-navigation -->

		<?php //get_template_part('template-parts/coming', 'soon'); ?>
	</main><!-- .site-main -->

<?php get_footer(); ?>

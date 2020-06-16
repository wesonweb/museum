<?php /* Template Name: Shop */ ?>

<?php get_header(); ?>

	<main id="main" class="content content-area" role="main">
		<?php while (have_posts() ) : the_post() ?>
		<article class="container">
			<h2><?php the_title(); ?></h2>

			<?php if( get_field('feature_item') ): ?>
			<section class="featured-item clearfix">
				<div class="feature-photo">
					<?php $image = get_field('feature_item');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
				</div><!-- end feature photo -->
				<div class="feature-text">
					<?php the_field('feature_text'); ?>
				</div><!-- end feature text div -->
			</section><!-- end feature item section -->
	<?php endif; endwhile; ?>

			<section class="shop">
				<?php the_field('shop_items'); ?>
			</section><!-- end .shop -->
			<section class="publications">
				<h2>Publications for sale </h2>
					<?php if( have_rows('book_repeater_fields') ): ?>
						<ul class="book-list">

							<?php while( have_rows('book_repeater_fields') ): the_row();
								// vars
								$title = get_sub_field('title');
								$author = get_sub_field('author');
								$price = get_sub_field('price');
								$synopsis = get_sub_field('synopsis');
								$bookcover = get_sub_field('book_cover');
							?>

							<li>

								<?php if($bookcover): ?>
									<span class="book-cover">
									<img src="<?php echo $bookcover['url']; ?>" alt="<?php echo $bookcover['alt'] ?>" />
								</span>
								<?php endif; ?>
								<div class="book-container">
									<?php if( $title ): ?>
										<h3><span class="book-title"><?php echo $title; ?></span></h3>
									<?php endif; ?>

									<?php if( $author ): ?>
										<span class="author"><?php echo $author; ?></span>
									<?php endif; ?>

									<?php if( $price ): ?>
										<span class="price">price: £<?php echo $price; ?></span>
									<?php endif; ?>

									<?php if( $synopsis ): ?>
									<span class="synopsis"><?php echo $synopsis; ?></span>
								</div>
								<?php endif; ?>
							</li>
					<?php endwhile; endif; ?>
					</ul>

					<p><span class="buy-info">If you would like to buy any of our products, email shop@cheshammuseum.org.uk</span></p>
						</article>
			<?php //get_template_part('template-parts/coming', 'soon'); ?>


	</main><!-- .site-main -->

<?php get_footer(); ?>

<div class="latest-news-article container clearfix">
  <h3><span class="latest-news-header">Museum news</span>
    <span class="view-all"><a href="<?php echo get_page_link(321); ?>">read all news &rarr;</a></span>
  </h3>
  <section class="latest-news-content">
  <?php $newsarticles = new WP_Query (
    array (
    'post_type' => 'news',
    'posts_per_page' => 1,
    'order' => 'DESC'
      )
        );
      while ($newsarticles->have_posts() ):
      $newsarticles->the_post(); ?>

      <div class="latest-post-meta">
        <div>
          <?php the_post_thumbnail('homepage-thumb'); ?>
        </div>
        <div>
          <h2><span class="news-headline"><?php the_title(); ?></span></h2>
          <p><span class="readmore"><a href="<?php the_permalink(); ?>">Read more &rarr;</a></span></p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
      <!-- temporary message that museum is closed -->
    <div class="temp-closure">
      <?php the_field('homepage_temp_message'); ?>
    </div>
  </section>
</div><!-- end .latest-news-article-->

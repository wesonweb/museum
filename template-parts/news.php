<div class="latest-news-article clearfix">
  <h3>
    <span class="latest-news-header">Museum news</span>
    <span class="view-all"><a href="<?php echo get_page_link(321); ?>">read all news &rarr;</a></span>
  </h3>
  <section class="latest-news-content">
    <?php $newsarticles = new WP_Query (
      array (
      'post_type' => 'news',
      'posts_per_page' => 1,
      'order' => 'DESC'
        ));
        
        while ($newsarticles->have_posts() ):
        $newsarticles->the_post(); ?>
        <div class="latest-post-meta">
          <div class="latest-post-meta__image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div>
            <h2><span class="news-headline"><?php the_title(); ?></span></h2>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="button">Read more &rarr;</a></p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
  </section>
</div><!-- end .latest-news-article-->

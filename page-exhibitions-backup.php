<?php
/* Template Name: exhibitions template */
get_header(); ?>
	<div id="primary" class="content-area container">
		<main id="main" class="">
        <img src="<?php ?>" alt="Chesham Museum exhibitions banner" />
            <!-- WP query to show current exhibitions -->
            <div class="container exhibitions">
                <!-- <h2>Current exhibitions</h2> -->
                <?php $exhibitions = new WP_Query( array (
                'post_type' => 'exhibition',
                'paged' =>  $paged,
                'post_per_page' => -1
                )
                );
                while ($exhibitions->have_posts() ): $exhibitions->the_post(); ?> 
                <?php if(get_field('status')) : ?>
                    <article class="exhibition">
                        <div class="exhibition-summary">
                            <h2>Currently on display. </h2>
                        <p><span class="exhibition-location"><?php get_field('where'); ?></span></p>
                        <?php the_post_thumbnail();?>
                        <h3 class="exhibition-title"><?php the_field('exhibition_title'); ?></h3>
                            <div class="exhibition-meta">
                                <p><span class="exhibition-date">On display during </span><?php the_field('showing');  ?> </p>
                            </div>
                        <a href="<?php the_permalink(); ?>" class="cta">find out more &rarr;</a>
                    </article>
            
            <?else : ?>
                <article class="exhibition">
                    <div class="past-exhibition-summary">
                        <p>View this exhibition online</p>
                        <?php if(get_field('where')) : ?>
                        <p><span class="exhibition-location"><?php the_field('where'); ?></span></p>
                        <?php endif; ?>
                        <?php the_post_thumbnail();?>
                        <h3 class="exhibition-title"><?php the_field('exhibition_title'); ?></h3>
                            <?php if(get_field('showing')) : ?>
                            <div class="exhibition-meta">
                                <p><span class="exhibition-date">On display during </span><?php the_field('showing');  ?> </p>
                            </div>
                            <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="cta">find out more &rarr;</a>
                    </div>
                </article>
            <?endif; ?>
            <?php endwhile; ?>
        </div>
    <?php //the_content(); ?>    
	</main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();

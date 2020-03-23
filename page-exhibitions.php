<?php /* Template Name: exhibitions template */
get_header(); ?>
	<div id="primary" class="content-area container">
		<main id="main" class="">		
            <!-- WP query to show current exhibitions -->
            <!-- <div class="container"> -->
                <div class="currentexhibitioncontainer">
                    <?php $args = array(
                    'post_type'         => 'exhibition',
                    'paged'             => $paged,
                    'posts_per_page'    => -1,
                    'meta_query'        => array(
                        array(
                            'key'       => 'status',
                            'value'     => '1',
                            'compare'   => '=='
                        )
                        )
                        );
                        $currentexhibitions = new WP_Query($args);     
                        while ($currentexhibitions->have_posts() ): $currentexhibitions->the_post(); ?> 
                        <article class="current-exhibition">
                            <div class="exhibition-summary">
                                <h1>Currently on display</h1>
                                <div class="exhibition-meta">
                                    <p><span class="exhibition-date">On display </span> <?php the_field('exhibition_dates');  ?> </p>
                                    <p><span class="exhibition-date"> at <?php the_field('exhibition_location'); ?></span></p>
                                </div>
                                <?php the_post_thumbnail();?>
                                <h3 class="exhibition-title"><?php the_field('exhibition_title'); ?></h3>
                                <section class="excerpt">
                                    <?php the_field('landing_page_summary'); ?>
                                </section>
                                <a href="<?php the_permalink(); ?>" class="">find out more &rarr;</a>
                            </div>
                        </article>
                        <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <h2 class="previous-exhibitions">Previous exhibitions</h2>
            <div class="pastexhibitioncontainer">
                <?php $secondargs = array(
                'post_type' => 'exhibition',
                'paged' => $paged,
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'status',
                        'value' => '0',
                        'compare' => '=='
                    )
                )
                );
                $pastexhibitions = new WP_Query($secondargs);     
                while ($pastexhibitions->have_posts() ): $pastexhibitions->the_post(); ?>  
                    <article class="past-exhibition">
                        <div class="exhibition-summary past">
                            <h3 class="exhibition-title"><?php the_field('exhibition_title'); ?></h3>
                            <?php the_post_thumbnail();?>
                            <!-- <div class="exhibition-meta">
                            </div> -->
                            <?php the_field('landing_page_summary'); ?>
                            <a href="<?php the_permalink(); ?>" class="">view online &rarr;</a>
                        </div>
                    </article>
                <?php //endif; ?>
                <?php endwhile; ?>
            </div>
    <!-- </div>  -->
    <!-- closes container -->
    <?php //the_content(); ?>    
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();

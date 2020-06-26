<?php /* Template Name: exhibitions template */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="">		
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/exhibitions-banner.jpg"
                        height="" class="exhibition-banner" alt="Chesham museum banner">
                            <!-- WP query to show current exhibitions -->
                            <!-- <div class="container"> -->
                                
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
                                        
                                        if ($currentexhibitions->have_posts()) :?>
                                        <div class="exhibition__intro">
                                            <div class="container exhibition__intro--text">
                                                <h2>Chesham Museum exhibitions currently on display</h2>
                                                <p>Our exhibitions are on display in either the Elgiva or the library pariatur numquam iste veniam eaque ullam nemo quos rerum itaque corrupti libero, illum dolores aliquam. Architecto, fugiat in!</p>
                                            </div>
                                        </div>
                                        
                                    <div class="currentexhibitioncontainer">
                                        <?php while ($currentexhibitions->have_posts() ): $currentexhibitions->the_post(); ?> 
                                        <article class="current-exhibition">
                                            <div class="exhibition__summary">
                                                <div class="exhibition__meta">
                                                    <p> <i class="fas fa-map-marker-alt"></i>  <?php the_field('exhibition_location'); ?></p>
                                                    <p><span class="exhibition__date"><i class="far fa-calendar-alt"></i> ends <?php the_field('exhibition_dates');  ?>  </span></p>
                                                </div>
                                                <?php the_post_thumbnail();?>
                                                <section class="exhibition__excerpt">
                                                    <h3 class="exhibition__title"><?php //the_field('exhibition_title'); ?></h3>
                                                    <?php the_field('landing_page_summary'); ?>
                                                    <a href="<?php the_permalink(); ?>" class="button">find out more &rarr;</a>
                                                </section>
                                            </div>
                                        </article>
                                        <?php endwhile; endif;?>
                                </div>
                                <?php wp_reset_postdata(); ?>
                                <div class="exhibition__intro past">
                                    <div class="container exhibition__intro--text">
                                        <h2>Chesham Museum's previous exhibitions</h2>
                                        <p>If you missed our previous exhibitions don't worry–you can view them online. Each exhibition also includes a PDF version that you can download and keep.</p>
                                    </div>
                                </div>
                                
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
                                        <div class="exhibition__summary">
                                            <?php the_post_thumbnail();?>
                                            <section class="exhibition__excerpt">
                                                <h3 class="exhibition-title"><?php //the_field('exhibition_title'); ?></h3>
                                                <!-- <div class="exhibition-meta">
                                                </div> -->
                                                <?php the_field('landing_page_summary'); ?>
                                                <a href="<?php the_permalink(); ?>" class="button">view online &rarr;</a>
                                            </section>
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

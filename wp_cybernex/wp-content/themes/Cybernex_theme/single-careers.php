<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main id="careers-post">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-70">
            careers
            </h2>
            <p class="font-16">List of position for which we are currently recruiting</p>
        </div>
    </div>
    <div class="container">
        <section class="careers-detail">
            <div class="careers-title">
                <span class="date font-12"><?php $day = new DateTime( get_the_time('Y-m-d') ); echo $day->format('M d, Y'); ?></span>
                <?php
                    $career_categories = get_the_terms(get_the_ID(), 'category');
                    foreach ($career_categories as $career_category) :
                ?>
                <span class="category font-12 text-white red-bg"><?php echo $career_category->name; ?></span>
                <?php endforeach; ?>
                <?php
                    $career_types = get_the_terms(get_the_ID(), 'career_type');
                    foreach ($career_types as $career_type) :
                ?>
                <span class="font-12 red-bg"><?php echo $career_type->name; ?></span>
                <?php endforeach; ?>
                <p class="font-36 font-weight-bold my-5"><?php the_title(); ?></p>
            </div>
            <div class="careers-content"><?php the_content(); ?></div>
            <div class="text-right">
                <div class="d-md-flex">
                    <div class="red-btn mt-4">
                        <a href="<?php echo esc_url( home_url( 'careers' ) ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
                            <div class="font-16 font-weight-bold">View more</div>
                            <span class="font-20 font-weight-bold">&#62;</span>
                        </a>
                    </div>
                    <div class="red-btn mt-4 ml-4">
                        <a href="" class="ml-auto d-flex align-items-center justify-content-between">
                            <div class="font-16 font-weight-bold">Apply</div>
                            <span class="font-20 font-weight-bold">&#62;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="related-position">
            <?php  
                $category_ids = array();
                foreach($career_categories as $career_category) {
                    $category_ids[] = $career_category->term_id;
                }

                $related_args = array(
                    'post_type' => 'careers',
                    'posts_per_page' => -1,
                    'post__not_in' => array( get_the_ID() ),
                    'orderby' => 'post_date',
                    'order' => "DESC",
                    'tax_query' => [[
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $category_ids
                    ]]
                ); 
                $related_query = new WP_Query( $related_args );
            ?>
            <?php if( $related_query->have_posts() ) : ?>
            <h3 class="font-36 font-weight-bold mb-4">Related Position</h3>
            <div class="careers-list">
                <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                <div class="careers-item mb-4">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="careers-tag">
                            <?php
                                $career_categories = get_the_terms(get_the_ID(), 'category');
                                foreach ($career_categories as $career_category) :
                            ?>
                            <span class="category font-12 text-white red-bg"><?php echo $career_category->name; ?></span>
                            <?php endforeach; ?>
                            <?php
                                $career_types = get_the_terms(get_the_ID(), 'career_type');
                                foreach ($career_types as $career_type) :
                            ?>
                            <span class="font-12 red-bg"><?php echo $career_type->name; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="careers-date font-12"><?php $day = new DateTime( get_the_time('Y-m-d') ); echo $day->format('M d, Y'); ?> ~ Until filled</div>
                    </div>
                    <div class="font-18 font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="red-btn mt-4">
                <a href="<?php echo esc_url( home_url( 'careers' ) ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
                    <div class="font-16 font-weight-bold">View more</div>
                    <span class="font-20 font-weight-bold">&#62;</span>
                </a>
            </div>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
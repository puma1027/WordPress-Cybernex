<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main id="news-post">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-70">
                News
            </h2>
            <p class="font-16">Recent News Posts</p>
        </div>
    </div>
    <div class="container">
        <section class="news-detail">
            <div class="news-title">
                <span class="date font-12"><?php $day = new DateTime( get_the_time('Y-m-d') ); echo $day->format('M d, Y'); ?></span>
                <?php
                    $news_categories = get_the_terms(get_the_ID(), 'news_category');
                    foreach ($news_categories as $news_category) :
                ?>
                <span class="category font-12 text-white red-bg"><?php echo $news_category->name; ?></span>
                <?php endforeach; ?>
                <p class="font-36 font-weight-bold my-5"><?php the_title(); ?></p>
            </div>
            <div class="news-content"><?php the_content(); ?></div>
            <div class="red-btn mt-4">
                <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
                    <div class="font-16 font-weight-bold">View more</div>
                    <span class="font-20 font-weight-bold">&#62;</span>
                </a>
            </div>
        </section>
        <section class="related-news">
            <?php  
                $category_ids = array();
                foreach($news_categories as $news_category) {
                    $category_ids[] = $news_category->term_id;
                }

                $related_args = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                    'post__not_in' => array( get_the_ID() ),
                    'orderby' => 'post_date',
                    'order' => "DESC",
                    'tax_query' => [[
                        'taxonomy' => 'news_category',
                        'field' => 'term_id',
                        'terms' => $category_ids
                    ]]
                ); 
                $related_query = new WP_Query( $related_args );
            ?>
            <?php if( $related_query->have_posts() ) : ?>
            <h3 class="font-36 font-weight-bold mb-4">Related News</h3>
            <div class="news-list">
                <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-md-3 mb-2">
                        <div class="news-img">
                        <?php
                            if( has_post_thumbnail() ) {
                                the_post_thumbnail('news_thumb');
                            }
                        ?>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 pl-md-4 mb-md-3 mb-2">
                        <span class="date font-12"><?php $day = new DateTime( get_the_time('Y-m-d') ); echo $day->format('M d, Y'); ?></span>
                        <?php
                            $news_categories = get_the_terms(get_the_ID(), 'news_category');
                            foreach ($news_categories as $news_category) :
                        ?>
                        <span class="category font-12 text-white red-bg"><?php echo $news_category->name; ?></span>
                        <?php endforeach; ?>
                        <p class="font-18 font-weight-bold mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="red-btn mt-4">
                <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
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
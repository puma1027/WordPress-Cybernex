<?php 
get_header();

$category_id = get_query_var('category_id') ? get_query_var('category_id') : "";

$current_url = getCurrentUrl();

$args = array(
	'post_type' => 'news',
	'posts_per_page' => 5,
    'orderby' => 'post_date',
    'order' => "DESC",
); 

?>

<?php $custom_query = new WP_Query( $args ); ?>

<main id="top">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-50">
                Toward a psychological visualization platform essential for wellbeing
            </h2>
            <div class="who-btn mt-4">
                <a href="<?php echo get_site_url();?>/about" class="d-flex align-items-center justify-content-between">
                    <div class="font-16 font-weight-bold">Who we are</div>
                    <span class="font-20 font-weight-bold">&#62;</span>
                </a>
            </div>
        </div>
    </div>
    <div class="page-container">
        <section class="vision">
            <h2 class="font-50 font-weight-bold mb-3">Commitment to our vision</h2>
            <p class="font-20 font-weight-normal">Create value in a global marketplace where anyone can buy & sell. Building trust for a seamless society. These are the mission that Group have set out to achieve. In order to achieve these mission, we have always made bold investments
                in people, technology, and more.</p>
            <p class="font-20 font-weight-normal">Right now, the Group is in the middle of a transformation, growing from a startup to a company known around the world.</p>
            <div class="container">
                <div class="row mt-4 mt-md-5 py-4">
                    <div class="col-md-5 pr-5 text-left pc">
                        <img src="<?php echo get_template_directory_uri()?>/image/vision-img.jpg" alt="">
                    </div>
                    <div class="col-md-7 pt-2">
                        <h3 class="font-50 mb-3 font-weight-bold">Vision</h3>
                        <img class="sp my-4" src="<?php echo get_template_directory_uri()?>/image/vision-img.jpg" alt="">
                        <p class="font-20">We have seven values that we believe will help us grow and win as a SaaS business. We have 7 value criteria to grow as a SaaS business and keep winning.</p>
                        <div class="red-btn mt-4">
                            <a href="<?php echo get_site_url();?>/about#vision" class="d-flex align-items-center justify-content-between">
                                <div class="font-16 font-weight-bold">View more</div>
                                <span class="font-20 font-weight-bold">&#62;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mt-md-5 pt-4">
                    <div class="col-md-7 pt-2">
                        <h3 class="font-50 mb-3 font-weight-bold">Values</h3>
                        <img class="sp my-4" src="<?php echo get_template_directory_uri()?>/image/values-img.jpg" alt="">
                        <p class="font-20 ">We have seven values that we believe will help us grow and win as a SaaS business. We have 7 value criteria to grow as a SaaS business and keep winning.</p>
                        <div class="red-btn mt-4">
                            <a href="<?php echo get_site_url();?>/about#values" class="d-flex align-items-center justify-content-between">
                                <div class="font-16 font-weight-bold">View more</div>
                                <span class="font-20 font-weight-bold">&#62;</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 pl-5 text-right pc">
                        <img src="<?php echo get_template_directory_uri()?>/image/values-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="service">
            <h2 class="font-50 font-weight-bold mb-3">Service</h2>
            <p class="font-20 font-weight-normal">We have three core values to help us in achieving our vision</p>
            <div class="section-content mt-5 position-relative">
                <img src="<?php echo get_template_directory_uri()?>/image/top-service-bg.jpg" width="100%" alt="">
                <p class="font-26 text-white font-weight-bold position-absolute">What we do / Our Unique Point / Our Works</p>
                <div class="view-btn position-absolute">
                    <a href="<?php echo get_site_url();?>/service" class="d-flex align-items-center justify-content-between">
                        <div class="font-16 font-weight-bold">View more</div>
                        <span class="font-20 font-weight-bold">&#62;</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="message">
            <h2 class="font-50 font-weight-bold mb-3">Message</h2>
            <p class="font-20 font-weight-normal">We have three core values to help us in achieving our vision</p>
            <div class="section-content mt-5 position-relative">
                <img src="<?php echo get_template_directory_uri()?>/image/top-message-bg.jpg" width="100%" alt="">
                <p class="font-26 text-white font-weight-bold position-absolute">CEO Message</p>
                <div class="view-btn position-absolute">
                    <a href="<?php echo get_site_url();?>/message" class="d-flex align-items-center justify-content-between">
                        <div class="font-16 font-weight-bold">View more</div>
                        <span class="font-20 font-weight-bold">&#62;</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="careers">
            <h2 class="font-50 font-weight-bold mb-3">Careers</h2>
            <p class="font-20 font-weight-normal">We have three core values to help us in achieving our vision</p>
            <div class="section-content mt-5 position-relative">
                <img src="<?php echo get_template_directory_uri()?>/image/careers-bg.jpg" width="100%" alt="">
                <p class="font-26 text-white font-weight-bold position-absolute">Position List</p>
                <div class="view-btn position-absolute">
                    <a href="<?php echo get_site_url();?>/careers" class="d-flex align-items-center justify-content-between">
                        <div class="font-16 font-weight-bold">View more</div>
                        <span class="font-20 font-weight-bold">&#62;</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="links">
            <h2 class="font-50 font-weight-bold mb-3">Links</h2>
            <p class="font-20 font-weight-normal">We have three core values to help us in achieving our vision</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="section-content mt-5 position-relative">
                        <p class="font-26 text-white font-weight-bold">Members</p>
                        <div class="view-btn">
                            <a href="<?php echo get_site_url();?>/about#members" class="d-flex align-items-center justify-content-between">
                                <div class="font-16 font-weight-bold">View more</div>
                                <span class="font-20 font-weight-bold">&#62;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-content mt-5 position-relative">
                        <p class="font-26 text-white font-weight-bold">Access</p>
                        <div class="view-btn">
                            <a href="<?php echo get_site_url();?>/about#access" class="d-flex align-items-center justify-content-between">
                                <div class="font-16 font-weight-bold">View more</div>
                                <span class="font-20 font-weight-bold">&#62;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-content mt-5 position-relative">
                        <p class="font-26 text-white font-weight-bold">Contact</p>
                        <div class="view-btn">
                            <a href="<?php echo get_site_url();?>/contact" class="d-flex align-items-center justify-content-between">
                                <div class="font-16 font-weight-bold">View more</div>
                                <span class="font-20 font-weight-bold">&#62;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <h2 class="font-50 font-weight-bold mb-5">Related News</h2>
            <?php if( $custom_query->have_posts() ) : ?>
            <div class="news-list">
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
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

<?php get_footer(); ?>




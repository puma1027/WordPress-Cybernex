<?php 
get_header(); 
//カスタム投稿タイプ呼び出し
$post_type = get_post_type();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$category_id = get_query_var('category_id') ? get_query_var('category_id') : "";
$news_year = get_query_var('news_year') ? get_query_var('news_year') : "";

$current_url = getCurrentUrl();

$args = array(
	'post_type' => $post_type,
	'paged' => $paged,
	'posts_per_page' => 10,
    'orderby' => 'post_date',
    'order' => "DESC",
); 

if( !empty($news_year) ) {
    $args['date_query'] = [[
      'year' => $news_year,
    ]];
}

if( !empty($category_id) ) {
  $args['tax_query'] = [[
    'taxonomy' => 'news_category',
    'field' => 'term_id',
    'terms' => $category_id
  ]];
}

?>

<?php $custom_query = new WP_Query( $args ); ?>

<main id="news">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-70">
                News
            </h2>
            <p class="font-16">Recent News Posts</p>
        </div>
    </div>
    <div class="page-container">
        <section class="news row">
            <div class="col-md-9">
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
                <div class="wp-pagination-wrap">
                    <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $custom_query)); ?>
                </div>
                <?php else: ?>
                    <div class="text-center font-20">No data was found.</div>
                <?php endif; ?>
                <div class="red-btn mt-4">
                    <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
                        <div class="font-16 font-weight-bold">Contact Us</div>
                        <span class="font-20 font-weight-bold">&#62;</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="filter mb-5">
                    <div class="news-category">
                        <p class="font-18 font-weight-bold">Category</p>
                        <a href="<?php echo esc_url( remove_query_arg('category_id', $current_url ) ); ?>" class="category_all font-14 <?php echo empty( $category_id ) ? 'active' : ''; ?>">
                            <span></span>
                            <p>All</p>
                        </a>
                        <?php 
                        $args = array(
                            'taxonomy' => 'news_category',
                            'hide_empty' => false,
                            'orderby' => 'term_id',
                            'order' => 'ASC'
                        );
                        
                        $categories = get_terms($args);

                        foreach ($categories as $category) :

                        ?>
                        <a href="<?php echo esc_url( add_query_arg('category_id', $category->term_id, $current_url ) ); ?>" class="category_all font-14 <?php echo ( (int)$category_id == $category->term_id ) ? 'active' : ''; ?>">
                            <span></span>
                            <p><?php echo $category->name; ?></p>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="news-date mt-4">
                        <?php
                            $args_for_years = array(
                                'post_type' => $post_type,
                                'posts_per_page' => -1,
                                'orderby' => 'post_date',
                                'order' => "DESC",
                            );
                            $news_year_arr = []; 
                            $query_for_year = new WP_Query( $args_for_years );
                            if( $query_for_year->have_posts() ) {
                                while ( $query_for_year->have_posts() ) { 
                                    $query_for_year->the_post();
                                    $the_year = get_the_date('Y');
                                    array_push($news_year_arr, $the_year);
                                }
                                wp_reset_postdata();
                            }
                            $unique_year_arr = array_unique( $news_year_arr );
                        ?>
                        <p class="font-18 font-weight-bold">Year</p>
                        <a href="<?php echo esc_url( remove_query_arg('news_year', $current_url ) ); ?>" class="category_all font-14 <?php echo empty( $news_year ) ? 'active' : ''; ?>">
                            <span></span>
                            <p>All</p>
                        </a>
                        <?php foreach ($unique_year_arr as $unique_year) : ?>
                        <a href="<?php echo esc_url( add_query_arg('news_year', $unique_year, $current_url ) ); ?>" class="category_all font-14 <?php echo ( $news_year == $unique_year ) ? 'active' : ''; ?>">
                            <span></span>
                            <p><?php echo $unique_year; ?></p>
                        </a>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
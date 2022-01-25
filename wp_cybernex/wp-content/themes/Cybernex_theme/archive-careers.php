<?php 
get_header(); 
//カスタム投稿タイプ呼び出し
$post_type = get_post_type();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$category_id = get_query_var('category_id') ? get_query_var('category_id') : "";
$type_id = get_query_var('type_id') ? get_query_var('type_id') : "";

$current_url = getCurrentUrl();

$args = array(
	'post_type' => $post_type,
	'paged' => $paged,
	'posts_per_page' => 10,
    'orderby' => 'post_date',
    'order' => "DESC",
); 

$tax_query = [];

if( !empty($category_id) ) {
  $tax_query[] = [[
    'taxonomy' => 'category',
    'field' => 'term_id',
    'terms' => $category_id
  ]];
}

if( !empty($type_id) ) {
    $tax_query[] = [[
      'taxonomy' => 'career_type',
      'field' => 'term_id',
      'terms' => $type_id
    ]];
}

if( !empty($tax_query) ) {
    $args['tax_query'] = $tax_query;
}

?>

<?php $custom_query = new WP_Query( $args ); ?>
<main id="careers">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-70">
                Careers
            </h2>
            <p class="font-16">List of position for which we are currently recruiting</p>
        </div>
    </div>
    <div class="page-container">
        <section class="careers row">
            <div class="col-md-9">
                <?php if( $custom_query->have_posts() ) : ?>
                <div class="careers-list">
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <div class="careers-item mb-4">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="careers-tag">
                                <?php
                                    $career_categories = get_the_terms(get_the_ID(), 'category');
                                    foreach ($career_categories as $career_category) :
                                ?>
                                <span class="font-12 red-bg"><?php echo $career_category->name; ?></span>
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
                <div class="wp-pagination-wrap">
                    <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $custom_query)); ?>
                </div>
                <?php else: ?>
                    <div class="text-center font-20">No data was found.</div>
                <?php endif; ?>
                <div class="red-btn mt-4">
                    <a href="<?php echo esc_url( home_url('contact') ); ?>" class="ml-auto d-flex align-items-center justify-content-between">
                        <div class="font-16 font-weight-bold">Contact Us</div>
                        <span class="font-20 font-weight-bold">&#62;</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="filter mb-5">
                    <div class="careers-category">
                        <p class="font-18 font-weight-bold">Category</p>
                        <a href="<?php echo esc_url( remove_query_arg('category_id', $current_url ) ); ?>" class="category_all font-14 <?php echo empty( $category_id ) ? 'active' : ''; ?>">
                            <span></span>
                            <p>All</p>
                        </a>
                        <?php 
                        $args = array(
                            'taxonomy' => 'category',
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
                    <div class="careers-type mt-4">
                        <p class="font-18 font-weight-bold">Type</p>
                        <a href="<?php echo esc_url( remove_query_arg('type_id', $current_url ) ); ?>" class="category_all font-14 <?php echo empty( $type_id ) ? 'active' : ''; ?>">
                            <span></span>
                            <p>All</p>
                        </a>
                        <?php 
                        $args = array(
                            'taxonomy' => 'career_type',
                            'hide_empty' => false,
                            'orderby' => 'term_id',
                            'order' => 'ASC'
                        );
                        
                        $types = get_terms($args);

                        foreach ($types as $type) :

                        ?>
                        <a href="<?php echo esc_url( add_query_arg('type_id', $type->term_id, $current_url ) ); ?>" class="category_all font-14 <?php echo ( (int)$type_id == $type->term_id ) ? 'active' : ''; ?>">
                            <span></span>
                            <p><?php echo $type->name; ?></p>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
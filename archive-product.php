<?php /* Template Name: 产品列表 */ ?>

<?php get_header(); ?>
<?php
//合并所有查询调节并构造查询参数
$args = array(
    'post_type' => 'product',
    'posts_per_page' => '5',

    'paged' => $paged,
    'tax_query' => array(
        'relation' => 'AND'
    )
);

//新建查询对象
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) {
    $wp_query->the_post();
    echo '<hr>';
    the_title();
}
?>

<?php get_footer(); ?>
<?php get_header(); ?>
<?php
	//合并所有查询调节并构造查询参数
	$args = array(
	'post_type' => 'product',
	'posts_per_page' => '12',
	's' => $phone,
	'paged' => $paged,
	'tax_query' => array(
	'relation' => 'AND',
	//$array_star_sex,
	//$array_star_chuchang,
	//$array_star_daiyan,
	//$array_star_aera,
	$array_star_zhiye, //篇幅问题，上面的4个查询条件省略掉了，可以根据自己的需要添加,
	$array_star_zhiye2
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
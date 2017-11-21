<?php

function my_custom_post_movie() {
    $labels = array(
        'name'               => _x( '产品', 'post type 名称' ),
        'singular_name'      => _x( '产品', 'post type 单个 item 时的名称，因为英文有复数' ),
        'add_new'            => _x( '添加产品', '添加新产品的链接名称' ),
        'add_new_item'       => __( '新建一个产品' ),
        'edit_item'          => __( '编辑产品' ),
        'new_item'           => __( '新产品' ),
        'all_items'          => __( '所有产品' ),
        'view_item'          => __( '查看产品' ),
        'search_items'       => __( '搜索产品' ),
        'not_found'          => __( '没有找到有关产品' ),
        'not_found_in_trash' => __( '回收站里面没有相关产品' ),
        'parent_item_colon'  => '',
        'menu_name'          => '产品'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '我们网站的产品信息',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true
    );
    register_post_type( 'product', $args );
}

add_action( 'init', 'my_custom_post_movie' );

/**
 * 添加产品分类
 */

function my_taxonomies_movie() {
    $labels = array(
        'name'              => _x( '产品分类', 'taxonomy 名称' ),
        'singular_name'     => _x( '产品分类', 'taxonomy 单数名称' ),
        'search_items'      => __( '搜索产品分类' ),
        'all_items'         => __( '所有产品分类' ),
        'parent_item'       => __( '该产品分类的上级分类' ),
        'parent_item_colon' => __( '该产品分类的上级分类：' ),
        'edit_item'         => __( '编辑产品分类' ),
        'update_item'       => __( '更新产品分类' ),
        'add_new_item'      => __( '添加新的产品分类' ),
        'new_item_name'     => __( '新产品分类' ),
        'menu_name'         => __( '产品分类' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'product_category', 'product', $args );
}
add_action( 'init', 'my_taxonomies_movie', 0 );

/**
 * 根据文章对象获取第一张图片
 * @param $post  文章对象
 * @return string
 */

function get_product_img( $post ) {

    $id = $post->ID;

// 如果设置了缩略图
    $post_thumbnail_id = get_post_thumbnail_id( $id );
    if ( $post_thumbnail_id ) {
        $output = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
        $first_img = $output[0];
    }
    else { // 没有缩略图，查找文章中的第一幅图片
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];

        if(empty($first_img)){ // 既没有缩略图，文中也没有图，设置一幅默认的图片
            $first_img = "../asset/img/product1.png";
        }
    }
    return $first_img;
}